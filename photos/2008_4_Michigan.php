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
        <span id='PageTitle' class='PageTitle'>Michigan 2008, Winter Project</span>
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


<div class="row">
    <div class="col-20">
        <div id="myModal" class="modal">
          <span class="close" onclick="closeModal()">x</span>
          <img class="modal-content" id="img01" src="#" alt="high resolution copy" style="border: 3px solid #000;">
          <div id="caption"></div>
        </div>
    </div>
</div>

<div class="row" id="largeView" style="display:none;">
    <div class="col-4">
    <p class="bold">Warren and Sue&#39;s Winter Project</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Northwest side before - now this needs paint...</p>
    <a href="javascript:showModal('2008/large/northwestSideBefore.jpg');"><img class="photo" src="2008/med/northwestSideBefore.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Northwest side finished. Nice job!</p>
    <a href="javascript:showModal('2008/large/northwestSideFinished.jpg');"><img class="photo" src="2008/med/northwestSideFinished.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">East side before...</p>
    <a href="javascript:showModal('2008/large/eastsideBefore.jpg');"><img class="photo" src="2008/med/eastsideBefore.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">East side finished.</p>
    <a href="javascript:showModal('2008/large/eastsideFinished.jpg');"><img class="photo" src="2008/med/eastsideFinished.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">East side (2) before...</p>
    <a href="javascript:showModal('2008/large/eastside2before.jpg');"><img class="photo" src="2008/med/eastside2before.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">East side (2) finished</p>
    <a href="javascript:showModal('2008/large/eastside2finished.jpg');"><img class="photo" src="2008/med/eastside2finished.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Front side before...</p>
    <a href="javascript:showModal('2008/large/frontsideBefore.jpg');"><img class="photo" src="2008/med/frontsideBefore.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Front side after.</p>
    <a href="javascript:showModal('2008/large/frontsideAfter.jpg');"><img class="photo" src="2008/med/frontsideAfter.jpg" alt="" /></a>
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
