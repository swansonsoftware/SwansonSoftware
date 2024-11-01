import { forEach } from "lodash"

class Lightbox {
  constructor() {
    this.injectHTML()
    this.overlay = document.querySelector(".lightbox__overlay")
    this.overlayAnchor = document.querySelector(".lightbox__overlay--anchor")
    this.closeIcon = document.querySelector(".lightbox__overlay--close-icon")
    this.overlayImageDiv = document.querySelector("#lightbox__overlay__image")
    this.overlayRequesters = document.querySelectorAll(".album-photos__polaroid--show-overlay")
    this.photoTitleBox = document.querySelector(".album-photos__photo-title")
    this.photoCaption = document.getElementById("photoCaption")
    this.photoCaptionStyle = document.querySelector(".album-photos__photo-caption")
    this.photoTitleButton = document.querySelector(".album-photos__photo-title__button")
    this.photoTitleBtnLeftIcon = document.querySelector(".album-photos__photo-title__button__icon-left")
    this.photoTitleBtnRightIcon = document.querySelector(".album-photos__photo-title__button__icon-right")

    this.isOverlayOpen = false
    this.filename = ""
    this.thumbFilename = ""
    this.smallFilename = ""
    this.smallplusFilename = ""
    this.smallhiresFilename = ""
    this.mediumFilename = ""
    this.largeFilename = ""
    this.largerFilename = ""
    this.largehiresFilename = ""
    this.extralargeFilename = ""
    this.file213 = ""
    this.file240 = ""
    this.file262 = ""
    this.file270 = ""
    this.file288 = ""
    this.file295 = ""
    this.file320 = ""
    this.file324 = ""
    this.file330 = ""
    this.file360 = ""
    this.file393 = ""
    this.file405 = ""
    this.file432 = ""
    this.file448 = ""
    this.file456 = ""
    this.file504 = ""
    this.file512 = ""
    this.file552 = ""
    this.file576 = ""
    this.file597 = ""
    this.file608 = ""
    this.file640 = ""
    this.file672 = ""
    this.file700 = ""
    this.file720 = ""
    this.file768 = ""
    this.file787 = ""
    this.file828 = ""
    this.file860 = ""
    this.file885 = ""
    this.file896 = ""
    this.file912 = ""
    this.file932 = ""
    this.file960 = ""
    this.file961 = ""
    this.file968 = ""
    this.file1026 = ""
    this.file1067 = ""
    this.file1068 = ""
    this.file1080 = ""
    this.file1082 = ""
    this.file1180 = ""
    this.file1200 = ""
    this.file1235 = ""
    this.file1280 = ""
    this.file1290 = ""
    this.file1368 = ""
    this.file1389 = ""
    this.file1440 = ""
    this.file1413 = ""
    this.file1442 = ""
    this.file1500 = ""
    this.file1586 = ""
    this.file1590 = ""
    this.file1600 = ""
    this.file1707 = ""
    this.file1784 = ""
    this.file1824 = ""
    this.file1852 = ""
    this.file1864 = ""
    this.file1920 = ""
    this.file1973 = ""
    this.file2097 = ""
    this.file2120 = ""
    this.file2160 = ""
    this.file2220 = ""
    this.file2240 = ""
    this.file2379 = ""
    this.file2430 = ""
    this.file2560 = ""
    this.file2796 = ""
    this.file2880 = ""
    this.file2960 = ""
    this.file3060 = ""
    this.file3240 = ""
    this.file3540 = ""
    this.file3840 = ""
    this.TITLEBTNLEFT = 0
    this.TITLEBTNRIGHT = 1
    this.titleBtnIcon = this.TITLEBTNLEFT

    this.events()
  }

  injectHTML() {
    document.body.insertAdjacentHTML(
      "beforeend",
      `
        <div class="lightbox__overlay">
            <a href="#" class="lightbox__overlay--anchor"><span class="accessibility--hidden">Select this to close the photo.</span><i class="lightbox__overlay--close-icon" aria-hidden="true"></i></a>
            <div id="lightbox__overlay__image" class="lightbox__overlay__image"></div>
            <div class="album-photos__photo-title">
            <a href="#" class="album-photos__photo-title__button">
                <span class="accessibility--hidden">Select this button to alternately close or open the box with the photo caption.</span>
                <i id="angle-left" class="album-photos__photo-title__button__icon-left"></i>
                <i id="angle-right" class="album-photos__photo-title__button__icon-right"></i>
            </a><span id="photoCaption" class="album-photos__photo-caption"></span>
        </div>
        </div>
        `
    )
  }

  events() {
    if (this.closeIcon) {
      this.closeIcon.addEventListener("click", e => this.closeOverlay(e))
      document.addEventListener("keydown", e => this.keyPressDispatcher(e))
      // this.overlayAnchor.addEventListener("click", e => this.closeOverlay(e)); //for tab navigation
    }
    this.overlayRequesters.forEach(el =>
      el.addEventListener("click", e => {
        this.openOverlay(e, el)
      })
    )

    if (this.photoTitleButton) {
      this.photoTitleButton.addEventListener("click", e => this.doTitleBtnClick(e))
      // this.photoTitleButton.addEventListener("touchstart", () => this.doTitleBtnClick(), this.passiveSupported ? {passive : true } : false);
    }
  }

  keyPressDispatcher(event) {
    if (event.keyCode == 27 && this.isOverlayOpen) {
      this.closeOverlay()
    }
  }

  doTitleBtnClick(e) {
    e.preventDefault()
    if (this.titleBtnIcon == this.TITLEBTNRIGHT) {
      this.swapTitleBtnIco(this.TITLEBTNRIGHT)
    } else {
      this.swapTitleBtnIco(this.TITLEBTNLEFT)
    }
  }

  swapTitleBtnIco(btnId) {
    if (btnId == this.TITLEBTNRIGHT) {
      this.photoTitleBtnLeftIcon.style.display = "none"
      this.photoTitleBtnRightIcon.style.display = "inline"
      this.titleBtnIcon = this.TITLEBTNLEFT
      this.photoTitleBox.classList.add("album-photos__photo-title--is-collapsed")
    } else {
      this.photoTitleBtnLeftIcon.style.display = "inline"
      this.photoTitleBtnRightIcon.style.display = "none"
      this.titleBtnIcon = this.TITLEBTNRIGHT
      this.photoTitleBox.classList.remove("album-photos__photo-title--is-collapsed")
    }
  }

  parseFileName(fqFilename) {
    this.filename = ""
    this.thumbFilename = ""
    this.smallFilename = ""
    this.smallplusFilename = ""
    this.smallhiresFilename = ""
    this.mediumFilename = ""
    this.largeFilename = ""
    this.largerFilename = ""
    this.largehiresFilename = ""
    this.extralargeFilename = ""
    this.file213 = ""
    this.file240 = ""
    this.file262 = ""
    this.file270 = ""
    this.file288 = ""
    this.file295 = ""
    this.file320 = ""
    this.file324 = ""
    this.file330 = ""
    this.file360 = ""
    this.file393 = ""
    this.file405 = ""
    this.file432 = ""
    this.file448 = ""
    this.file456 = ""
    this.file504 = ""
    this.file512 = ""
    this.file552 = ""
    this.file576 = ""
    this.file597 = ""
    this.file608 = ""
    this.file640 = ""
    this.file672 = ""
    this.file700 = ""
    this.file720 = ""
    this.file768 = ""
    this.file787 = ""
    this.file828 = ""
    this.file860 = ""
    this.file885 = ""
    this.file896 = ""
    this.file912 = ""
    this.file932 = ""
    this.file960 = ""
    this.file961 = ""
    this.file968 = ""
    this.file1026 = ""
    this.file1067 = ""
    this.file1068 = ""
    this.file1080 = ""
    this.file1082 = ""
    this.file1180 = ""
    this.file1200 = ""
    this.file1235 = ""
    this.file1280 = ""
    this.file1290 = ""
    this.file1368 = ""
    this.file1389 = ""
    this.file1440 = ""
    this.file1413 = ""
    this.file1442 = ""
    this.file1500 = ""
    this.file1586 = ""
    this.file1590 = ""
    this.file1600 = ""
    this.file1707 = ""
    this.file1784 = ""
    this.file1824 = ""
    this.file1852 = ""
    this.file1864 = ""
    this.file1920 = ""
    this.file1973 = ""
    this.file2097 = ""
    this.file2120 = ""
    this.file2160 = ""
    this.file2220 = ""
    this.file2240 = ""
    this.file2379 = ""
    this.file2430 = ""
    this.file2560 = ""
    this.file2796 = ""
    this.file2880 = ""
    this.file2960 = ""
    this.file3060 = ""
    this.file3240 = ""
    this.file3540 = ""
    this.file3840 = ""
    this.filename = fqFilename.substring(fqFilename.lastIndexOf("album/") + 6)
    if (this.filename.lastIndexOf("-thumbnail") > 0) {
      this.file213 = this.filename.replace("thumbnail", "213")
      this.file240 = this.filename.replace("thumbnail", "240")
      this.file262 = this.filename.replace("thumbnail", "262")
      this.file270 = this.filename.replace("thumbnail", "270")
      this.file288 = this.filename.replace("thumbnail", "288")
      this.file295 = this.filename.replace("thumbnail", "295")
      this.file320 = this.filename.replace("thumbnail", "320")
      this.file324 = this.filename.replace("thumbnail", "324")
      this.file360 = this.filename.replace("thumbnail", "360")
      this.file393 = this.filename.replace("thumbnail", "393")
      this.file405 = this.filename.replace("thumbnail", "405")
      this.file432 = this.filename.replace("thumbnail", "432")
      this.file448 = this.filename.replace("thumbnail", "448")
      this.file456 = this.filename.replace("thumbnail", "456")
      this.file504 = this.filename.replace("thumbnail", "504")
      this.file512 = this.filename.replace("thumbnail", "512")
      this.file576 = this.filename.replace("thumbnail", "576")
      this.file597 = this.filename.replace("thumbnail", "597")
      this.file608 = this.filename.replace("thumbnail", "608")
      this.file640 = this.filename.replace("thumbnail", "640")
      this.file672 = this.filename.replace("thumbnail", "672")
      this.file720 = this.filename.replace("thumbnail", "720")
      this.file768 = this.filename.replace("thumbnail", "768")
      this.file787 = this.filename.replace("thumbnail", "787")
      this.file860 = this.filename.replace("thumbnail", "860")
      this.file885 = this.filename.replace("thumbnail", "885")
      this.file896 = this.filename.replace("thumbnail", "896")
      this.file912 = this.filename.replace("thumbnail", "912")
      this.file932 = this.filename.replace("thumbnail", "932")
      this.file960 = this.filename.replace("thumbnail", "960")
      this.file961 = this.filename.replace("thumbnail", "961")
      this.file968 = this.filename.replace("thumbnail", "968")
      this.file1026 = this.filename.replace("thumbnail", "1026")
      this.file1067 = this.filename.replace("thumbnail", "1067")
      this.file1082 = this.filename.replace("thumbnail", "1082")
      this.file1180 = this.filename.replace("thumbnail", "1180")
      this.file1200 = this.filename.replace("thumbnail", "1200")
      this.file1235 = this.filename.replace("thumbnail", "1235")
      this.file1280 = this.filename.replace("thumbnail", "1280")
      this.file1290 = this.filename.replace("thumbnail", "1290")
      this.file1368 = this.filename.replace("thumbnail", "1368")
      this.file1389 = this.filename.replace("thumbnail", "1389")
      this.file1413 = this.filename.replace("thumbnail", "1413")
      this.file1440 = this.filename.replace("thumbnail", "1440")
      this.file1442 = this.filename.replace("thumbnail", "1442")
      this.file1586 = this.filename.replace("thumbnail", "1586")
      this.file1590 = this.filename.replace("thumbnail", "1590")
      this.file1600 = this.filename.replace("thumbnail", "1600")
      this.file1707 = this.filename.replace("thumbnail", "1707")
      this.file1784 = this.filename.replace("thumbnail", "1784")
      this.file1852 = this.filename.replace("thumbnail", "1852")
      this.file1864 = this.filename.replace("thumbnail", "1864")
      this.file1920 = this.filename.replace("thumbnail", "1920")
      this.file1973 = this.filename.replace("thumbnail", "1973")
      this.file2097 = this.filename.replace("thumbnail", "2097")
      this.file2120 = this.filename.replace("thumbnail", "2120")
      this.file2160 = this.filename.replace("thumbnail", "2160")
      this.file2220 = this.filename.replace("thumbnail", "2220")
      this.file2379 = this.filename.replace("thumbnail", "2379")
      this.file2430 = this.filename.replace("thumbnail", "2430")
      this.file2560 = this.filename.replace("thumbnail", "2560")
      this.file2796 = this.filename.replace("thumbnail", "2796")
      this.file2880 = this.filename.replace("thumbnail", "2880")
      this.file2960 = this.filename.replace("thumbnail", "2960")
      this.file3060 = this.filename.replace("thumbnail", "3060")
      this.file3240 = this.filename.replace("thumbnail", "3240")
      this.file3540 = this.filename.replace("thumbnail", "3540")
      this.file3840 = this.filename.replace("thumbnail", "3840")
    } else if (this.filename.lastIndexOf("-thumb") > 0) {
      this.thumbFilename = this.filename
      this.smallFilename = this.filename.replace("thumb", "small-standard")
      this.smallplusFilename = this.filename.replace("thumb", "small-plus")
      this.smallhiresFilename = this.filename.replace("thumb", "small-hidpi")
      this.mediumFilename = this.filename.replace("thumb", "medium")
      this.largeFilename = this.filename.replace("thumb", "large-standard")
      this.largerFilename = this.filename.replace("thumb", "large-plus")
      this.largehiresFilename = this.filename.replace("thumb", "large-hidpi")
      this.extralargeFilename = this.filename.replace("thumb", "extra-large")
    } else if (this.filename.lastIndexOf("-test") > 0) {
      this.file213 = this.filename.replace("test", "test-213")
      this.file240 = this.filename.replace("test", "test-240")
      this.file262 = this.filename.replace("test", "test-262")
      this.file270 = this.filename.replace("test", "test-270")
      this.file288 = this.filename.replace("test", "test-288")
      this.file295 = this.filename.replace("test", "test-295")
      this.file320 = this.filename.replace("test", "test-320")
      this.file324 = this.filename.replace("test", "test-324")
      this.file330 = this.filename
      this.file360 = this.filename.replace("test", "test-360")
      this.file393 = this.filename.replace("test", "test-393")
      this.file405 = this.filename.replace("test", "test-405")
      this.file432 = this.filename.replace("test", "test-432")
      this.file448 = this.filename.replace("test", "test-448")
      this.file456 = this.filename.replace("test", "test-456")
      this.file504 = this.filename.replace("test", "test-504")
      this.file512 = this.filename.replace("test", "test-512")
      this.file552 = this.filename.replace("test", "test-552")
      this.file576 = this.filename.replace("test", "test-576")
      this.file597 = this.filename.replace("test", "test-597")
      this.file608 = this.filename.replace("test", "test-608")
      this.file640 = this.filename.replace("test", "test-640")
      this.file672 = this.filename.replace("test", "test-672")
      this.file700 = this.filename.replace("test", "test-700")
      this.file720 = this.filename.replace("test", "test-720")
      this.file768 = this.filename.replace("test", "test-768")
      this.file787 = this.filename.replace("test", "test-787")
      this.file828 = this.filename.replace("test", "test-828")
      this.file860 = this.filename.replace("test", "test-860")
      this.file885 = this.filename.replace("test", "test-885")
      this.file896 = this.filename.replace("test", "test-896")
      this.file912 = this.filename.replace("test", "test-912")
      this.file932 = this.filename.replace("test", "test-932")
      this.file960 = this.filename.replace("test", "test-960")
      this.file961 = this.filename.replace("test", "test-961")
      this.file968 = this.filename.replace("test", "test-968")
      this.file1026 = this.filename.replace("test", "test-1026")
      this.file1067 = this.filename.replace("test", "test-1067")
      this.file1068 = this.filename.replace("test", "test-1068")
      this.file1080 = this.filename.replace("test", "test-1080")
      this.file1082 = this.filename.replace("test", "test-1082")
      this.file1180 = this.filename.replace("test", "test-1180")
      this.file1200 = this.filename.replace("test", "test-1200")
      this.file1235 = this.filename.replace("test", "test-1235")
      this.file1280 = this.filename.replace("test", "test-1280")
      this.file1290 = this.filename.replace("test", "test-1290")
      this.file1368 = this.filename.replace("test", "test-1368")
      this.file1389 = this.filename.replace("test", "test-1389")
      this.file1413 = this.filename.replace("test", "test-1413")
      this.file1440 = this.filename.replace("test", "test-1440")
      this.file1442 = this.filename.replace("test", "test-1442")
      this.file1500 = this.filename.replace("test", "test-1500")
      this.file1586 = this.filename.replace("test", "test-1586")
      this.file1590 = this.filename.replace("test", "test-1590")
      this.file1600 = this.filename.replace("test", "test-1600")
      this.file1707 = this.filename.replace("test", "test-1707")
      this.file1784 = this.filename.replace("test", "test-1784")
      this.file1824 = this.filename.replace("test", "test-1824")
      this.file1852 = this.filename.replace("test", "test-1852")
      this.file1864 = this.filename.replace("test", "test-1864")
      this.file1920 = this.filename.replace("test", "test-1920")
      this.file1973 = this.filename.replace("test", "test-1973")
      this.file2097 = this.filename.replace("test", "test-2097")
      this.file2120 = this.filename.replace("test", "test-2120")
      this.file2160 = this.filename.replace("test", "test-2160")
      this.file2220 = this.filename.replace("test", "test-2220")
      this.file2240 = this.filename.replace("test", "test-2240")
      this.file2379 = this.filename.replace("test", "test-2379")
      this.file2430 = this.filename.replace("test", "test-2430")
      this.file2560 = this.filename.replace("test", "test-2560")
      this.file2760 = this.filename.replace("test", "test-2760")
      this.file2796 = this.filename.replace("test", "test-2796")
      this.file2880 = this.filename.replace("test", "test-2880")
      this.file2960 = this.filename.replace("test", "test-2960")
      this.file3060 = this.filename.replace("test", "test-3060")
      this.file3240 = this.filename.replace("test", "test-3240")
      this.file3540 = this.filename.replace("test", "test-3540")
      this.file3840 = this.filename.replace("test", "test-3840")
    } else {
      console.log("The filename must contain -thumb in order to display in this lightbox: " + this.filename)
    }
  }

  openOverlay(e, el) {
    // console.log(el.lastElementChild.lastElementChild.nodeName) //IMG element
    // console.log(el.lastElementChild.nodeName) //IMG element
    e.preventDefault()
    document.body.classList.add("no-scroll")

    var elObj = null
    if (el.lastElementChild.nodeName == "IMG") {
      elObj = el.lastElementChild
    } else if (el.lastElementChild.lastElementChild.nodeName == "IMG") {
      elObj = el.lastElementChild.lastElementChild
    }

    if (elObj) {
      // console.log("height:" + window.innerHeight + "px;width:" + window.innerWidth + "px;")
      this.overlayImageDiv.style = "height:" + window.innerHeight + "px;width:" + window.innerWidth + "px;"

      const photoCaption = elObj.attributes["alt"].value

      if (photoCaption) {
        this.swapTitleBtnIco(this.TITLEBTNLEFT)
        this.photoCaptionStyle.classList.add("album-photos__photo-caption--is-visible")
        this.photoCaption.innerText = photoCaption
      } else {
        this.photoCaptionStyle.classList.remove("album-photos__photo-caption--is-visible")
        this.photoCaption.innerText = ""
      }

      // console.log("file source: " + elObj.src)
      this.parseFileName(elObj.src)

      //Replace "small" with "large" or "hidpi" in the filename
      // console.log("filename: " + this.filename)

      //use the custom data attribute to get the srcset:
      let srcset = elObj.dataset["srcset"]
      let orientation = elObj.dataset["orientation"]
      let portraitsizes = elObj.dataset["portraitsizes"]
      let srcsetString = ""
      var descriptor
      const sizes = []

      // console.log("srcset: " + srcset)
      //then parse out the items in srcset: small=640w;smallhires=1280w;medium=1600w;....
      if (srcset) {
        let srcsetArray = srcset.split(";")
        const iterator = srcsetArray.keys()

        if (portraitsizes) {
          let portraitsizesArray = portraitsizes.split(";")
          for (var i = 0; i < portraitsizesArray.length; i++) {
            descriptor = portraitsizesArray[i].split("=")
            sizes.push("(max-height: " + descriptor[0] + "px) " + descriptor[1] + "px")
          }
        }

        for (const key of iterator) {
          let sizesArray = srcsetArray[key].split("=")
          // console.log("sizes length " + sizesArray.length)
          // console.log(sizesArray[0])
          descriptor = sizesArray[1].split("x")
          let srcsetFilename = ""
          switch (sizesArray[0]) {
            case "extralarge":
              srcsetFilename = this.extralargeFilename
              break
            case "largehires":
              srcsetFilename = this.largehiresFilename
              break
            case "larger":
              srcsetFilename = this.largerFilename
              break
            case "large":
              srcsetFilename = this.largeFilename
              break
            case "medium":
              srcsetFilename = this.mediumFilename
              break
            case "smallhires":
              srcsetFilename = this.smallhiresFilename
              break
            case "smallplus":
              srcsetFilename = this.smallplusFilename
              break
            case "small":
              srcsetFilename = this.smallFilename
              break
            case "thumb":
              srcsetFilename = this.thumbFilename
              break
            case "213":
              srcsetFilename = this.file213
              break
            case "240":
              srcsetFilename = this.file240
              break
            case "262":
              srcsetFilename = this.file262
              break
            case "270":
              srcsetFilename = this.file270
              break
            case "288":
              srcsetFilename = this.file288
              break
            case "295":
              srcsetFilename = this.file295
              break
            case "320":
              srcsetFilename = this.file320
              break
            case "324":
              srcsetFilename = this.file324
              break
            case "330":
              srcsetFilename = this.file330
              break
            case "360":
              srcsetFilename = this.file360
              break
            case "393":
              srcsetFilename = this.file393
              break
            case "405":
              srcsetFilename = this.file405
              break
            case "432":
              srcsetFilename = this.file432
              break
            case "448":
              srcsetFilename = this.file448
              break
            case "456":
              srcsetFilename = this.file456
              break
            case "504":
              srcsetFilename = this.file504
              break
            case "512":
              srcsetFilename = this.file512
              break
            case "552":
              srcsetFilename = this.file552
              break
            case "576":
              srcsetFilename = this.file576
              break
            case "597":
              srcsetFilename = this.file597
              break
            case "608":
              srcsetFilename = this.file608
              break
            case "640":
              srcsetFilename = this.file640
              break
            case "672":
              srcsetFilename = this.file672
              break
            case "700":
              srcsetFilename = this.file700
              break
            case "720":
              srcsetFilename = this.file720
              break
            case "768":
              srcsetFilename = this.file768
              break
            case "787":
              srcsetFilename = this.file787
              break
            case "828":
              srcsetFilename = this.file828
              break
            case "860":
              srcsetFilename = this.file860
              break
            case "885":
              srcsetFilename = this.file885
              break
            case "896":
              srcsetFilename = this.file896
              break
            case "912":
              srcsetFilename = this.file912
              break
            case "932":
              srcsetFilename = this.file932
              break
            case "960":
              srcsetFilename = this.file960
              break
            case "961":
              srcsetFilename = this.file961
              break
            case "968":
              srcsetFilename = this.file968
              break
            case "1026":
              srcsetFilename = this.file1026
              break
            case "1067":
              srcsetFilename = this.file1067
              break
            case "1068":
              srcsetFilename = this.file1068
              break
            case "1080":
              srcsetFilename = this.file1080
              break
            case "1082":
              srcsetFilename = this.file1082
              break
            case "1180":
              srcsetFilename = this.file1180
              break
            case "1200":
              srcsetFilename = this.file1200
              break
            case "1235":
              srcsetFilename = this.file1235
              break
            case "1280":
              srcsetFilename = this.file1280
              break
            case "1290":
              srcsetFilename = this.file1290
              break
            case "1368":
              srcsetFilename = this.file1368
              break
            case "1389":
              srcsetFilename = this.file1389
              break
            case "1413":
              srcsetFilename = this.file1413
              break
            case "1440":
              srcsetFilename = this.file1440
              break
            case "1442":
              srcsetFilename = this.file1442
              break
            case "1500":
              srcsetFilename = this.file1500
              break
            case "1586":
              srcsetFilename = this.file1586
              break
            case "1590":
              srcsetFilename = this.file1590
              break
            case "1600":
              srcsetFilename = this.file1600
              break
            case "1707":
              srcsetFilename = this.file1707
              break
            case "1784":
              srcsetFilename = this.file1784
              break
            case "1824":
              srcsetFilename = this.file1824
              break
            case "1852":
              srcsetFilename = this.file1852
              break
            case "1864":
              srcsetFilename = this.file1864
              break
            case "1920":
              srcsetFilename = this.file1920
              break
            case "1973":
              srcsetFilename = this.file1973
              break
            case "2097":
              srcsetFilename = this.file2097
              break
            case "2120":
              srcsetFilename = this.file2120
              break
            case "2160":
              srcsetFilename = this.file2160
              break
            case "2220":
              srcsetFilename = this.file2220
              break
            case "2240":
              srcsetFilename = this.file2240
              break
            case "2379":
              srcsetFilename = this.file2379
              break
            case "2430":
              srcsetFilename = this.file2430
              break
            case "2560":
              srcsetFilename = this.file2560
              break
            case "2796":
              srcsetFilename = this.file2796
              break
            case "2880":
              srcsetFilename = this.file2880
              break
            case "2960":
              srcsetFilename = this.file2960
              break
            case "3060":
              srcsetFilename = this.file3060
              break
            case "3240":
              srcsetFilename = this.file3240
              break
            case "3540":
              srcsetFilename = this.file3540
              break
            case "3840":
              srcsetFilename = this.file3840
              break
          }

          //Indicate to the browser what size the image is, and be careful not to overlap sizes.

          if (orientation == "portrait") {
            //For portrait sizes this is done above
            // sizes.push("(max-height: " + descriptor[0] + "px) " + descriptor[0] + "px")
            // console.log("using PORTRAIT orientation")
          } else {
            sizes.push("(max-width: " + descriptor[0] + "px) " + descriptor[0] + "px")
            // console.log("using LANDSCAPE orientation")
          }

          if (srcsetString.length) {
            srcsetString += ", " + srcsetFilename + " " + descriptor[0] + "w"
          } else {
            srcsetString = srcsetFilename + " " + descriptor[0] + "w"
          }
        }

        sizes.push(descriptor[0] + "px") //adds the largest image size as the last entry to complete the sizes attribute
      }

      if (srcset) {
        // console.log("srcset string: " + srcsetString)
        // console.log("sizes: " + sizes.toString())

        //Detect if landscape, we suggest a 75% size (width) for images that are not 16:9
        //We can size the 4:3 and 3:2 images to 75% and the selected image appears to be correct sometimes, but
        //then the images are enlarged to fit the view and potentially pixelated. So we use the string parsed
        //from data-srcset like we have been doing.
        // alert(window.innerWidth)
        this.overlayImageDiv.innerHTML = `
        <div class='lightbox__overlay--spinner' style='position:absolute;z-index:-1;'></div>
        <div class='lightbox__overlay__selectedImg'>
        <img  src="${this.filename}" style="max-height:${window.innerHeight}px"
          alt="${photoCaption}" srcset="${srcsetString}" sizes="${sizes.toString()}" />
          </div>
        `
      } else {
        //Delete this branch after all images are converted from the old 4 filename format to the new 8 filename format.

        // console.log("smallFilename: " + this.smallFilename)
        // console.log("smallhiresFilename: " + this.smallhiresFilename)
        // console.log("mediumFilename: " + this.mediumFilename)
        // console.log("largeFilename: " + this.largeFilename)
        // console.log("largerFilename: " + this.largerFilename)
        // console.log("largehiresFilename: " + this.largehiresFilename)
        this.overlayImageDiv.innerHTML = `
          <div class='lightbox__overlay--spinner' style='position:absolute;z-index:-1;'></div>
          <div class='lightbox__overlay__selectedImg'>
          <img src="${this.filename}"
            alt="${photoCaption}" srcset="${this.smallFilename} 640w,
            ${this.smallhiresFilename} 1280w,
            ${this.mediumFilename} 1600w,
            ${this.largeFilename} 1920w,
            ${this.largerFilename} 2240w,
            ${this.largehiresFilename} 2560w" sizes="100vw" />
            </div>
          `
      }

      this.overlay.classList.add("lightbox__overlay--visible")
    }
    this.isOverlayOpen = true
  }

  closeOverlay(e) {
    e.preventDefault()
    if (this.isOverlayOpen) {
      this.overlay.classList.remove("lightbox__overlay--visible")
      document.body.classList.remove("no-scroll")
    }
    this.isOverlayOpen = false
  }
}

export default Lightbox
