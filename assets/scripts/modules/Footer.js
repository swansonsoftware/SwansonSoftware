class Footer {
  constructor() {
    this.footerElement = document.querySelector(".site-footer")
    this.footerYear = document.getElementById("footeryear")
    this.contactForm = document.querySelector(".site-footer__contact-form")
    this.aboutPage = document.querySelector(".site-footer__about")
    this.injectFooterHTML()
  }

  injectFooterHTML() {
    const currentDate = new Date()
    if (this.footerElement != null) {
      if (this.contactForm != null) {
        // don't show Contact Us link
        this.footerElement.insertAdjacentHTML(
          "beforeend",
          `
              <div class="wrapper">
                  <p><span class="site-footer__text">Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. | 
                  <a href="about.html">About SwansonSoftware.com</a></p>
              </div>
              `
        )
      } else if (this.aboutPage != null) {
        // don't show About SwansonSoftware link
        this.footerElement.insertAdjacentHTML(
          "beforeend",
          `
              <div class="wrapper">
                  <p><span class="site-footer__text">Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. | 
                  <a href="email-form.html">Contact Us</a></span></p>
              </div>
              `
        )
      } else {
        this.footerElement.insertAdjacentHTML(
          "beforeend",
          `
              <div class="wrapper">
                  <p><span class="site-footer__text">Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. | 
                  <a href="about.html">About SwansonSoftware.com</a> |
                  <a href="email-form.html">Contact Us</a></span></p>
              </div>
              `
        )
      }
    }
    if (this.footerYear != null) {
      this.footerYear.insertAdjacentHTML("beforeend", `${currentDate.getFullYear()}`)
    }
  }
}

export default Footer
