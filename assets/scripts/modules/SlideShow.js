class SlideShow {
    constructor(slideInterval) {
        this.slider = document.querySelector(".slideshow");
        if (this.slider) {
            this.slides = this.slider.getElementsByTagName("li");
            this.slideTitle = document.querySelector(".slideshow__slide-title");
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
            this.slideIndex = 0;
            this.prevSlideIndex = -1;
            this.slideInterval = slideInterval;
            this.theTimer;
            this.startPlay;
            if (this.slider) {
                this.events();
                this.play();
            }
        }
    }

    events() {
        this.btnPause.addEventListener("click", () => this.pause());
        this.btnPlay.addEventListener("click", () => this.play());
        this.linkPausePlay.addEventListener("keyup", e => this.keyPressPausePlay(e));
        this.btnPrev.addEventListener("click", ()=> this.prevSlide());
        this.linkPrev.addEventListener("keyup", e => this.keyPressPrev(e));
        this.btnNext.addEventListener("click", ()=> this.nextSlide());
        this.linkNext.addEventListener("keyup", e => this.keyPressNext(e));
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
                this.startPlay();
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
                this.slides[this.prevSlideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");
            }
    
            //Show the slide
            this.slides[this.slideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");

            //Update the slide caption
            this.updateSlideCaption();

        } else {
            this.prevSlideIndex = this.slideIndex;
            this.slideIndex++;
            if (this.slideIndex > this.slides.length) {
                this.slideIndex = 1;
            }

            if (this.prevSlideIndex == 0) {
                this.slides[0].classList.toggle("slideshow__slides__slide--is-visible");
            } else if (this.prevSlideIndex == 1) {
                this.slides[1].classList.toggle("slideshow__slides__slide--is-visible");
                this.slides[0].classList.toggle("slideshow__slides__slide--is-visible");
            } else if (this.prevSlideIndex == 2) {
                this.slides[0].classList.toggle("slideshow__slides__slide--is-visible");
                this.slides[1].classList.toggle("slideshow__slides__slide--is-visible");
            }
        }

        this.theTimer = setTimeout(()=> this.play(), this.slideInterval*1000); //Time in ms, 3000 = 3 seconds
    }

    prevSlide() {
        clearTimeout(this.theTimer);
        this.pause();

        // Hide current slide
        this.slides[this.slideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");

        // Update slideIndex to the previous slide index
        if (this.slideIndex > 1) {
            this.slideIndex--;
        } else {
            this.slideIndex = this.slides.length;
        }

        //Show the slide
        this.slides[this.slideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");

        //Update the slide caption
        this.updateSlideCaption();

        this.prevSlideIndex = this.slideIndex - 1;
        if (this.prevSlideIndex < 1) {
            this.prevSlideIndex = this.slides.length - 1;
        }
    }

    nextSlide() {
        clearTimeout(this.theTimer);
        this.pause();

        // Hide current slide
        this.slides[this.slideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");

        // Update slideIndex to the previous slide index
        if (this.slideIndex == this.slides.length) {
            this.slideIndex = 1;
        } else {
            this.slideIndex++;
        }

        //Show the slide
        this.slides[this.slideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");

        //Update the slide caption
        this.updateSlideCaption();

        this.prevSlideIndex = this.slideIndex - 1;
        if (this.prevSlideIndex < 1) {
            this.prevSlideIndex = this.slides.length - 1;
        }
    }

    updateSlideCaption() {
        if (this.slides[this.slideIndex-1].title.length > 0) {
            this.slideTitle.classList.add("slideshow__slide-title--is-visible")
            this.slideTitle.innerHTML = this.slides[this.slideIndex-1].title;
        } else {
            this.slideTitle.classList.remove("slideshow__slide-title--is-visible")
            this.slideTitle.innerHTML = "";
        }
    }

}

export default SlideShow;