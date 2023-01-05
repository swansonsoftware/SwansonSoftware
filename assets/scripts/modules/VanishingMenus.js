import throttle from 'lodash/throttle';

class VanishingHeader {
    constructor() {
        this.siteHeader = document.querySelector(".site-header");
        this.menuContent = document.querySelector(".site-header__menu-content");
        this.menuContent.classList.add("site-header__menu-content--is-hidden");
        this.vcrContainer = document.querySelector(".slideshow__vcr-container");
        this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
        this.siteHeader.style.backgroundColor = "transparent";
        this.vcrContainer.style.backgroundColor = "transparent";
        this.headerTimer;
        this.pointermove = 0;
        this.touch = 0;
        this.events();
    }

    events() {
        window.addEventListener("pointermove", throttle( () => this.runOnPointerMove(), 300));
        //need to show the VCR controls on mobile devices, or make them appear with tap
        window.addEventListener("touchstart", throttle( () => this.runOnTouch(), 300));
    }

    runOnPointerMove() {
        // console.log('pointermoved');
        this.menuContent.classList.add("site-header__menu-content--is-visible");
        this.menuContent.classList.remove("site-header__menu-content--is-hidden");
        this.vcrContainer.classList.add("slideshow__vcr-container--is-visible");
        this.vcrContainer.classList.remove("slideshow__vcr-container--is-hidden");
        this.siteHeader.style.backgroundColor = "rgba(255,255,255,0.2)";
        this.vcrContainer.style.background = "rgba(0,0,0,0.5)";
        if (this.pointermove == 0) { //prevent calling hideHeader multiple times, causing flickering of menus
            this.pointermove = 1;
            this.headerTimer = setTimeout(()=> this.hideHeader(), 4000);
        }
    }

    runOnTouch() {
        this.vcrContainer.classList.add("slideshow__vcr-container--is-visible");
        this.vcrContainer.classList.remove("slideshow__vcr-container--is-hidden");
        this.vcrContainer.style.background = "rgba(0,0,0,0.5)";
        if (this.touch == 0) {
            this.touch = 1;
            this.headerTimer = setTimeout(()=> this.hideVcrButtons(), 4000);
        }
    }

    hideHeader() {
        if (this.pointermove == 1) {
            console.log('hideHeader');
            this.menuContent.classList.remove("site-header__menu-content--is-visible");
            this.menuContent.classList.add("site-header__menu-content--is-hidden");
            this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
            this.vcrContainer.classList.remove("slideshow__vcr-container--is-visible");
            this.siteHeader.style.backgroundColor = "transparent";
            this.vcrContainer.style.backgroundColor = "transparent";
            this.pointermove = 0;
        }
    }

    hideVcrButtons() {
        if (this.touch == 1) {
            this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
            this.vcrContainer.classList.remove("slideshow__vcr-container--is-visible");
            this.vcrContainer.style.backgroundColor = "transparent";
            this.touch = 0;
        }
    }
}

export default VanishingHeader;
