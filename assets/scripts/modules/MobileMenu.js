class MobileMenu {
    constructor() {
        this.menuIcon = document.querySelector(".site-header__menu-icon");
        this.menuContent = document.querySelector(".site-header__menu-content");
        this.siteHeader = document.querySelector(".site-header");
        this.siteHeaderDark = document.querySelector(".site-header--dark");
        this.events();
    }

    events() {
        this.menuIcon.addEventListener("click", () => this.toggleMenu());
    }

    toggleMenu() {
        this.menuContent.classList.toggle("site-header__menu-content--is-visible");
        this.siteHeader.classList.toggle("site-header--is-expanded");
        if (this.siteHeaderDark){
            this.siteHeaderDark.classList.toggle("site-header--is-expanded--dark")
        }
        this.menuIcon.classList.toggle("site-header__menu-icon--close-x");
    }
}

export default MobileMenu;