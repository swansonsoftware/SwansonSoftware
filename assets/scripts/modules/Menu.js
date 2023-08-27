import throttle from 'lodash/throttle';
class Menu {
    constructor() {
        this.primaryNavElement = document.querySelector('.primary-nav');
        this.albumNavElement = document.querySelector('.album-nav');
        this.injectMenuHtTML();
        this.albumSubMenus = document.querySelectorAll('.album-nav__menu-dropdown-wrapper');
        // this.albumMenuLabels = document.querySelectorAll('.album-nav__menu-dropdown-label');
        this.isExpanded = false;
        this.passiveSupported = false;
        this.testPassive();
        this.cancelEvents = false;
        this.siteHeader = document.querySelector(".site-header");
        this.siteHeaderMenuIcon = document.querySelector(".site-header__menu-icon");
        //this.prevScrollpos = window.pageYOffset; deprecated
        this.prevScrollpos = window.scrollY;
        this.throttleTimerMS = 200;
        this.events();
        this.setSelectedMenuItem();
    }

    /**
     * testPassive
     * Check and set passive flag if browser supports passive event handlers
     */
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
        if (this.albumSubMenus) {
            this.albumSubMenus.forEach(el => el.addEventListener("mouseover", () => {this.menuHover(el)}));
            this.albumSubMenus.forEach(el => el.addEventListener("click", e => {this.menuClick(el)}));
        }

        // if (this.albumSubMenuLinks) {
        //     this.albumSubMenuLinks.forEach(el => el.addEventListener("click", e => {this.linkClick(el, e)}));
        //     console.log('albumSubMenuLinks ' + this.albumSubMenuLinks.length);
        // }

        document.addEventListener("click", e => {this.clickOut(e)});
        window.addEventListener("scroll", throttle( () => this.runOnScroll(), this.throttleTimerMS));
    }

    injectMenuHtTML() {
        if (this.primaryNavElement != null) {
            this.primaryNavElement.insertAdjacentHTML("beforeend", `
                <ul>
                    <li><a id="photos" href="./album/photos.html">Album</a></li>
                    <li><a id="process-models" href="process-models.html">Process Models</a></li>
                    <li><a id="requirements" href="requirements.html">Requirements</a></li>
                    <li><a id="design" href="design.html">Design</a></li>
                    <li><a id="lifecycle-models" href="life-cycle-models.html">Lifecycle Models</a></li>
                    <li><a id="reviews" href="reviews.html">Reviews</a></li>
                </ul>
            `)
        }
        if (this.albumNavElement != null) {

            // Example drop down menu code
            // <li class="album-nav__menu-dropdown-wrapper"><a href="#" class="album-nav__menu-dropdown-label">Favorites</a>
            //     <div class="album-nav__dropdown-content">
            //         <a href="favorites-rosegarden.html">Rosegarden</a>
            //         <a href="favorites-kauai.html">Kauai</a>
            //     </div>
            // </li>
    

            this.albumNavElement.insertAdjacentHTML("beforeend", `
            <ul>
                <li class="album-nav"><a id="photos" href="photos.html">Album</a></li>
                <li class="album-nav"><a id="recipes" href="recipes.html">Recipes</a></li>
                <!--<li class="album-nav"><a id="music" href="music.html">Music</a></li>-->
                <li class="album-nav"><a id="favorites" href="favorites.html">Favorites</a></li>
                <li class="album-nav"><a id="a1900s" href="1900s.html">1900s</a></li>
                <li class="album-nav"><a id="a2000s" href="2000s.html">2000s</a></li>
                <li class="album-nav"><a id="a2010s" href="2010s.html">2010s</a></li>
                <li class="album-nav"><a id="a2020s" href="2020s.html">2020s</a></li>
                <!--<li class="album-nav"><a id="a2020s" href="2020s-info.html">2020s i</a></li>-->
            </ul>
            `)
        }
    }

    /**
     * runOnScroll 
     * Hide the menu when user scrolls down; show the menu when user scrolls up.
     */
    runOnScroll(){
        // var currentScrollPos = window.pageYOffset;
        var currentScrollPos = window.scrollY;
        if (this.prevScrollpos > currentScrollPos) {
            //scrolling up
            this.siteHeader.classList.remove('site-header--collapse');
            this.siteHeader.classList.add('site-header--expand');
            this.siteHeaderMenuIcon.classList.remove('site-header__menu-icon--collapse');
            this.siteHeaderMenuIcon.classList.add('site-header__menu-icon--expand');
          } else {
            //scrolling down - for touch screens, there may be some bounce at top of screen
            //so add some buffer for that.
            if (this.prevScrollpos + 5 < currentScrollPos && 
                currentScrollPos > 10){
                this.siteHeader.classList.remove('site-header--expand');
                this.siteHeader.classList.add('site-header--collapse');
                this.siteHeaderMenuIcon.classList.remove('site-header__menu-icon--expand');
                this.siteHeaderMenuIcon.classList.add('site-header__menu-icon--collapse');
            }
          }
          this.prevScrollpos = currentScrollPos;
    }

    /**
     * Set text decoration underline on selected menu item
     */
    setSelectedMenuItem(){
        if (this.siteHeader){
            let selectedMenu = document.querySelector('.site-header').getAttribute("data-matching-link");
            if (selectedMenu){
                //is this a light or dark background
                if (document.querySelector('.primary-nav--dark')){
                    document.querySelector(selectedMenu).style.textDecoration = "underline";
                } else if (document.querySelector('.primary-nav--pull-right')){
                    //any link to underline?
                } else if (document.querySelector('.album-nav--pull-right')){
                    document.querySelector(selectedMenu).style.textDecoration = "underline";
                }
            }
        }
    }

    /**
     * clickOut
     * Close the dropdown menu when the user clicks outside of it.
     * @param {*} e event
     */
    clickOut(e){
        // console.log(e.target);
        if ( ! e.target.matches('.album-nav__menu-dropdown-label') ){
            // console.log("clickOut: collapsing menu");
            this.albumSubMenus.forEach((sub) => sub.lastElementChild.classList.remove('album-nav__dropdown-content--visible'));
            this.isExpanded = false;
        }
    }

    /**
     * menuHover
     * 
     * @param {*} el 
     * 
     * Hover event - if menu was previously expanded from a click and the pointer is moved over another menu,
     * we collapse the previously expanded menu and expand the current one.
     */
    
    menuHover(el) {
        // console.log("menuHover");
        if (this.isExpanded){
            this.albumSubMenus.forEach((sub) => {if (sub != el) sub.lastElementChild.classList.remove('album-nav__dropdown-content--visible')});
            el.lastElementChild.classList.add('album-nav__dropdown-content--visible');
        }
    }

    menuClick(el) {
        if (!this.cancelEvents){
            console.log("menuClick");
            this.toggleSubMenu(el);
        }
    }


    toggleSubMenu(el) {
        //First hide all other sub menu that are showing, except the one under this element
        this.albumSubMenus.forEach((sub) => {if (sub != el) sub.lastElementChild.classList.remove('album-nav__dropdown-content--visible')});

        //Now show or hide the sub menu under the menu item that was clicked
        if (el.lastElementChild.classList.contains('album-nav__dropdown-content--visible')){
            el.lastElementChild.classList.remove('album-nav__dropdown-content--visible');
            this.isExpanded = false;
        } else {
            el.lastElementChild.classList.add('album-nav__dropdown-content--visible');
            this.isExpanded = true;
        }
    }
}

export default Menu;