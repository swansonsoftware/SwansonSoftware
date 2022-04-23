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
        <span id='PageTitle' class='PageTitle'>Santa Catalina Island 1989</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="1989.php">1989</a> ></p>
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
    <p class="bold">Avalon, from the road leading to the airport, Little Harbor, and the Isthmus.</p>
    <a href="javascript:showModal('1989/large/19900515_003.jpg');"><img class="photo" src="1989/med/19900515_003.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Avalon, the bell that rings off the hours.</p>
    <a href="javascript:showModal('1989/large/19900515_004.jpg');"><img class="photo" src="1989/med/19900515_004.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Santa Catalina Island - Little Harbor, riding the trails, early morning.</p>
    <a href="javascript:showModal('1989/large/1990Catalina.jpg');"><img class="photo" src="1989/med/1990Catalina.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Mountain biking into Middle Ranch - no traffic here.</p>
    <a href="javascript:showModal('1989/large/19900515_001.jpg');"><img class="photo" src="1989/med/19900515_001.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">A field in Middle Ranch</p>
    <a href="javascript:showModal('1989/large/19900515_002.jpg');"><img class="photo" src="1989/med/19900515_002.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Leaving Middle Ranch</p>
    <a href="javascript:showModal('1989/large/19900515_005.jpg');"><img class="photo" src="1989/med/19900515_005.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Out of Middle Ranch, continuing into the interior.</p>
    <a href="javascript:showModal('1989/large/19900515_006.jpg');"><img class="photo" src="1989/med/19900515_006.jpg" alt="" /></a>
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
