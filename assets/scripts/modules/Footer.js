class Footer {
  constructor() {
    this.footerElement = document.querySelector(".site-footer")
    this.footerYear = document.getElementById("footeryear")
    this.injectFooterHTML()
  }

  injectFooterHTML() {
    const currentDate = new Date()
    if (this.footerElement != null) {
      // this.footerElement.insertAdjacentHTML("beforeend", `
      // <div class="wrapper">
      //     <p><span class="site-footer__text">Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. |
      //     <a href="email-form.html">Contact</a> |
      //     <a href="about.html">About SwansonSoftware.com</a></span></p>
      // </div>
      // `)
      this.footerElement.insertAdjacentHTML(
        "beforeend",
        `
            <div class="wrapper">
                <p><span class="site-footer__text">Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. | 
                <a href="about.html">About SwansonSoftware.com</a></span></p>
            </div>
            `
      )
    }
    if (this.footerYear != null) {
      this.footerYear.insertAdjacentHTML("beforeend", `${currentDate.getFullYear()}`)
    }
  }
}

export default Footer
