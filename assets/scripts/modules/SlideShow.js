class SlideShow {
    constructor(slideInterval) {
        this.slider = document.querySelector(".slideshow");
        if (this.slider) {
            this.slides = this.slider.getElementsByTagName("li");
            this.slideImages = document.querySelectorAll(".slide-image");
            this.slideImageContainers = document.querySelectorAll(".slideshow__slides__slide");
            this.slideTitleBox = document.querySelector(".slideshow__slide-title");
            this.slideTitles = document.querySelectorAll(".titletext");
            this.slideCaption = document.getElementById("slideCaption");
            this.slideCaptionStyle = document.querySelector(".slideshow__slide-caption");
            this.slideTitleButton = document.querySelector(".slideshow__slide-title__button");
            this.slideTitleBtnLeftIcon = document.querySelector(".slideshow__slide-title__button__icon-left");
            this.slideTitleBtnRightIcon = document.querySelector(".slideshow__slide-title__button__icon-right");
            this.btnPause = document.getElementById('pause');
            this.btnPlay = document.getElementById("play");
            this.linkPausePlay = document.getElementById("pauseplay");
            this.btnPrev = document.getElementById("prevslide");
            this.linkPrev = document.getElementById("prev");
            this.btnNext = document.getElementById("nextslide");
            this.linkNext = document.getElementById("next");
            this.PAUSE = 0;
            this.PLAY = 1;
            this.btnIcon = this.PLAY;
            this.TITLEBTNLEFT = 0;
            this.TITLEBTNRIGHT = 1;
            this.titleBtnIcon = this.TITLEBTNLEFT;
            this.slideIndex = 0;
            this.prevSlideIndex = -1;
            this.slideInterval = slideInterval;
            this.theTimer;
            this.startPlay;

            if (this.slider) {

                this.testPassive();
                this.events();

                //hide all of the slides so they don't all appear when the page loads
                if (this.slideImages){
                    this.slideImages.forEach(el => el.style.display = "none");
                }

                this.play();

                //hide the slide title buttons
                this.slideTitleBtnLeftIcon.style.display = "none";
                this.slideTitleBtnRightIcon.style.display = "none";
                
                //show the first slide title
                this.showSlideTitle();
            }
        }
    }

    //check if browser supports passive event handlers
    testPassive(){
        try {
            const options = {
                get passive() {
                    return false;
                },
            };
            this.passiveSupported = true;
            // console.log("passive is supported");
        } catch (e) {
            console.log("no passive supporrt");
            // this.passiveSupported = false;
        }
    }

    events() {
        if (this.slideTitleButton) {
            this.slideTitleButton.addEventListener("click", () => this.doTitleBtnClick());
            this.slideTitleButton.addEventListener("touchstart", () => this.doTitleBtnClick(), this.passiveSupported ? {passive : true } : false);
            // this.slideTitleBox.addEventListener("touchstart", () => this.doTitleBtnClick(), this.passiveSupported ? {passive : true } : false);
            // this.slideTitleBtnLeftIcon.addEventListener("touchstart", () => this.doTitleBtnClick(), this.passiveSupported ? {passive : true } : false);
        }

        this.btnPause.addEventListener("click", () => this.pause());
        this.btnPlay.addEventListener("click", () => this.play());
        this.linkPausePlay.addEventListener("keyup", e => this.keyPressPausePlay(e));
        this.btnPrev.addEventListener("click", ()=> this.prevSlide());
        this.linkPrev.addEventListener("keyup", e => this.keyPressPrev(e));
        this.btnNext.addEventListener("click", ()=> this.nextSlide());
        this.linkNext.addEventListener("keyup", e => this.keyPressNext(e));
    }

    showSlideTitle(){
        this.swapTitleBtnIco(this.TITLEBTNLEFT);

        if (this.slideCaption){
            this.slideCaption.innerText = this.slideTitles[this.slideIndex-1].innerHTML;
        }
    }

    doTitleBtnClick(){
        // alert('slide title');
        if (this.titleBtnIcon == this.TITLEBTNRIGHT) {
            this.swapTitleBtnIco(this.TITLEBTNRIGHT);
        } else {
            this.swapTitleBtnIco(this.TITLEBTNLEFT);
        }
    }

    swapTitleBtnIco(btnId) {
        if (btnId == this.TITLEBTNRIGHT) {
            this.slideTitleBtnLeftIcon.style.display = "none";
            this.slideTitleBtnRightIcon.style.display = "inline";
            this.titleBtnIcon = this.TITLEBTNLEFT;
            this.slideTitleBox.classList.add("slideshow__slide-title--is-collapsed");
        } else {
            this.slideTitleBtnLeftIcon.style.display = "inline";
            this.slideTitleBtnRightIcon.style.display = "none";
            this.titleBtnIcon = this.TITLEBTNRIGHT;
            this.slideTitleBox.classList.remove("slideshow__slide-title--is-collapsed");
        }
    }

    swapVcrBtn(btnId) {
        if (btnId == this.PAUSE) {
            this.btnPause.style.display = "none";
            this.btnPlay.style.display = "inline";
            this.btnIcon = this.PLAY;
         } else {
            this.btnPause.style.display = "inline";
            this.btnPlay.style.display = "none";
            this.btnIcon = this.PAUSE;
        }
    }

    keyPressPausePlay(e) {
        if (e.code == "Enter") {
            if (this.btnIcon == this.PLAY) {
                this.startPlay(); //? s/b this.play()
            } else {
                this.pause();
            }
        }
    }

    keyPressPrev(e) {
        if (e.code == "Enter") {
            this.prevSlide();
        }
    }
    
    keyPressNext(e) {
        if (e.code == "Enter") {
            this.nextSlide();
        }
    }

    pause() {
        clearTimeout(this.theTimer);
        this.swapVcrBtn(this.PAUSE);
    }


    play() {
        this.swapVcrBtn(this.PLAY);

        if (this.slides.length > 2) {
            this.prevSlideIndex = this.slideIndex;
            this.slideIndex++;
            if (this.slideIndex > this.slides.length) {
                this.slideIndex = 1;
            }
    
            if (this.prevSlideIndex > 0) {
                this.slides[this.prevSlideIndex-1].classList.remove("slideshow__slides__slide--is-visible");
                this.slideCaptionStyle.classList.remove("slideshow__slide-caption--is-visible");
            }
    
            //Show the slide
            this.slides[this.slideIndex-1].classList.add("slideshow__slides__slide--is-visible");
            this.slideCaption.innerText = this.slideTitles[this.slideIndex-1].innerHTML;
            this.slideCaptionStyle.classList.add("slideshow__slide-caption--is-visible");

            //Hide the slide caption box arrow if no text
            this.checkForSlideCaptionText();

        } else {
            this.prevSlideIndex = this.slideIndex;
            this.slideIndex++;
            if (this.slideIndex > this.slides.length) {
                this.slideIndex = 1;
            }

            if (this.prevSlideIndex == 0) {
                this.slides[0].classList.add("slideshow__slides__slide--is-visible");
                this.slideCaption.innerText = this.slideTitles[0].innerHTML;
                this.slideCaptionStyle.classList.add("slideshow__slide-caption--is-visible");
            } else if (this.prevSlideIndex == 1) {
                this.slides[1].classList.add("slideshow__slides__slide--is-visible");
                this.slideCaption.innerText = this.slideTitles[1].innerHTML;
                this.slides[0].classList.remove("slideshow__slides__slide--is-visible");
                this.slideCaptionStyle.classList.add("slideshow__slide-caption--is-visible");
            } else if (this.prevSlideIndex == 2) {
                this.slides[0].classList.add("slideshow__slides__slide--is-visible");
                this.slides[1].classList.remove("slideshow__slides__slide--is-visible");
                this.slideCaption.innerText = this.slideTitles[0].innerHTML;
                this.slideCaptionStyle.classList.add("slideshow__slide-caption--is-visible");
            }
        }

        if (this.slideImages){
            this.slideImages[this.slideIndex-1].style.display = "inline-block";
        }

        this.theTimer = setTimeout(()=> this.play(), this.slideInterval*1000); //Time in ms, 3000 = 3 seconds
    }

    prevSlide() {
        clearTimeout(this.theTimer);
        this.pause();

        // Hide current slide
        this.slides[this.slideIndex-1].classList.remove("slideshow__slides__slide--is-visible");
        this.slideCaptionStyle.classList.remove("slideshow__slide-caption--is-visible");

        // Update slideIndex to the previous slide index
        if (this.slideIndex > 1) {
            this.slideIndex--;
        } else {
            this.slideIndex = this.slides.length;
        }

        //Show the slide
        this.slides[this.slideIndex-1].classList.add("slideshow__slides__slide--is-visible");
        this.slideCaption.innerText = this.slideTitles[this.slideIndex-1].innerHTML;
        this.slideCaptionStyle.classList.add("slideshow__slide-caption--is-visible");

        //The image is set to display=none until it is updated in play(), so if the arrow buttons are used
        //to scroll through the images, it may still be display=none so we change it here.
        if (this.slideImages){
            this.slideImages[this.slideIndex-1].style.display = "inline-block";
        }


        //Hide the slide caption box if no text
        this.checkForSlideCaptionText();

        this.prevSlideIndex = this.slideIndex - 1;
        if (this.prevSlideIndex < 1) {
            this.prevSlideIndex = this.slides.length - 1;
        }
    }

    nextSlide() {
        clearTimeout(this.theTimer);
        this.pause();

        // Hide current slide
        this.slides[this.slideIndex-1].classList.remove("slideshow__slides__slide--is-visible");
        this.slideCaptionStyle.classList.remove("slideshow__slide-caption--is-visible");

        // Update slideIndex to the previous slide index
        if (this.slideIndex == this.slides.length) {
            this.slideIndex = 1;
        } else {
            this.slideIndex++;
        }

        //Show the slide
        this.slides[this.slideIndex-1].classList.add("slideshow__slides__slide--is-visible");
        this.slideCaption.innerText = this.slideTitles[this.slideIndex-1].innerHTML;
        this.slideCaptionStyle.classList.add("slideshow__slide-caption--is-visible");

        //The image is set to display=none until it is updated in play(), so if the arrow buttons are used
        //to scroll through the images, it may still be display=none so we change it here.
        if (this.slideImages){
            this.slideImages[this.slideIndex-1].style.display = "inline-block";
        }

        //Hide the slide caption box if no text
         this.checkForSlideCaptionText();

        this.prevSlideIndex = this.slideIndex - 1;
        if (this.prevSlideIndex < 1) {
            this.prevSlideIndex = this.slides.length - 1;
        }
    }

    //Hide the arrow icons if there is no caption text, because the caption box does not show
    checkForSlideCaptionText() {
        if (!this.slideTitles[this.slideIndex-1].innerHTML){
            this.slideTitleBtnLeftIcon.style.color = "rgba(255,255,255,0.0)";
            this.slideTitleBtnRightIcon.style.color = "rgba(255,255,255,0.0)";
        } else {
            this.slideTitleBtnLeftIcon.style.color = "black";
            this.slideTitleBtnRightIcon.style.color = "black";
        }
    }

}

export default SlideShow;