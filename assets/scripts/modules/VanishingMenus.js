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
        this.theTimer;
        this.events();
    }

    events() {
        window.addEventListener("pointermove", throttle( () => this.runOnPointerMove(), 200));
    }

    runOnPointerMove() {
        this.menuContent.classList.add("site-header__menu-content--is-visible");
        this.menuContent.classList.remove("site-header__menu-content--is-hidden");
        this.vcrContainer.classList.add("slideshow__vcr-container--is-visible");
        this.vcrContainer.classList.remove("slideshow__vcr-container--is-hidden");
        this.siteHeader.style.backgroundColor = "rgba(255,255,255,0.2)";
        this.vcrContainer.style.background = "rgba(0,0,0,0.5)";
        this.theTimer = setTimeout(()=> this.hideHeader(), 4000);
    }

    hideHeader() {
        clearTimeout(this.theTimer);
        this.menuContent.classList.remove("site-header__menu-content--is-visible");
        this.menuContent.classList.add("site-header__menu-content--is-hidden");
        this.vcrContainer.classList.add("slideshow__vcr-container--is-hidden");
        this.vcrContainer.classList.remove("slideshow__vcr-container--is-visible");
        this.siteHeader.style.backgroundColor = "transparent";
        this.vcrContainer.style.backgroundColor = "transparent";
    }
}

export default VanishingHeader;
