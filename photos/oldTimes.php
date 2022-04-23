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
        <span id='PageTitle' class='PageTitle'>Old Times</span>
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
        <p class="breadcrumb"><a href="photos.php">Album Home</a> > Old Times</p>
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
    <p class="bold">Pictures from long ago</p>
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Left to right: Minnie (grandma), Wayne, Ann (mom), Leona, Larry. 1947.</p>
    <a href="javascript:showModal('1900s/large/1947Family.jpg');"><img class="photo" src="1900s/med/1947Family.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Sue and Greg and Santa. Circa 1961.</p>
    <a href="javascript:showModal('1900s/large/1961Santa.jpg');"><img class="photo" src="1900s/med/1961Santa.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">This was scanned from a matt-finish print, which had lousy detail.</p>
    <p class="bold">From left to right: Don Betcher, Pete Heur (Don is blocking out Pete from this picture), Millie Heur (Pete&#39;s sister), and Debbie Goff. Yours truly taking the picture. Circa 1975.</p>
    <a href="javascript:showModal('1900s/large/1975HS.jpg');"><img class="photo" src="1900s/med/1975HS.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">This was scanned from a matt-finish print also. Circa 1976.</p>
    <p class="bold">Me and Pete Heur. Pete and Millie and I went on a trip to San Francisco in late Spring.</p>
    <a href="javascript:showModal('1900s/large/1976PeteGreg.jpg');"><img class="photo" src="1900s/med/1976PeteGreg.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Millie and Pete - trip to San Francisco in late Spring. Somewhere near Big Sur.</p>
    <a href="javascript:showModal('1900s/large/1976PnM.jpg');"><img class="photo" src="1900s/med/1976PnM.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">Trip to San Francisco - taking in the view. Pete and me, Millie is taking the picture.</p>
    <a href="javascript:showModal('1900s/large/1976SF.jpg');"><img class="photo" src="1900s/med/1976SF.jpg" alt="" /></a>
    </div>
</div>

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-16 thumbnail">
    <p class="bold">1983. Morice and twins, and yours truly. Umm, my hair - it used to curl like that.</p>
    <a href="javascript:showModal('1900s/large/1983GregMorice.jpg');"><img class="photo" src="1900s/med/1983GregMorice.jpg" alt="" /></a>
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
