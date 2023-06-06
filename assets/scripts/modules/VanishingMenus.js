import throttle from 'lodash/throttle';

class VanishingHeader {
    constructor() {
        this.siteHeader = document.querySelector(".site-header");
        this.siteHeaderAlbum = document.querySelector(".site-header--album-slideshow");
        this.menuIcon = document.querySelector(".site-header__menu-icon--expanded");
        this.albumNav = document.querySelector(".album-nav");
        this.vcrContainer = document.querySelector(".slideshow__vcr-container");
        this.isSmallScreen = false;

        if (window.innerWidth > 500 && window.innerHeight > 500){
            this.isSmallScreen = false;
        } else {
            this.isSmallScreen = true;
        }

        this.siteHeaderAlbum.style.position = "fixed";
        if (this.isSmallScreen){
            this.siteHeader.style.width = "100%"; //for slideshow mobile only, as photos may take entire width vs. text which does not.
        } else {
            this.siteHeader.style.maxWidth = "100%"; //for slideshow non-mobile only, as photos may take entire width vs. text which does not.
        }
        this.siteHeader.style.backgroundColor = "rgba(0,0,0,0.5)";
        this.siteHeader.style.left = "50%";
        this.siteHeader.style.transform = "translate(-50%, 0%)";

        this.noHideMenu = false;
        this.headerTimer;
        this.vcrButtonsTimer;
        this.hideDelayMS = 3000;
        this.throttleTimerMS = 300;
        this.pointermoveFlag = 0;
        this.touch = 0;
        this.events();
        if (this.isSmallScreen){
            this.runOnTouch();
            this.runOnTouchEnd();
        } else {
            this.runOnPointerMove();
        }
    }

    events() {
        window.addEventListener("pointermove", throttle( () => this.runOnPointerMove(), this.throttleTimerMS));
        
        //show the VCR controls on mobile devices when user taps
        window.addEventListener("touchstart", throttle( () => this.runOnTouch(), this.throttleTimerMS));
        window.addEventListener("touchend", throttle( () => this.runOnTouchEnd(), this.throttleTimerMS));

        //Prevent the menu and VCR buttons from hiding when the mouse pointer hovers over
        if (this.siteHeader) {
            this.siteHeader.addEventListener("mouseover", () => {this.setNoHideMenu(true)}); //don't hide the menu when user is accessing it
            this.siteHeader.addEventListener("mouseout", () => {this.setNoHideMenu(false)});  //resume hiding the menu
            if (this.vcrContainer) {
                this.vcrContainer.addEventListener("mouseover", () => {this.setNoHideMenu(true)});
                this.vcrContainer.addEventListener("mouseout", () => {this.setNoHideMenu(false)});
            }
        }
    }

    /**
     * setNoHideMenu
     * Set the flag to prevent hiding the menu. This is an event handler, activated by mouseover/mouseout.
     */
    setNoHideMenu(hideMenuOption) {
        this.noHideMenu = hideMenuOption;
        this.pointermoveFlag = 0;
    }

    /**
     * runOnPointerMove
     * Show menu and VCR buttons, for desktop
     */
    runOnPointerMove() {
        if ( ! this.isSmallScreen ){
            this.siteHeader.classList.remove("site-header__slideshow-collapse");
            this.siteHeader.classList.add("site-header__slideshow-expand");
            this.siteHeader.style.backgroundColor = "rgba(0,0,0,0.5)";

            if (this.albumNav){
                this.albumNav.style.background = "transparent";
            }
            this.showVcrButtons();
            if (this.pointermoveFlag == 0) { //prevent calling hideHeader multiple times (it makes menu flicker)
                this.pointermoveFlag = 1;
                this.headerTimer = setTimeout(()=> this.hideHeader(), this.hideDelayMS);
            }
        }
    }

    /**
     * runOnTouch
     * Show VCR buttons and menu, for mobile devices
     */
    runOnTouch() {
        this.showVcrButtons();
        this.siteHeader.classList.remove("site-header__slideshow-collapse");
        this.siteHeader.classList.add("site-header__slideshow-expand");
        this.siteHeader.style.backgroundColor = "rgba(0,0,0,0.5)";
    }

    /**
     * runOnTouchEnd
     * Hide VCR buttons and menu, for mobile devices
     */
    runOnTouchEnd() {
        if (this.touch == 0) {
            this.touch = 1;
            this.vcrButtonsTimer = setTimeout(()=> this.touchHideNav(), this.hideDelayMS);
        }
    }

    hideHeader() {
        if (this.pointermoveFlag == 1) {
            if (this.noHideMenu == false){
                this.siteHeader.classList.add("site-header__slideshow-collapse");
                this.siteHeader.classList.remove("site-header__slideshow-expand");
                this.siteHeader.style.backgroundColor = "transparent";
                this.hideVcrButtons();
                this.pointermoveFlag = 0;
            }
        }
    }

    touchHideNav() {
        if (this.touch == 1) {
            this.menuIcon = document.querySelector(".site-header__menu-icon--expanded");
            if (this.menuIcon){
                //don't hide the menu icon while the menu is expanded
                this.vcrButtonsTimer = setTimeout(()=> this.touchHideNav(), this.hideDelayMS);
            } else {
                this.siteHeader.classList.add("site-header__slideshow-collapse");
                this.siteHeader.classList.remove("site-header__slideshow-expand");
                this.siteHeader.style.backgroundColor = "transparent";
                this.hideVcrButtons();
                this.touch = 0;
            }
        }
    }

    showVcrButtons(){
        if (this.vcrContainer) {
            this.vcrContainer.classList.add("slideshow__vcr-container--is-visible");
            this.vcrContainer.classList.remove("slideshow__vcr-container--is-hidden");
            this.vcrContainer.style.background = "rgba(0,0,0,0.5)";
        } 
    }

    hideVcrButtons(){
        if (this.vcrContainer) {
            this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
            this.vcrContainer.classList.remove("slideshow__vcr-container--is-visible");
            this.vcrContainer.style.backgroundColor = "transparent";
        }
    }
}

export default VanishingHeader;
