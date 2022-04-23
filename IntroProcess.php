<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Process</title>
	<link rel="stylesheet" href="styles/swansonsoftware.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/debug.js"></script>
	<script src="javascript/swansonSoftware.js"></script>

</head>

<body>

<div id="header" class="row">
    <div class="col-3" style="padding:0">
    <?php include "logo.php"; ?>
    </div>

    <div class="col-17">
        <span id='PageTitle' class='PageTitle'>Process</span>
    </div>
</div>

<div class="row">

    <?php include "nav.php"; ?>

    <div class="col-17 section">

        <span id="articleHeader">
        <a href="index.php">SwansonSoftware Home</a> > Process
        </span>

<p>
This section is about software process, a.k.a. software engineering.  It was not
 called Engineering because software "engineering" still has a way to go before it
 becomes a true engineering discipline. It is troubling that this state of the practice has
 been cited for three decades in the literature (e.g. Hoare, 1975; Moore, 1998;
 Kitchenham and Budgen, 2002; Humphrey 2005 - see
 <a href="ProcessReadingList.php">Reading List</a> for references).
</p>

<p>
 The problem is that software engineering has no formalized
 empirical underpinnings (Moore, 1998, p. 3).
 While practice standards for software engineering do exist, they are drawn from experience
 and observation (Kitchenham and Budgen 2002), and not constrained
 by a body of scientific and engineering principles as are practice standards in other
 fields of engineering.  It seems we are still working on the foundation: a
 commonly-accepted body of knowledge.  In fact, Moore describes the body of work in
 software engineering standards as "dis-integrated, capriciously different in detail,
 overlapping and occasionally contradictory" (p. 4).
</p>

<p>
We may have come further than when Moore's roadmap to software engineering standards was
 published in 1998, but we are not there yet.  Kitchenham and Budgen state that empirical
 techniques "are still far from being incorporated into mainstream practice, even for
 academic research projects" (2002). This is a problem for any organization that is planning
 to implement a particular standard. How can they rationalize their choice to adopt a
 particular standard, and explain their choice if they need to show that they were not
 negligent in creating a product that is safe and fit for its intended use?
</p>

<p>
Even though the decision to follow particular standards may be difficult to make, there
 are several reasons why standards should be used (Moore, 1998, p. 8):
</p>

<ul>
    <li>They promote product improvement by increasing uniformity, ensuring consistent nomenclature, and providing techniques to develop software better, faster, or less expensively</li>
    <li>They protect the buyer</li>
    <li>They protect the business</li>
    <li>They promote professional discipline by defining the methods that should be used</li>
    <li>They improve communication between organizations</li>
</ul>

<p>
If these are not reason enough, it should be noted that standards are sometimes considered
 in procurement decisions (ibid p. 7).
</p>

<p>
This ongoing work attempts to show the current state of software process and practice.
</p>


<h2>Topics</h2>

<ul>
    <li><a href="ProcessModels.php">Process Models</a></li>
    <li><a href="ProcessRequirements.php">Requirements</a></li>
    <li><a href="ProcessDesign.php">Design</a></li>
    <li><a href="ProcessLCModels.php">Life Cycle Models</a></li>
    <li><a href="ProcessReviews.php">Reviews</a></li>
    <li><a href="ProcessReadingList.php">Reading List</a></li>
</ul>


    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>