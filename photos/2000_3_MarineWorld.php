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
        <span id='PageTitle' class='PageTitle'>Marine World San Diego 2000</span>
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
    <p class="bold">Dolphins and whale watching the crowd</p>
    <a href="javascript:showModal('2000/large/1004.jpg');"><img class="photo" src="2000/med/1004.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/1005.jpg');"><img class="photo" src="2000/med/1005.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">The Splash Zone.</p>
    <a href="javascript:showModal('2000/large/1006.jpg');"><img class="photo" src="2000/med/1006.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Dolphin jumping over the rope.</p>
    <a href="javascript:showModal('2000/large/1007.jpg');"><img class="photo" src="2000/med/1007.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Fools With Tools - this show was lots of fun.</p>
    <a href="javascript:showModal('2000/large/1009.jpg');"><img class="photo" src="2000/med/1009.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">There was a sea lion...</p>
    <a href="javascript:showModal('2000/large/1010.jpg');"><img class="photo" src="2000/med/1010.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">...and a sea otter (on the box in front of the saw blade).</p>
    <p class="bold">The otter played the bad guy, sneaking around and causing trouble.</p>
    <a href="javascript:showModal('2000/large/1013.jpg');"><img class="photo" src="2000/med/1013.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/1014.jpg');"><img class="photo" src="2000/med/1014.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/1017.jpg');"><img class="photo" src="2000/med/1017.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">This is Tiny</p>
    <a href="javascript:showModal('2000/large/1019.jpg');"><img class="photo" src="2000/med/1019.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">The Splash Zone - it was fun watching people get soaked by the whale.</p>
    <p class="bold">It was really hot, and if I didn't have the camera I would have stood down there.</p>
    <a href="javascript:showModal('2000/large/1025.jpg');"><img class="photo" src="2000/med/1025.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2000/large/1024.jpg');"><img class="photo" src="2000/med/1024.jpg" alt="" /></a>
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
