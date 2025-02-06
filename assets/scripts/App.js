import "../styles/styles.css"
import Menu from "./modules/Menu"
import Footer from "./modules/Footer"
import FooterStatic from "./modules/FooterStatic"
import AlbumFooter from "./modules/AlbumFooter"
import MobileMenu from "./modules/MobileMenu"
import SlideShow from "./modules/SlideShow"
import Lightbox from "./modules/Lightbox"
import LiteYTEmbed from "./modules/lite-yt-embed"
import ContactForm from "./modules/ContactForm"

if (typeof slideInterval != "undefined") {
  let slideShow = new SlideShow(slideInterval)
}

let menu = new Menu()
let footer = new Footer()
let footerStatic = new FooterStatic()
let albumFooter = new AlbumFooter()
let vanishingMenus

let slider = document.querySelector(".slideshow")
let dbg = document.querySelector(".debug")
if (slider != null || dbg != null) {
  if (typeof vanishingMenus == "undefined") {
    import("./modules/VanishingMenus")
      .then(x => {
        vanishingMenus = new x.default()
      })
      .catch(e => console.log("Error loading VanishingMenus " + e))
  }
}

let albumModal = new Lightbox()
let mobileMenu = new MobileMenu()
let liteYTEmbed = new LiteYTEmbed()
let contactForm = new ContactForm()

if (module.hot) {
  module.hot.accept()
}
