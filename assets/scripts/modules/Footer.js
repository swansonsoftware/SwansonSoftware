class Footer {
    constructor() {
        this.footerElement = document.querySelector(".site-footer");
        this.injectFooterHTML();
    }

    injectFooterHTML() {
        if (this.footerElement != null) {
            // this.footerElement.insertAdjacentHTML("beforeend", `
            // <div class="wrapper">
            //     <p><span class="site-footer__text">Copyright &copy; 2023. All rights reserved. | 
            //     <a href="email-form.html">Contact</a> |
            //     <a href="about.html">About SwansonSoftware.com</a></span></p>
            // </div>
            // `)
            this.footerElement.insertAdjacentHTML("beforeend", `
            <div class="wrapper">
                <p><span class="site-footer__text">Copyright &copy; 2023. All rights reserved. | 
                <a href="about.html">About SwansonSoftware.com</a></span></p>
            </div>
            `)
        }
    }
}

export default Footer;