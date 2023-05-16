import throttle from 'lodash/throttle';

class VanishingHeader {
    constructor() {
        this.siteHeader = document.querySelector(".site-header");
        this.menuContent = document.querySelector(".site-header__menu-content");
        this.menuContent.classList.add("site-header__menu-content--is-hidden");
        this.vcrContainer = document.querySelector(".slideshow__vcr-container");
        this.isSmallScreen = false;
        if (window.innerWidth > 500 && window.innerHeight > 500){
            this.isSmallScreen = false;
        } else {
            this.isSmallScreen = true;
            //remove the blur on small devices, otherwise the menu blur is never hidden on touch screens
            this.siteHeader.classList.add("site-header--is-hidden"); //only removes the blur (backdrop-filter:none)
        }
        if ( ! this.isSmallScreen ){ //start with VCR buttons hidden, except on small mobile devices
            if (this.vcrContainer) {
                this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
            }
        }
        this.siteHeader.style.backgroundColor = "transparent";
        if (this.vcrContainer) {
            this.vcrContainer.style.backgroundColor = "transparent";
        }
        this.noHideMenu = false;
        this.headerTimer;
        this.vcrButtonsTimer;
        this.hideDelayMS = 3000;
        this.throttleTimerMS = 300;
        this.pointermoveFlag = 0;
        this.touch = 0;
        this.events();
    }

    events() {
        window.addEventListener("pointermove", throttle( () => this.runOnPointerMove(), this.throttleTimerMS));
        // window.addEventListener("pointermove", () => this.runOnPointerMove());
        
        //show the VCR controls on mobile devices when user taps
        window.addEventListener("touchstart", throttle( () => this.runOnTouch(), this.throttleTimerMS));
        //Prevent the menu and VCR buttons from hiding when the mouse pointer hovers over
        if (this.siteHeader) {
            this.siteHeader.addEventListener("mouseover", () => {this.setNoHideMenu(true)}); //don't hide the menu when user is accessing it
            this.siteHeader.addEventListener("mouseout", () => {this.setNoHideMenu(false)});  //resume hiding the menu
            if (this.vcrContainer) {
                this.vcrContainer.addEventListener("mouseover", () => {this.setNoHideMenu(true)});
                this.vcrContainer.addEventListener("mouseout", () => {this.setNoHideMenu(false)});
            }
        }
        // console.log("window.innerWidth: " + window.innerWidth);
        //alert(window.innerWidth);
    }

    setNoHideMenu(hideMenuOption) {
        this.noHideMenu = hideMenuOption;
        this.pointermoveFlag = 0;
        // console.log("Set noHideMenu: " + hideMenuOption + ", this.pointermoveFlag: " + this.pointermoveFlag);
    }

    runOnPointerMove() {
        // console.log('pointermoved' + ", this.pointermoveFlag: " + this.pointermoveFlag);
        if ( ! this.isSmallScreen ){
            this.menuContent.classList.add("site-header__menu-content--is-visible");
            this.menuContent.classList.remove("site-header__menu-content--is-hidden");
            this.siteHeader.classList.remove("site-header--is-hidden");
            this.siteHeader.style.backgroundColor = "rgba(255,255,255,0.1)";
            if (this.vcrContainer) {
                this.vcrContainer.classList.add("slideshow__vcr-container--is-visible");
                this.vcrContainer.classList.remove("slideshow__vcr-container--is-hidden");
                this.vcrContainer.style.background = "rgba(0,0,0,0.5)";
            }
            if (this.pointermoveFlag == 0) { //prevent calling hideHeader multiple times (it makes menu flicker)
                this.pointermoveFlag = 1;
                this.headerTimer = setTimeout(()=> this.hideHeader(), this.hideDelayMS);
            }
        }
    }

    //For mobile devices
    runOnTouch() {
        if (this.vcrContainer) {
            this.vcrContainer.classList.add("slideshow__vcr-container--is-visible");
            this.vcrContainer.classList.remove("slideshow__vcr-container--is-hidden");
            this.vcrContainer.style.background = "rgba(0,0,0,0.5)";
        } 
        if (this.touch == 0) {
            this.touch = 1;
            this.vcrButtonsTimer = setTimeout(()=> this.hideVcrButtons(), this.hideDelayMS);
        }
    }

    hideHeader() {
        if (this.pointermoveFlag == 1) {
            if (this.noHideMenu == false){
                console.log('hiding menu');
                this.menuContent.classList.remove("site-header__menu-content--is-visible");
                this.menuContent.classList.add("site-header__menu-content--is-hidden");
                this.siteHeader.classList.add("site-header--is-hidden");
                this.siteHeader.style.backgroundColor = "transparent";
                if (this.vcrContainer) {
                    this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
                    this.vcrContainer.classList.remove("slideshow__vcr-container--is-visible");
                    this.vcrContainer.style.backgroundColor = "transparent";
                }
                this.pointermoveFlag = 0;
            }
        }
    }

    hideVcrButtons() {
        if (this.touch == 1) {
            if (this.vcrContainer) {
                this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
                this.vcrContainer.classList.remove("slideshow__vcr-container--is-visible");
                this.vcrContainer.style.backgroundColor = "transparent";
            }
            this.touch = 0;
        }
    }
}

export default VanishingHeader;
