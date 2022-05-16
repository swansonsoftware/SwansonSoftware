import { forEach } from "lodash";

class SlideShow {
    constructor() {
        this.slider = document.querySelector(".slideshow");
        this.btnPause = document.getElementById('pause');
        this.btnPlay = document.getElementById('play');
        this.btnPrev = document.getElementById("prevslide");
        this.btnNext = document.getElementById("nextslide");
        this.PAUSE = 0;
        this.PLAY = 1;
        this.btnId = this.PLAY;
        this.slideIndex = 0;
        this.prevSlideIndex = -1;
        this.slideInterval = 3;
        this.theTimer;
        if (this.slider) {
            this.events();
            this.swapVcrBtn();
        }
    }

    events() {
        this.btnPause.addEventListener("click", () => this.swapVcrBtn());
        this.btnPlay.addEventListener("click", () => this.swapVcrBtn());
        this.btnPrev.addEventListener("click", ()=> this.prevSlide());
        this.btnNext.addEventListener("click", ()=> this.nextSlide());
    }

    swapVcrBtn() {
        if (this.btnId == this.PAUSE) {
            this.btnPause.style.display = "none";
            this.btnPlay.style.display = "inline";
            this.btnId = this.PLAY;
            this.pause();
         } else {
            this.btnPause.style.display = "inline";
            this.btnPlay.style.display = "none";
            this.btnId = this.PAUSE;
            this.play();
        }
    }

    pause() {
        clearTimeout(this.theTimer);
    }

    play() {
        var slides = this.slider.getElementsByTagName("li");

        if (slides.length > 2) {
            this.prevSlideIndex = this.slideIndex;
            this.slideIndex++;
            if (this.slideIndex > slides.length) {
                this.slideIndex = 1;
            }
    
            console.log("prevSlideIndex=" + this.prevSlideIndex)
            if (this.prevSlideIndex > 0) {
                slides[this.prevSlideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");
            }
    
            slides[this.slideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");

        } else {
            this.prevSlideIndex = this.slideIndex;
            this.slideIndex++;
            if (this.slideIndex > slides.length) {
                this.slideIndex = 1;
            }

            console.log("prevSlideIndex=" + this.prevSlideIndex)
            if (this.prevSlideIndex == 0) {
                slides[0].classList.toggle("slideshow__slides__slide--is-visible");
            } else if (this.prevSlideIndex == 1) {
                slides[1].classList.toggle("slideshow__slides__slide--is-visible");
                slides[0].classList.toggle("slideshow__slides__slide--is-visible");
            } else if (this.prevSlideIndex == 2) {
                slides[0].classList.toggle("slideshow__slides__slide--is-visible");
                slides[1].classList.toggle("slideshow__slides__slide--is-visible");
            }
        }

        this.theTimer = setTimeout(()=> this.play(), this.slideInterval*1000); //Time in ms, 3000 = 3 seconds
    }

    prevSlide() {
        console.log("prev");
        clearTimeout(this.theTimer);
        var slides = this.slider.getElementsByTagName("li");
        if (this.prevSlideIndex > 0) {
            slides[this.prevSlideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");
            slides[this.slideIndex-1].classList.toggle("slideshow__slides__slide--is-visible");
        }
    }

    nextSlide() {
        console.log("next");
        clearTimeout(this.theTimer);
    }

}

export default SlideShow;