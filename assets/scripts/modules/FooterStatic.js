class FooterStatic {
  constructor() {
    this.footerElement = document.querySelector(".site-footer-static")
    if (this.footerElement) {
      this.isSmallScreen = true
      if (screen.availWidth > 750 && screen.availHeight > 700) {
        this.isSmallScreen = false
      }
      console.log("isSmallScreen: " + this.isSmallScreen)
      this.injectFooterHTML()
      this.events()
      this.setFooterLocation()
    }
  }

  injectFooterHTML() {
    if (this.footerElement != null) {
      const currentDate = new Date()
      // this.footerElement.insertAdjacentHTML("beforeend", `
      // <div class="wrapper">
      //     <p><span class="site-footer-static__text">Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. |
      //     <a href="email-form.html">Contact</a> |
      //     <a href="about.html">About SwansonSoftware.com</a></span></p>
      // </div>
      // `)
      this.footerElement.insertAdjacentHTML(
        "beforeend",
        `
            <div class="wrapper">
                <p>
                    <span class="site-footer-static__text">Copyright &copy; ${currentDate.getFullYear()}. All rights reserved.
                    <br>

                    <a href="about.html">About SwansonSoftware.com</a>
                    <br>

                    <a href="email-form.html">Contact Us</a>
                    </span>
                </p>
            </div>
            `
      )
    }
  }

  setFooterLocation() {
    // console.log('w: ' + screen.availWidth + ', h: ' + screen.availHeight);
    if (!this.isSmallScreen) {
      this.footerElement.classList.remove("site-footer-static__short-screen")
      if (this.footerElement != null) {
        var top = screen.availHeight - 180
        this.footerElement.style.top = top + "px"
      }
    } else {
      this.footerElement.classList.add("site-footer-static__short-screen")
    }
  }

  events() {
    window.addEventListener("deviceorientation", e => {
      this.handleOrientation(e)
    })
  }

  handleOrientation(e) {
    this.setFooterLocation()
  }
}

export default FooterStatic
