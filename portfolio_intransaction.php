<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Portfolio - Intransaction</title>
	<link rel="stylesheet" href="styles/swansonsoftware.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/debug.js"></script>
	<script src="javascript/swansonSoftware.js"></script>

</head>

<body>

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
        <a href="index.php">SwansonSoftware Home</a> > <a href="portfolio.php"> Portfolio</a> > Intransaction
        </span>


<h1 class="center">Intransaction, Incorporated</h1>

<h2 class="noCountHead">Worker's Compensation Quote Prospector</h2>

<p>
My work on this site - besides providing advice on the architecture and choice of
 technology - was client-side scripting of business rules, form validation,
 navigation, and Internet Explorer's UserData behavior. The UserData behavior saves form
 data on the client, which reduces server round trips and the complexity of server code.
 I also created the style sheets for the site. I coded everything by hand using
 <a href="http://www.textpad.com/">TextPad</a>&#169;.
</p>

<p>
The UserData behavior also was used to save the number of rows of data in the DBA Names and
 Class Codes tables. When the user returns to those pages the table is re-populated and rows
 are added dynamically using the table DOM. Data is cleared when the quote is accepted on
 the Confirmation page, or when the user uses a button to clear the page.
</p>


<p>
The pages I helped design and code are not shown because they are "a competitive advantage" so I'm not free to show them.
</p>

    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>