<!doctype html>
<html lang="en">
<?php include "head.php"; ?>
<style>
    .flex-container {
      display: flex;
      flex-wrap: wrap;
    }
</style>
<body onresize="togglePlus()">
<a id="top"></a>

<div class="row">

    <div class="col-3 head">
    <?php include "logo.php"; ?>
    </div>

    <div class="col-14">
        <span id='PageTitle' class='PageTitle'>Greg and Ru&#39;s Album - Favorites</span>
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
    <div class="col-4">
    <p class="bold">
    Norma&#39;s Gardens
    </p>
    </div>
    <div class="col-16">
        <div class="flex-container">
            <div class="polaroid rotate_left">
                <a href='favorites-persimons.php'><img class="album" src="favorites/med/Img_0528.jpg" alt="" /></a>
                <p>Persimons, and Norma&#39;s Persimon Trees</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='favorites-GardenSeasons.php'><img class="album" src="favorites/med/Img_0593.jpg" alt="" /></a>
                <p>Winter, Spring, Summer in Norma&#39;s Garden</p> 
            </div>
            <div class="polaroid rotate_right">
                <a href='favorites-Normas.php'><img class="album" src="favorites/med/Img_1223.jpg" alt="" /></a>
                <p>Norma&#39;s Garden and House</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">
    Cats album
    </p>
    </div>
    <div class="col-16">
        <div class="flex-container">
            <div class="polaroid rotate_left">
                <a href='2006_1_CatsBirds.php'><img class="album" src="2006/med/latte3.jpg" alt="" /></a>
                <p>2006 - Latte and Kittens</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2006_4_Kittens.php'><img class="album" src="2006/med/Img_0091.jpg" alt="" /></a>
                <p>2006 - Latte&#39;s Kittens</p> 
            </div>
            <div class="polaroid rotate_right">
                <a href='2011_3_Cats.php'><img class="album" src="2011/med/Img_0589.jpg" alt="" /></a>
                <p>2011 - Shy and Spot</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2012_1_Cats.php'><img class="album" src="2012/med/Img_0108.jpg" alt="" /></a>
                <p>2012 - Shy and Spot</p>
            </div>
            <div class="polaroid rotate_left">
                <a href='2014_5_Cats.php'><img class="album" src="2014/med/Image12.jpg" alt="" /></a>
                <p>2014 - Shy, Spot, and interlopers</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2015_9_Kauai.php'><img class="album" src="2015/med/kauai_036.jpg" alt="" /></a>
                <p>2015 - Pahio cats</p>
            </div>
            <div class="polaroid rotate_right">
                <a href='2019_2_Kauai.php'><img class="album" src="2019/med/Dsc03267.jpg" alt="" /></a>
                <p>2019 - Kauai Cats and Chickens</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">
    Kauai album
    </p>
    </div>
    <div class="col-16">
        <div class="flex-container">
            <div class="polaroid rotate_left">
                <a href='1999_1_Kauai.php'><img class="album" src="1999/med/b001.jpg" alt="" /></a>
                <p>1999, first trip to Kauai together</p> 
            </div>
            <div class="polaroid rotate_none">
                <a href='2005_1_Kauai.php'><img class="album" src="2005/med/KI_20051015_0019.jpg" alt="" /></a>
                <p>2005 - first stay at G5</p>
            </div>
            <div class="polaroid rotate_right">
                <a href='2007_3_Kauai.php'><img class="album" src="2007/med/Img_0170.jpg" alt="" /></a>
                <p>2007 - Small Bridge, and Limahule Garden</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2009_3_Kauai.php'><img class="album" src="2009/med/Img_0407b.jpg" alt="" /></a>
                <p>2009 - Hoona House</p>
            </div>
            <div class="polaroid rotate_left">
                <a href='2011_4_Kauai.php'><img class="album" src="2011/med/Img_0741.jpg" alt="" /></a>
                <p>2011 - Allerton Garden</p> 
            </div>
            <div class="polaroid rotate_none">
                <a href='2012_6_Kauai.php'><img class="album" src="2012/med/Img_1079.jpg" alt="" /></a>
                <p>2012 - Hanalei Taro Field</p> 
            </div>
            <div class="polaroid rotate_right">
                <a href='2014_2_Kauai.php'><img class="album" src="2014/med/201407_055.jpg" alt="" /></a>
                <p>2014 - Golden Shower and Rainbow Shower Trees</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2015_9_Kauai.php'><img class="album" src="2015/med/kauai_036.jpg" alt="" /></a>
                <p>2015 - Hurricane Weather</p>
            </div>
            <div class="polaroid rotate_left">
                <a href='2015_10_Kauai.php'><img class="album" src="2015/med/kauai_085.jpg" alt="" /></a>
                <p>2015 - Lopaka Paipa Blvd</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2016_12_Kauai.php'><img class="album" src="2016/med/DSC00904.jpg" alt="" /></a>
                <p>2016 - Poipu Drive</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">
    Gardens album
    </p>
    </div>
    <div class="col-16">
        <div class="flex-container">
            <div class="polaroid rotate_left">
                <a href='2016_3_MunicipalRoseGarden.php'><img class="album" src="2016/med/2016-04-16_hrg_168.jpg" alt="" /></a>
                <p>2016 - Municipal Rose Garden, San Jose CA, April 16, Book 3</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2016_4_MunicipalRoseGarden.php'><img class="album" src="2016/med/2016-04-16_hrg_256.jpg" alt="" /></a>
                <p>2016 - Municipal Rose Garden, San Jose CA, April 16, Book 4</p>
            </div>
            <div class="polaroid rotate_right">
                <a href='2017_1_PearTreeBloom.php'><img class="album" src="2017/med/Dsc01309.jpg" alt="" /></a>
                <p>2017 - Pear Tree Blossoms, San Jose CA, March 19</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2017_8_Kauai.php'><img class="album" src="2017/med/Dsc01727.jpg" alt="" /></a>
                <p>2017 - Na &#39;Aina Kai</p>
            </div>
            <div class="polaroid rotate_left">
                <a href='2017_9_Kauai.php'><img class="album" src="2017/med/Dsc01760.jpg" alt="" /></a>
                <p>2017 - Na &#39;Aina Kai 2</p>
            </div>
            <div class="polaroid rotate_none">
                <a href='2017_10_Kauai.php'><img class="album" src="2017/med/Dsc01800.jpg" alt="" /></a>
                <p>2017 - Return to Limahule</p>
            </div>
            <div class="polaroid rotate_right">
                <a href='2019_1_Kauai.php'><img class="album" src="2019/med/Dsc03277.jpg" alt="" /></a>
                <p>2019 - Nukoli&#39;i Beach and G5</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">Moonrise over Nukoli'i Beach, Kauai, June 30 2018.
    </p>
    </div>
    <div class="col-16">
    <iframe id="youtube" src="https://www.youtube.com/embed/wRYuLtZ5cig?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">2019 - Municipal Rose Garden Slideshow</p>
    </div>
    <div class="col-16">
    <iframe id="youtube" src="https://www.youtube.com/embed/dSzhq219oAw?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">2019 - Kauai, Memos to Self</p>
    </div>
    <div class="col-16">
    <iframe id="youtube" src="https://www.youtube.com/embed/lGdNKEixQyw?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">2018 - Sunrise on Nukoli&#39;i Beach, Kauai</p>
    </div>
    <div class="col-16 thumbnail">
    <iframe id="youtube" src="https://www.youtube.com/embed/sMhOtGJW7Ho?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
    </div>
</div>

<div class="row">
    <div class="col-4">
    <p class="bold">2016 - Filoli Estate Slideshow</p>
    </div>
    <div class="col-16">
    <iframe id="youtube" src="https://www.youtube.com/embed/KOq_u868VOM?rel=0&wmode=Opaque&enablejsapi=1" allowfullscreen></iframe>
    </div>
</div>

</body>
</html>
