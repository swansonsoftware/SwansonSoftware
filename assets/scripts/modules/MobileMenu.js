import throttle from 'lodash/throttle';
class MobileMenu {
    constructor() {
        this.menuIcon = document.querySelector(".site-header__menu-icon");
        this.menuContent = document.querySelector(".site-header__menu-content");
        this.siteHeader = document.querySelector(".site-header");
        this.siteHeaderDark = document.querySelector(".site-header--dark");
        this.vcrContainer = document.querySelector(".slideshow__vcr-container");
        // this.albumWrapper = document.getElementById("aw");
        // this.menuOverlay = document.querySelector(".site-header__menu-overlay");
        // this.overlay = document.querySelector(".lightbox__overlay");
        this.prevScrollpos = window.pageYOffset;
        this.x = 0;
        this.y = 0;
        this.isCollapsed = true;
        if (this.menuIcon){
            this.menuIcon.classList.add("site-header__menu-icon--collapsed");
        }
        this.passiveSupported = false;
        this.testPassive();
        this.events();
    }

    //check if browser supports passive event handlers
    testPassive(){
        try {
            const options = {
                get passive() {
                    return false;
                },
            };
            this.passiveSupported = true;
        } catch (e) {
            console.log("no passive supporrt");
        }
    }

    events() {
        if (this.menuIcon){
            this.menuIcon.addEventListener("click", () => this.toggleMenu());
        }

        window.addEventListener("scroll", throttle( () => this.runOnScroll(), this.throttleTimerMS));
        if (this.albumWrapper){
            // window.addEventListener("scroll", throttle( e => this.runOnScroll(e), this.throttleTimerMS));
            // this.albumWrapper.addEventListener("scroll", e => {e.preventDefault()});
            // this.albumWrapper.addEventListener("scroll", e => {this.runOnScroll(e)});

            // this.albumWrapper.addEventListener("scroll", () => this.runOnScroll());
            // var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';
            // console.log(this.passiveSupported);
            // window.addEventListener(wheelEvent, e => this.runOnScroll(e), false);


        }
    }
    
    /**
     * runOnScroll 
     * Cancel scroll when mobile menu is visible
     */
    runOnScroll(e){
        // console.log('runonscroll');
        // if (! this.isCollapsed){
        //     if (this.albumWrapper){
                
        //         this.albumWrapper.scrollTo(0,0);
        //         // console.log('should be scrolling to 0');
        //     }
        // }
        // // console.log("left: " + this.menuOverlay.style.left);
        // var currentScrollPos = window.pageYOffset;
        // if (this.prevScrollpos > currentScrollPos) {
        //     //expand
        //     if (this.menuOverlay){
        //         // this.menuOverlay.style.top = "0";
        //         // this.menuOverlay.style.left = "0";
        //         // console.log('set top = 0');
        //         console.log(this.menuOverlay.style.left);
        //     }
        //   } else {
        //     //collapse
        //     console.log("no menuOverlay");

        //   }
        var currentScrollPos = window.pageYOffset;
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

        // this.overlay.classList.toggle("site-header__menu-overlay--isvisible");

        // if (this.menuOverlay){
        //     this.menuOverlay.classList.toggle("site-header__menu-overlay--isvisible");
        // } else {
        //     this.menuContent.classList.toggle("site-header__menu-content--is-visible");
        //     this.siteHeader.classList.toggle("site-header--is-expanded");
        // }

        if (this.siteHeaderDark){
            this.siteHeaderDark.classList.toggle("site-header--is-expanded--dark")
        }
        // this.menuIcon.classList.remove("site-header__menu-icon");
        // this.menuIcon.classList.add("site-header__menu-icon--close");
        // this.menuIcon.classList.toggle("site-header__menu-icon--close-x");
        if (this.isCollapsed){
            //the bars menu icon shows
            this.menuIcon.classList.remove("site-header__menu-icon--collapsed");
            this.menuIcon.classList.add("site-header__menu-icon--expanded");
            document.body.classList.add('no-scroll');

            if (this.vcrContainer){
                this.vcrContainer.classList.add("slideshow__vcr-container--kill");
            }
            this.isCollapsed = false;

        } else {
            //the close menu icon shows
            this.menuIcon.classList.add("site-header__menu-icon--collapsed");
            this.menuIcon.classList.remove("site-header__menu-icon--expanded");
            document.body.classList.remove('no-scroll');
            // document.body.style.overflowY = "auto";
            // window.scrollTo(this.x, this.y);
            if (this.vcrContainer){
                this.vcrContainer.classList.remove("slideshow__vcr-container--kill");
            }
            this.isCollapsed = true;
        }
    }
}

export default MobileMenu;