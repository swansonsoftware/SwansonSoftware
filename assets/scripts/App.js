import '../styles/styles.css';
import 'lazysizes';
import MobileMenu from './modules/MobileMenu';
import SlideShow from './modules/SlideShow';

let slideShow = new SlideShow(5);
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