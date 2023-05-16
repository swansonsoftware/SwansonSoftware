class Menu {
    constructor() {
        this.primaryNavElement = document.querySelector('.primary-nav');
        this.albumNavElement = document.querySelector('.album-nav');
        this.injectMenuHtTML();
        this.albumSubMenus = document.querySelectorAll('.album-nav__menu-dropdown-wrapper');
        this.albumMenuLabels = document.querySelectorAll('.album-nav__menu-dropdown-label');
        this.isExpanded = false;
        this.passiveSupported = false;
        this.testPassive();
        this.cancelEvents = false;
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
            // console.log("passive is supported");
        } catch (e) {
            console.log("no passive supporrt");
            // this.passiveSupported = false;
        }
    }

    events() {
        if (this.albumSubMenus) {
            this.albumSubMenus.forEach(el => el.addEventListener("mouseover", () => {this.menuHover(el)}));
            this.albumSubMenus.forEach(el => el.addEventListener("click", e => {this.menuClick(el)}));
            // this.albumSubMenus.forEach(el => el.addEventListener("touchstart", e => {this.menuTouch(el, e)}, this.passiveSupported ? {passive : true } : false));
            // this.albumSubMenus.forEach(el => el.addEventListener("touchstart", e => {this.menuTouch(el, e)}));
        }

        // if (this.albumSubMenuLinks) {
        //     this.albumSubMenuLinks.forEach(el => el.addEventListener("click", e => {this.linkClick(el, e)}));
        //     console.log('albumSubMenuLinks ' + this.albumSubMenuLinks.length);
        // }

        document.addEventListener("click", e => {this.clickOut(e)});
    }

    injectMenuHtTML() {
        if (this.primaryNavElement != null) {
            this.primaryNavElement.insertAdjacentHTML("beforeend", `
                <ul>
                    <li class="primary-nav__siteHome"><a href="index.html">Swanson Software</a></li>
                    <li><a href="./album/photos.html">Album</a></li>
                    <li><a href="process-models.html">Process Models</a></li>
                    <li><a href="requirements.html">Software Requirements</a></li>
                    <li><a href="design.html">Design</a></li>
                    <li><a href="life-cycle-models.html">Lifecycle Models</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
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
                <li class="album-nav__siteHome"><a href="../index.html">Swanson Software</a></li>
                <li class="album-nav"><a href="photos.html">Album</a></li>
                <li class="album-nav"><a href="recipes.html">Recipes</a></li>
                <!--<li class="album-nav"><a href="music.html">Music</a></li>-->
                <li class="album-nav"><a href="favorites.html">Favorites</a></li>
                <li class="album-nav"><a href="1900s.html">1900s</a></li>
                <li class="album-nav"><a href="2000s.html">2000s</a></li>
                <li class="album-nav"><a href="2010s.html">2010s</a></li>
                <li class="album-nav"><a href="2020s.html">2020s</a></li>
                <!--<li class="album-nav"><a href="2020s-info.html">2020s i</a></li>-->
            </ul>
            `)
        }
    }

    //Close the dropdown menu if the user clicks outside of it
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
        // this.cancelEvents = true;
    }
}

export default Menu;