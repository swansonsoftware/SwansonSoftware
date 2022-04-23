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
        <span id='PageTitle' class='PageTitle'>Kauai 2004</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2004.php">2004</a> > </p>
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
    <p class="bold">Kauai, October 1-8</p>
    <p class="bold">These were taken with a Nikon N4004.</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Oahu visit - Warren and Sue&#39;s place</p>
    <p class="bold">We went to Oahu to visit Warren and Sue, and Allison, Jason, Sarah and Keith were there.</p>
    <p class="bold">This is Virgil, one of the feral cats Sue adopted.</p>
    <a href="javascript:showModal('2004/large/20041009-3.jpg');"><img class="photo" src="2004/med/20041009-3.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2004/large/20041009-4.jpg');"><img class="photo" src="2004/med/20041009-4.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2004/large/20041009-5.jpg');"><img class="photo" src="2004/med/20041009-5.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2004/large/20041009-6.jpg');"><img class="photo" src="2004/med/20041009-6.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2004/large/20041009-7.jpg');"><img class="photo" src="2004/med/20041009-7.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2004/large/20041009-8.jpg');"><img class="photo" src="2004/med/20041009-8.jpg" alt="" /></a>
    </div>
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
