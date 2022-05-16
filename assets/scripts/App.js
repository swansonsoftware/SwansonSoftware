import '../styles/styles.css';
import MobileMenu from './modules/MobileMenu';
import SlideShow from './modules/SlideShow';

let mobileMenu = new MobileMenu();
let slideShow = new SlideShow();

if (module.hot) {
    module.hot.accept();
}