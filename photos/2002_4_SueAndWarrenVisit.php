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
        <span id='PageTitle' class='PageTitle'>Warren and Sue Visit, 2002</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2002.php">2002</a> > </p>
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
    <p class="bold">Warren and Sue Visit</p>
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Guglielmo Winery, Morgan Hill, California</p>
    <p class="bold">Warren and Sue visited us in San Jose, and we went wine tasting</p>
    <a href="javascript:showModal('2002/large/2002guglielmo.jpg');"><img class="photo" src="2002/med/2002guglielmo.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Savanah-Channel Winery, Saratoga. Greg and Sue, tasting room</p>
    <a href="javascript:showModal('2002/large/2002savanahchannel.jpg');"><img class="photo" src="2002/med/2002savanahchannel.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Savanah-Channel Winery, the vinyard</p>
    <a href="javascript:showModal('2002/large/2002savanahchannel2.jpg');"><img class="photo" src="2002/med/2002savanahchannel2.jpg" alt="" /></a>
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
