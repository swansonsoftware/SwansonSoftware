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
        <span id='PageTitle' class='PageTitle'>Japan 2011</span>
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
    <p class="bold">Japan, February 19-28</p>
    <p class="bold">The company sent me to upgrade a customer's system.</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Train from the airport.</p>
    <a href="javascript:showModal('2011/large/Img_0558.jpg');"><img class="photo" src="2011/med/Img_0558.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">I stayed at the Keio Plaza Hotel in Hachioji</p>
    <p class="bold">View from my room</p>
    <a href="javascript:showModal('2011/large/Img_0570.jpg');"><img class="photo" src="2011/med/Img_0570.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">I took the train everyday to work.</p>
    <a href="javascript:showModal('2011/large/Img_0572.jpg');"><img class="photo" src="2011/med/Img_0572.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0573.jpg');"><img class="photo" src="2011/med/Img_0573.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0575.jpg');"><img class="photo" src="2011/med/Img_0575.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0576.jpg');"><img class="photo" src="2011/med/Img_0576.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0577.jpg');"><img class="photo" src="2011/med/Img_0577.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2011/large/Img_0578.jpg');"><img class="photo" src="2011/med/Img_0578.jpg" alt="" /></a>
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
