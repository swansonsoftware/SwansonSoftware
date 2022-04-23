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
        <span id='PageTitle' class='PageTitle'>Oregon 2000</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2000.php">2000</a> > </p>
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
    <p class="bold">These were taken with a Nikon N4004.</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">We visited Mom and Mac in Oregon</p>
    <p class="bold">Hellgate River Excursion</p>
    <p class="bold">We went on the Hellgate River Excursion with Mom, Mac, Mac's son Maurice and his wife Pat</p>
    <a href="javascript:showModal('2000/large/001.jpg');"><img class="photo" src="2000/med/001.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/003.jpg');"><img class="photo" src="2000/med/003.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/005.jpg');"><img class="photo" src="2000/med/005.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/006.jpg');"><img class="photo" src="2000/med/006.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/008.jpg');"><img class="photo" src="2000/med/008.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/009_oregon.jpg');"><img class="photo" src="2000/med/009_oregon.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/011.jpg');"><img class="photo" src="2000/med/011.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/013.jpg');"><img class="photo" src="2000/med/013.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/015.jpg');"><img class="photo" src="2000/med/015.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/019.jpg');"><img class="photo" src="2000/med/019.jpg" alt="" /></a>
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
