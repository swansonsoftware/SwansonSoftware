class AlbumFooter {
  constructor() {
    this.footerElement = document.querySelector(".album-footer")
    this.wrapper = document.querySelector(".album-wrapper")
    this.header = document.querySelector(".site-header")
    this.isTallPage = true
    if (this.footerElement && this.wrapper) {
      var pageHeight = this.wrapper.scrollHeight + this.header.scrollHeight
      // console.log('pageheight: ' + pageHeight);
      // console.log('screenheight: ' + screen.availHeight);
      if (pageHeight > screen.availHeight) {
        this.isTallPage = true
      } else {
        this.isTallPage = false
      }
      this.injectFooterHTML()
      this.setFooterLocation()
    }
  }

  injectFooterHTML() {
    if (this.footerElement != null) {
      const currentDate = new Date()
      // this.footerElement.insertAdjacentHTML("beforeend", `
      // <div class="wrapper">
      //     <p><span class="album-footer__text">
      //         Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. |
      //         <a href="../email-form.html">Contact</a> |
      //         <a href="../about.html">About SwansonSoftware.com</a>
      //     </span></p>
      // </div>
      // `)
      this.footerElement.insertAdjacentHTML(
        "beforeend",
        `
            <div class="wrapper">
                <p><span class="album-footer__text">
                    Copyright &copy; ${currentDate.getFullYear()}. All rights reserved. | 
                    <a href="../about.html">About SwansonSoftware.com</a> |
                    <a href="../email-form.html">Contact Us</a>
                </span></p>
            </div>
            `
      )
    }
  }

  setFooterLocation() {
    // console.log('isTallPage: ' + this.isTallPage);
    if (!this.isTallPage) {
      this.footerElement.classList.add("album-footer__short-screen")
      // console.log('short');
    } else {
      if (this.footerElement != null) {
        var top = screen.availHeight - 158
        this.footerElement.style.top = top + "px"
      }
      // console.log('tall');
      this.footerElement.classList.remove("album-footer__short-screen")
    }
  }
}

export default AlbumFooter
