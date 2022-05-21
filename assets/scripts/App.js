import '../styles/styles.css';
import 'lazysizes';
import MobileMenu from './modules/MobileMenu';
import SlideShow from './modules/SlideShow';

let mobileMenu = new MobileMenu();
let slideShow = new SlideShow(5);

if (module.hot) {
    module.hot.accept();
}