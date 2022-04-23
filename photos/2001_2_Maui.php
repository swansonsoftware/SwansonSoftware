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
        <span id='PageTitle' class='PageTitle'>Maui 2001, Book 2</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2001.php">2001</a> > </p>
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
    <p class="bold">Maui, August 23-30</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Maui, the road to Hana, half way.</p>
    <a href="javascript:showModal('2001/large/hanard5.jpg');"><img class="photo" src="2001/med/hanard5.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Grounds at Kahana Falls. Ru and Koi pond, in front of our unit.</p>
    <a href="javascript:showModal('2001/large/kahana1.jpg');"><img class="photo" src="2001/med/kahana1.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Yours truly, sitting in front of another pond at Kahana Falls.</p>
    <a href="javascript:showModal('2001/large/kahana2.jpg');"><img class="photo" src="2001/med/kahana2.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Hot tub in back of the timeshare units at Kahana Falls.</p>
    <p class="bold">We were lucky that we almost always had it to ourselves.</p>
    <a href="javascript:showModal('2001/large/kahana4.jpg');"><img class="photo" src="2001/med/kahana4.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2001/large/kahana5.jpg');"><img class="photo" src="2001/med/kahana5.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">From the hot tub. Shuffleboard court and checkers were under repair.</p>
    <a href="javascript:showModal('2001/large/kahana7.jpg');"><img class="photo" src="2001/med/kahana7.jpg" alt="" /></a>
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
