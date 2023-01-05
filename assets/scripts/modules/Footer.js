class Footer {
    constructor() {
        this.footerElement = document.querySelector(".site-footer");
        this.injectFooterHTML();
    }

    injectFooterHTML() {
        if (this.footerElement != null) {
            this.footerElement.insertAdjacentHTML("beforeend", `
            <div class="wrapper">
                <p><span class="site-footer__text">Copyright &copy; 1999-2019. All rights reserved. | 
                <a href="emailForm.php">Contact</a> |
                <a href="about.php">About SwansonSoftware.com</a></span></p>
            </div>
            `)
        }
    }
}

export default Footer;