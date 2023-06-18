class Lightbox {
    constructor() {
        this.injectHTML();
        this.overlay = document.querySelector(".lightbox__overlay");
        this.overlayAnchor = document.querySelector(".lightbox__overlay--anchor");
        this.closeIcon = document.querySelector(".lightbox__overlay--close-icon");
        this.overlayImageDiv = document.querySelector("#lightbox__overlay__image");
        this.overlayRequesters = document.querySelectorAll(".album-photos__polaroid--show-overlay");
        this.photoTitleBox = document.querySelector(".album-photos__photo-title");
        this.photoCaption = document.getElementById("photoCaption");
        this.photoCaptionStyle = document.querySelector(".album-photos__photo-caption");
        this.photoTitleButton = document.querySelector(".album-photos__photo-title__button");
        this.photoTitleBtnLeftIcon = document.querySelector(".album-photos__photo-title__button__icon-left");
        this.photoTitleBtnRightIcon = document.querySelector(".album-photos__photo-title__button__icon-right");

        this.isOverlayOpen = false
        this.filename = '';
        this.mediumFilename = '';
        this.largeFilename = '';
        this.hidpiFilename = '';
        this.TITLEBTNLEFT = 0;
        this.TITLEBTNRIGHT = 1;
        this.titleBtnIcon = this.TITLEBTNLEFT;
    
        this.events();
    }

    injectHTML() {
        document.body.insertAdjacentHTML("beforeend", `
        <div class="lightbox__overlay">
            <a href="#" class="lightbox__overlay--anchor"><span class="accessibility--hidden">Select this to close the photo.</span><i class="lightbox__overlay--close-icon" aria-hidden="true"></i></a>
            <div id="lightbox__overlay__image" class="lightbox__overlay__image" ></div>
            <div class="album-photos__photo-title">
            <a href="#" class="album-photos__photo-title__button">
                <span class="accessibility--hidden">Select this button to alternately close or open the box with the photo caption.</span>
                <i id="angle-left" class="album-photos__photo-title__button__icon-left"></i>
                <i id="angle-right" class="album-photos__photo-title__button__icon-right"></i>
            </a><span id="photoCaption" class="album-photos__photo-caption"></span>
        </div>
        </div>
        `);
    }

    events() {
        if (this.closeIcon) {
            this.closeIcon.addEventListener("click", e => this.closeOverlay(e));
            document.addEventListener("keydown", e => this.keyPressDispatcher(e))
            // this.overlayAnchor.addEventListener("click", e => this.closeOverlay(e)); //for tab navigation
        }
        this.overlayRequesters.forEach(el => el.addEventListener("click", e => {this.openOverlay(e, el)}));

        if (this.photoTitleButton) {
            this.photoTitleButton.addEventListener("click", e => this.doTitleBtnClick(e));
            // this.photoTitleButton.addEventListener("touchstart", () => this.doTitleBtnClick(), this.passiveSupported ? {passive : true } : false);
        }
    }

    keyPressDispatcher(event) {
        if (event.keyCode == 27 && this.isOverlayOpen) {
            this.closeOverlay();
        }
    }

    doTitleBtnClick(e){
        e.preventDefault();
        if (this.titleBtnIcon == this.TITLEBTNRIGHT) {
            this.swapTitleBtnIco(this.TITLEBTNRIGHT);
        } else {
            this.swapTitleBtnIco(this.TITLEBTNLEFT);
        }
    }

    swapTitleBtnIco(btnId) {
        if (btnId == this.TITLEBTNRIGHT) {
            this.photoTitleBtnLeftIcon.style.display = "none";
            this.photoTitleBtnRightIcon.style.display = "inline";
            this.titleBtnIcon = this.TITLEBTNLEFT;
            this.photoTitleBox.classList.add("album-photos__photo-title--is-collapsed");
        } else {
            this.photoTitleBtnLeftIcon.style.display = "inline";
            this.photoTitleBtnRightIcon.style.display = "none";
            this.titleBtnIcon = this.TITLEBTNRIGHT;
            this.photoTitleBox.classList.remove("album-photos__photo-title--is-collapsed");
        }
    }

    parseFileName(fqFilename) {
        this.filename = '';
        this.mediumFilename = '';
        this.largeFilename = '';
        this.hidpiFilename = '';
        this.filename = fqFilename.substring(fqFilename.lastIndexOf("album/") + 6);
        this.filename = this.filename.replace('.jpg', '.webp');
        this.mediumFilename = this.filename.replace('small', 'medium');
        this.largeFilename = this.filename.replace('small', 'large');
        this.hidpiFilename = this.filename.replace('small', 'hidpi');
    }

    openOverlay(e, el) {
        // console.log(el.lastElementChild.attributes['alt'].value);
        e.preventDefault();
        document.body.classList.add('no-scroll');

        if (el.lastElementChild) {
            // console.log("height:" + window.innerHeight + "px;width:" + window.innerWidth + "px;");
            this.overlayImageDiv.style = "height:" + window.innerHeight + "px;width:" + window.innerWidth + "px;";

            const photoCaption = el.lastElementChild.attributes['alt'].value;

            if (photoCaption){
                this.swapTitleBtnIco(this.TITLEBTNLEFT);
                this.photoCaptionStyle.classList.add("album-photos__photo-caption--is-visible");
                this.photoCaption.innerText = photoCaption;
            } else {
                this.photoCaptionStyle.classList.remove("album-photos__photo-caption--is-visible");
                this.photoCaption.innerText = '';
            }

            this.parseFileName(el.lastElementChild.src);
            
            //Replace "small" with "large" or "hidpi" in the filename

            this.overlayImageDiv.innerHTML = `
            <picture>
                <source srcset="${this.largeFilename} 1x, ${this.hidpiFilename} 2x" media="(min-width: 1000px)">
                <source srcset="${this.filename} 1x, ${this.mediumFilename} 2x" media="(min-width: 600px)">
                <img src="${this.filename}" alt="${photoCaption}" />
            </picture>
            `;

            this.overlay.classList.add("lightbox__overlay--visible");
        }
        this.isOverlayOpen = true;
    }

    closeOverlay(e) {
        e.preventDefault();
        if (this.isOverlayOpen) {
            this.overlay.classList.remove("lightbox__overlay--visible");
            document.body.classList.remove('no-scroll');
        }
        this.isOverlayOpen = false;
    }
}

export default Lightbox;