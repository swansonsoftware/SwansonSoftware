<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Portfolio - PhysicianAccess</title>
	<link rel="stylesheet" href="styles/swansonsoftware.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/debug.js"></script>
	<script src="javascript/swansonSoftware.js"></script>

</head>

<body>
<a id="top"></a>

<div class="row">
    <div class="col-3" style="padding:0">
    <?php include "logo.php"; ?>
    </div>

    <div class="col-17">
        <span id='PageTitle' class='PageTitle'>Portfolio</span>
    </div>
</div>

<div class="row">

    <?php include "nav.php"; ?>

    <div class="col-17 section">

        <span id="articleHeader">
        <a href="index.php">SwansonSoftware Home</a> > <a href="portfolio.php"> Portfolio</a> > PhysicianAccess
        </span>


<h1 class="center">PhysicianAccess.com</h1>

<h2 class="noCountHead">Defect Tracking and Customer Call Tracking Systems</h2>


<p>
PhysicianAccess.com is no longer in business.  Some of their technology was sold to other
 companies so I can't show images of the systems I developed. Here are some descriptions.
</p>

<h3 class="noCountHead">Bug Tracker</h3>

<p class="head">
PhysicianAccess had a defect tracking system, written in MS Access, that was not being
 used regularly because it ran too slow. They needed a system that could be integrated
 into other processes in the future - like a customer call tracking system - and that
 didn't have per-seat licensing fees. The system needed to provide flexible reporting too,
 and not store data in some inaccessible proprietary format.
</p>

<p>
The solution I built was a Web application with role-based security, availability both
 inside and outside the LAN, event logging, and user administration. Standard defect
 tracker features were created: email notification, unlimited attachments, search, and
 reporting.
</p>

<p>
This system was widely used by the team, improving product quality and increasing
 development efficiency.
</p>


<h3 class="noCountHead">Call Tracker</h3>

<p class="head">
Subsequent to the bug tracker success, there was a need to track and manage customer
 inquiries. This system provided technical support and marketing with a system
 designed to accomodate PhysicianAccess' practice management software. Integration with
 the bug tracker provided the means to escalate customer issues without re-entering data.
</p>

        <a href="#top">Top of page</a>
    </div>
</div>
<!--*******************************************************************************-->

<?php include "footer.php"; ?>

</body>
</html>