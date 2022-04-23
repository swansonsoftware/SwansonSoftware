<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Portfolio - Zippy Communications</title>
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
        <a href="index.php">SwansonSoftware Home</a> > <a href="portfolio.php"> Portfolio</a> > Zippy Communications
        </span>


<h1 class="center">Zippy Communications, Incorporated</h1>

<h2 class="noCountHead">Integrated Messaging, Collaboration and Personal Information Management Application</h2>

<p>
Zippy was creating a secure business-class, integrated messaging, collaboration and personal
 information management service.  The service uses a fat client written in Visual Basic 6,
 with a backend coded in Perl running on Linux, and three databases: MySQL, Postgres, and
 Oracle.
</p>

<p>
The Zippy client application has modules for activities (calendar, tasks, meetings), groups
 management (members, meetings, shared files, shared bookmarks and Web tours), library
 management (checkin, checkout, add, delete, edit), contacts management, email, chat,
 instant messaging, and some utilities for defect tracking, customer support tracking, user
 signup, reporting, and importing from other applications.
</p>

<h3 class="noCountHead">Client and Launcher Development</h3>
<p class="subhead">
My work on this product included work on existing code modules for activities, groups,
 library, contacts, email, chat, user signup, reporting, error handling, option settings,
 help integration, intellisense (e.g. type a few letters of a name in the name field in
 the address book and a name list appears, with the closest match selected), and the import
 wizard. I was responsible for creating from scratch modules for reporting, intellisense,
 customer support tracking, and the import wizard.
</p>

<p>
In addition to work on the client, I created a launcher application in Visual Basic 6.0
 for running the client on a removable USB solidstate drive. The launcher installs the
 components on the client machine following Microsoft's recommendations for installations.
 Later, the need to install components was circumvented by wrapping the client and all
 required files with Thinstall. Thinstall did not support out-of-process servers, which
 the Zippy client uses. I worked with Thinstall creator Jonathan Clark to help diagnose
 problems and memory leaks, resulting in an improved Thinstall product.
</p>

<h3 class="noCountHead">InstallShield</h3>
<p class="subhead">
When Zippy bought a copy of InstallShield Developer 7, I took responsibility to learn the
 product. I created installation packages for Windows 98 and Windows 2000/XP, including
 merge modules and patches for existing installations.
</p>

<h3 class="noCountHead">Help File</h3>
<p class="subhead">
When I began working at Zippy the product did not have a help file, and there wasn't room
 in the budget for a product like RoboHelp. I used Microsoft's free HTML Help Workshop in
 the past, and so began the help project, demonstrating and teaching use of the product and
 passing off the writing and image creation. This allowed Zippy to provide a fine help file
 for users.
</p>

<h3 class="noCountHead">Login for Secure USB Partition</h3>
<p class="subhead">
One of the USB drives Zippy resold was the <a href="http://www.thumbdrive.com"
 target="_top">Trek</a> Thumbdrive Secure, which has an API for
 accessing features including login, device initialization, and partitioning. This api is
 not accessible from Visual Basic, and Zippy needed to provide a login application for
 users, and an internal tool to configure new drives (e.g. require the user to create a
 password the first time). I created these tools with VC++ 6.0.
</p>

    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/grouplibrary.gif" alt="Group Library" />
            <p class="pictureCaption">Group Library</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/meeting.gif" alt="Meeting" />
            <p class="pictureCaption">Meeting Attendees</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/reports.gif" alt="Reports" />
            <p class="pictureCaption">Reports</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/supporttrackerlist.gif" alt="Support Tracker" />
            <p class="pictureCaption">
            Support Tracker - note that the grid column headers are not formatted in this image because the service was unavailable at the time.
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/supporttracker.gif" alt="Support Case" />
            <p class="pictureCaption">Support Case - Non-Zippy employees see this form.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/supporttrackerInternal.gif" alt="Support Case" />
            <p class="pictureCaption">Support Case - as above; this is the form Zippy employees see.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-3">
        <div class="portfolio">
            <img class="folio" src="../images/options2.gif" alt="Options" />
            <p class="pictureCaption">Options</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/importwizard3.gif" alt="Import Wizard" />
            <p class="pictureCaption">
                Import Wizard - locates existing email clients, finds existing contact folders in Outlook, Outlook Express, and Eudora. Select contacts to import. The wizard extracts all available contact information, including alternate phone numbers and communication types and imports into Zippy. The Wizard scans Zippy service to see if any of the selected contacts are already members, in which case the user is presented with additional screens to select those members and send them a notification that the user has signed up.
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/importwizard4.gif" alt="Import Wizard" />
            <p class="pictureCaption">Import Wizard - finds existing contact folders in Outlook, Outlook Express, and Eudora.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/importwizard6.gif" alt="Import Wizard" />
            <p class="pictureCaption">Import Wizard - selecting contacts to import.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <div class="portfolio">
            <img class="folio" src="../images/smsmsgs.gif" alt="SMS Messages" />
            <p class="pictureCaption">
            SMS Messages - allows the user to setup alerts for a mobile phone using simple message service. Alerts can be sent to multiple users.
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3" style="padding:0">&nbsp;
    </div>

    <div class="col-17">
        <a href="#top">Top of page</a>
    </div>
</div>
<!--*******************************************************************************-->

<?php include "footer.php"; ?>

</body>
</html>