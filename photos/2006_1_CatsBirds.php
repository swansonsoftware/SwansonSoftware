<!doctype html>
<html lang="en">
<?php include "head.php"; ?>

<body onresize="togglePlus()">
<a id="top"></a>

<div class="row">

    <div class="col-3 head">
    <?php include "logo.php"; ?>
    </div>

    <div class="col-14">
        <span id='PageTitle' class='PageTitle'>Cats and Birds 2006</span>
    </div>

    <?php include "head-social.php"; ?>
</div>

<div class="row">
    <div class="col-20">
    <div class="topnav" id="myTopnav">
    <?php include "nav_album.php"; ?>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-20">
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2006.php">2006</a> > </p>
    </div>
</div>


<div class="row" id="largeView" style="display:none;">
    <div class="col-20">
        <div id="myModal" class="modal">
          <span class="close" onclick="closeModal()">x</span>
          <img class="modal-content" id="img01" src="#" alt="high resolution copy" style="border: 3px solid #000;">
          <div id="caption"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">Video: Latte the momma cat.</p>
    </div>
    <div class="col-8">
        <div class="ssVideo">
            <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/z-lQ1WqsBiY?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-8"></div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-8">
        <div class="ssVideo">
            <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/0tyXhK70UlU?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-8"></div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">Video: Latte&#39;s kittens, Bold and Shy.</p>
    </div>
    <div class="col-8">
        <div class="ssVideo">
            <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/OjCt_T-G9x4?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-8"></div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">Easter. Mom and Mac&#39;s, Oregon.</p>
    <p class="bold">Video: Finches at bird feeders.</p>
    </div>
    <div class="col-8">
        <div class="ssVideo">
            <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/xs0MKCNdniM?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-8"></div>
</div>

<div class="row">
    <div class="col-4">
    <a href="#top">Top of page</a>
    </div>
    <div class="col-16">&nbsp;
    </div>
</div>

</body>
</html>
