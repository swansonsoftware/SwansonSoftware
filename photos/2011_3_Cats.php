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
        <span id='PageTitle' class='PageTitle'>Cats 2011</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2011.php">2011</a> > </p>
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
    <p class="bold">Shy and Spot</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Shy</p>
    <a href="javascript:showModal('2011/large/Img_0587.jpg');"><img class="photo" src="2011/med/Img_0587.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0588.jpg');"><img class="photo" src="2011/med/Img_0588.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0589.jpg');"><img class="photo" src="2011/med/Img_0589.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0590.jpg');"><img class="photo" src="2011/med/Img_0590.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Spot</p>
    <a href="javascript:showModal('2011/large/Img_0599.jpg');"><img class="photo" src="2011/med/Img_0599.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Shy watching TV</p>
    <a href="javascript:showModal('2011/large/Img_0602.jpg');"><img class="photo" src="2011/med/Img_0602.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">He really is a couch potato</p>
    <a href="javascript:showModal('2011/large/Img_0603.jpg');"><img class="photo" src="2011/med/Img_0603.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">One of Shy's favorite nap spots</p>
    <a href="javascript:showModal('2011/large/Img_0682.jpg');"><img class="photo" src="2011/med/Img_0682.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0683.jpg');"><img class="photo" src="2011/med/Img_0683.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Shy and his brother Bold</p>
    <a href="javascript:showModal('2011/large/Image15.jpg');"><img class="photo" src="2011/med/Image15.jpg" alt="" /></a>
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
