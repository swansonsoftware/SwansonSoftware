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
        <span id='PageTitle' class='PageTitle'>Persimons 2010</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > <a href="2010.php">2010</a> > </p>
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
    <p class="bold">Select an image to see the high resolution copy</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Greg trimming a bush in Norma&#39;s front yard</p>
    <a href="javascript:showModal('2010/large/Img_0516.jpg');"><img class="photo" src="2010/med/Img_0516.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Norma&#39;s persimon trees</p>
    <p class="bold">Chocolate persimons (Maru)</p>
    <a href="javascript:showModal('2010/large/Img_0527.jpg');"><img class="photo" src="2010/med/Img_0527.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Chocolate persimons get their name from the dark brown flesh of the fruit.</p>
    <p class="bold">If the fruit is pollinated, seeds will form.</p>
    <p class="bold">The seeds give off alcolhol that turns the flesh of the fruit brown.</p>
    <a href="javascript:showModal('2010/large/Img_0528.jpg');"><img class="photo" src="2010/med/Img_0528.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">These are not the chocolate, we are not sure what variety they are.</p>
    <a href="javascript:showModal('2010/large/Img_0529.jpg');"><img class="photo" src="2010/med/Img_0529.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2010/large/Img_0531.jpg');"><img class="photo" src="2010/med/Img_0531.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2010/large/Img_0522.jpg');"><img class="photo" src="2010/med/Img_0522.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold"></p>
    </div>
    <div class="col-16 thumbnail">
    <a href="javascript:showModal('2010/large/Img_0525.jpg');"><img class="photo" src="2010/med/Img_0525.jpg" alt="" /></a>
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
