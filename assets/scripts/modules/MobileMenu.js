import throttle from 'lodash/throttle';
class MobileMenu {
    constructor() {
        this.menuIcon = document.querySelector(".site-header__menu-icon");
        this.menuContent = document.querySelector(".site-header__menu-content");
        this.siteHeader = document.querySelector(".site-header");
        this.siteHeaderDark = document.querySelector(".site-header--dark");
        this.vcrContainer = document.querySelector(".slideshow__vcr-container");
        // this.prevScrollpos = window.pageYOffset; deprecated
        this.prevScrollpos = window.scrollY;
        this.x = 0;
        this.y = 0;
        this.isCollapsed = true;
        if (this.menuIcon){
            this.menuIcon.classList.add("site-header__menu-icon--collapsed");
        }
        // this.passiveSupported = false;
        // this.testPassive();
        this.events();
    }

    //Not needed:
    //check if browser supports passive event handlers
    // testPassive(){
    //     try {
    //         const options = {
    //             get passive() {
    //                 return false;
    //             },
    //         };
    //         this.passiveSupported = true;
    //     } catch (e) {
    //         console.log("no passive supporrt");
    //     }
    // }

    events() {
        if (this.menuIcon){
            this.menuIcon.addEventListener("click", () => this.toggleMenu());
        }

        window.addEventListener("scroll", throttle( () => this.runOnScroll(), this.throttleTimerMS));
    }
    
    /**
     * runOnScroll 
     * Show menu when scrolling up, hide menu when scrolling down.
     */
    runOnScroll(e){
        // var currentScrollPos = window.pageYOffset; deprecated, using scrollY
        var currentScrollPos = window.scrollY;
        if (this.prevScrollpos > currentScrollPos) {
            //expand
            this.menuContent.classList.add('site-header__menu-content--expand');
            this.menuContent.classList.remove('site-header__menu-content--collapse');
          } else {
            //collapse
            this.menuContent.classList.remove('site-header__menu-content--expand');
            this.menuContent.classList.add('site-header__menu-content--collapse');
          }
          this.prevScrollpos = currentScrollPos;

    }

    toggleMenu() {
        this.menuContent.classList.toggle("site-header__menu-content--is-visible");
        this.siteHeader.classList.toggle("site-header--is-expanded");


        if (this.siteHeaderDark){
            this.siteHeaderDark.classList.toggle("site-header--is-expanded--dark")
        }

        if (this.isCollapsed){
            //the bars menu icon shows
            this.menuIcon.classList.remove("site-header__menu-icon--collapsed");
            this.menuIcon.classList.add("site-header__menu-icon--expanded");
            document.body.classList.add('no-scroll');

            if (this.vcrContainer){
                this.vcrContainer.classList.add("slideshow__vcr-container--kill");
                this.siteHeader.style.height = "100%";
            }
            this.isCollapsed = false;

        } else {
            //the close menu icon shows
            this.menuIcon.classList.add("site-header__menu-icon--collapsed");
            this.menuIcon.classList.remove("site-header__menu-icon--expanded");
            document.body.classList.remove('no-scroll');
            if (this.vcrContainer){
                this.vcrContainer.classList.remove("slideshow__vcr-container--kill");
                this.siteHeader.style.height = "90px";
            }
            this.isCollapsed = true;
        }
    }
}

export default MobileMenu;