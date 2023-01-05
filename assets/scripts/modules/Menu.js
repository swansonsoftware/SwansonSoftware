class Menu {
    constructor() {
        this.primaryNavElement = document.querySelector('.primary-nav');
        this.albumNavElement = document.querySelector('.album-nav');
        this.albumSubMenus = document.querySelectorAll('.album-nav__dropdown-content');
        // this.albumSubMenus = document.querySelectorAll('.album-nav__menu-level-top');
        this.injectMenuHtTML();
        this.events();
    }

    events() {
        // this.albumSubMenus = document.querySelectorAll('.album-nav__dropdown-content');
        this.albumSubMenus = document.querySelectorAll('.album-nav__menu-level-top');
        if (this.albumSubMenus) {
            console.log(this.albumSubMenus.length);
            this.albumSubMenus.forEach(el => el.addEventListener("mouseover", () => {this.showSubMenu(el)}));
            this.albumSubMenus.forEach(el => el.addEventListener("mouseout", () => {this.hideSubMenu(el)}));
        }
    }

    injectMenuHtTML() {
        if (this.primaryNavElement != null) {
            this.primaryNavElement.insertAdjacentHTML("beforeend", `
                <ul>
                    <li><a href="process-models.html">Process Models</a></li>
                    <li><a href="ProcessRequirements.php">Requirements</a></li>
                    <li><a href="ProcessDesign.php">Design</a></li>
                    <li><a href="ProcessLCModels.php">Lifecycle Models</a></li>
                    <li><a href="ProcessReviews.php">Reviews</a></li>
                </ul>
            `)
        }
        if (this.albumNavElement != null) {
            this.albumNavElement.insertAdjacentHTML("beforeend", `
            <ul>
                <li><a href="#">Album Home</a></li>
                <li><a href="recipes.html">Recipes</a></li>
                <li><div class="album-nav__menu-level-top">
                    <a href="#">1900s</a>
                    <div class="album-nav__dropdown-content">
                        <a href="oldTimes.html" style="border-top: none;">Old Times</a>
                        <a href="1989.html">1989</a>
                        <a href="1999.html">1999</a>
                    </div>
                    </div>
                </li>
            </ul>
            <!--
                <ul>
                    <li><a href="#">Album Home</a></li>
                    <li><a href="recipes.html">Recipes</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="1900s.html">1900s</a></li>
                    <li><a href="#">2000s</a></li>
                    <li><a href="#">2010s</a></li>
                </ul>
                -->
            `)
        }
    }

    showSubMenu(el) {
        // console.log("hovered");
        // console.log(el.lastElementChild.nodeName);
        el.lastElementChild.classList.add('album-nav__dropdown-content--visible');
    }

    hideSubMenu(el) {
        el.lastElementChild.classList.remove('album-nav__dropdown-content--visible');
    }
}

export default Menu;