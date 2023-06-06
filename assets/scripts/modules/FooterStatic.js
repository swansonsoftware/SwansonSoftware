class FooterStatic {
    constructor() {
        this.footerElement = document.querySelector(".site-footer-static");
        this.injectFooterHTML();
    }

    injectFooterHTML() {
        if (this.footerElement != null) {
            // this.footerElement.insertAdjacentHTML("beforeend", `
            // <div class="wrapper">
            //     <p><span class="site-footer-static__text">Copyright &copy; 2023. All rights reserved. | 
            //     <a href="email-form.html">Contact</a> |
            //     <a href="about.html">About SwansonSoftware.com</a></span></p>
            // </div>
            // `)
            this.footerElement.insertAdjacentHTML("beforeend", `
            <div class="wrapper">
                <p><span class="site-footer-static__text">Copyright &copy; 2023. All rights reserved. | 
                <a href="about.html">About SwansonSoftware.com</a></span></p>
            </div>
            `)
        }
    }
}

export default FooterStatic;