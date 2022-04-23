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
        <span id='PageTitle' class='PageTitle'>Oregon 2008</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2008.php">2008</a> > </p>
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
    <p class="bold">Oregon</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/1.jpg');"><img class="photo" src="2008/med/1.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/3.jpg');"><img class="photo" src="2008/med/3.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/4.jpg');"><img class="photo" src="2008/med/4.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/5.jpg');"><img class="photo" src="2008/med/5.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/6.jpg');"><img class="photo" src="2008/med/6.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/7.jpg');"><img class="photo" src="2008/med/7.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/8.jpg');"><img class="photo" src="2008/med/8.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2008/large/9.jpg');"><img class="photo" src="2008/med/9.jpg" alt="" /></a>
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
