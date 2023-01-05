import '../styles/styles.css';
import 'lazysizes';
import Menu from './modules/Menu';
import Footer from './modules/Footer';
import MobileMenu from './modules/MobileMenu';
import SlideShow from './modules/SlideShow';

if (typeof slideInterval != "undefined") {
    let slideShow = new SlideShow(slideInterval);
}

let menu = new Menu();
let footer = new Footer();
let vanishingMenus;

let slider = document.querySelector(".slideshow");
if (slider != null) {
    if (typeof vanishingMenus == "undefined") {
        import('./modules/VanishingMenus').then(x => {
            vanishingMenus = new x.default();
        }).catch((e) => console.log("Error loading VanishingMenus " + e)) 
    }
}

let mobileMenu = new MobileMenu();

if (module.hot) {
    module.hot.accept();
}