<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Software Requirements</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
</style>
	<link rel="stylesheet" href="styles/swansonsoftware.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/debug.js"></script>
	<script src="javascript/swansonSoftware-v1.1.js"></script>

</head>

<body>
<a id="top"></a>

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

    <div class="col-17 section" id="section">
    <section id="printable">


        <span id="articleHeader">
        <a href="index.php">SwansonSoftware Home</a> > <a href="IntroProcess.php">Process</a> > Software Requirements 
        <a href="javascript:doPrint();" style="text-align:right;float:right;">Print</a>
        </span>


<h1 class="center">Software Requirements</h1>
<p>
Draft Version 0.5, December, 2003
<br />
<i>Gregory Swanson</i>
</p>

<h1 class="center">Contents</h1>

    <ol class="contents">
        <li><a href="#lst1">1. Introduction</a></li>
        <li><a href="#lst2">2. Requirements Documents</a></li>
        <li><a href="#lst3">3. Business Requirements - Vision and Scope</a></li>
        <li><!--<a href="#lst4">-->4. User Requirements - Use Case Model<!--</a>--></li>
        <li><a href="#lst5">5. Software Requirements Specification</a>
            <ol class="contents">
                <li>5.1. Functional Requirements</li>
                <li>5.2. Nonfunctional Requirements</li>
                <li>5.3. The Data Dictionary</li>
            </ol>
        </li>
        <li><a href="#idRef">6. References</a></li>
    </ol>


<!--*******************************************************************************-->

<a id="lst1"></a>
<h2 class="count">Introduction</h2>

<p>
Requirements engineering takes a fair amount of experience to become proficient at. Even then, much of the process involves
 work with business-specific processes and jargon. Thus, you need a good understanding
 of the business to do a good job gathering and analyzing requirements for a particular
 business.
</p>


<p>
Recognizing that, it should be obvious that requirements engineering is a collaborative effort.
 Software developers often find themselves invited to meetings where requirements for a
 project are to be discussed. Their role is expected to be technical advisor, stating 'that
 can be done' or 'that would take forever', etc., and the document resulting from that meeting is
 a bulleted list of features - maybe prioritized and probably with due dates.
</p>

<p>
For small informal projects that will take one or two days, a simple bulleted list of features
 may be fine. Other projects should ramp up the formality and size of the requirements with the
 formality and size of the project. The key reasons are:
</p>

<ul>
    <li>to make certain everyone knows what is being built - what business process is being addressed, what features will be available, what features will not be available, and that there is consensus</li>
    <li>to avoid implementing features incorrectly</li>
    <li>to avoid forgetting to implement a feature that is needed</li>
    <li>to produce a document that can be referenced during testing</li>
    <li>to produce a document that can be referenced when creating user documentation</li>
    <li>to more accurately estimate the amount of time it will take to complete the project</li>
</ul>

<!--*******************************************************************************-->

<a id="lst2"></a>
<h2 class="count">Requirements Documents</h2>

<p>
Three classes of requirements are the products of requirements analysis and design:
</p>
    <ul>
        <li><b>business requirements</b> - the vision and scope of the product</li>
        <li><b>user requirements</b> - the use cases</li>
        <li><b>software requirements</b> - sometimes referred to as <i>functional requirements</i>, it should contain nonfunctional requirements as well. Describes the outward appearance and behavior of the software in detail. Note that the internal behavior is specified in a <i>technical specification</i>, which is written using the requirements specification as a guide.</li>
    </ul>

<p>
Likewise, the requirements document names are:
</p>
    <ul>
        <li><b>Vision and Scope document</b></li>
        <li><b>Use cases</b></li>
        <li><b>Software requirements specification</b> - contains both functional and nonfunctional requirements.</li>
    </ul>

<p>
Document naming conventions are loose - other documents you may have heard about and their roles
 in the requirements process:
</p>

    <ul>
        <li><b>functional requirements</b> - also known as <i>functional specification</i>, the same as requirements specification.</li>
        <li><b>system requirements</b> - incorporated into functional requirements, system requirements describe the environment in which the software will operate.</li>
        <li><b>technical specification</b> - the software design document, describes the internal behavior and design of the software. Covered in <a href="ProcessDesign.php">Design Specs</a></li>
    </ul>

<p>
A good approach to requirements documentation is to start with templates.
</p>

<!--*******************************************************************************-->


<a id="lst3"></a>
<h2>3. Business Requirements - Vision and Scope</h2>

<p>
Projects grow out of some need, say in a business environment. Some opportunity is defined
 - a product or a way to make the business run more efficiently - and a solution is envisioned.
 In its simplest form the envisioned solution is the objective of the project, the <i>vision</i>
 of the solution.
</p>

<p>
At this point the business objective is known, and a few definitions about the project should
 be written down in a <i>vision and scope</i> document:
</p>
    <ul>
        <li>Describe the background of the business need.</li>
        <li>Describe the opportunity presented by recognizing a solution.</li>
        <li>Describe the risks incurred to the business if the project proceeds.</li>
        <li>Indicate what the success factors are.</li>
    </ul>

<p>
The business objective helps define limits for project requirements - the features and functions
 that will be present, i.e. the <i>scope</i> of the requirements. Any requirement that does not
 apply to the business objectives should be removed. Add descriptions of project scope to the
 vision and scope document:
</p>
    <ul>
        <li>Describe major functions and features that address the business problem.</li>
        <li>Describe what features should be present in initial and subsequent releases.</li>
        <li>Prioritize the features</li>
    </ul>


<!--*******************************************************************************-->


<a id="lst4"></a>
<h2>4. User Requirements - Use Case Model</h2>

<p>
</p>

<!--*******************************************************************************-->


<a id="lst5"></a>
<h2>5. Software Requirements Specification</h2>

<p>
Software requirements specifications (SRS) contain both funtional and nonfunctional
 requirements of the system.
</p>

<h3>Functional Requirements</h3>

<p>
Functional requirements are documented in a <i>functional specification</i>. The functional
 specification describes the system by specifying both input and output conditions. The
 system is described in detail, including the program's purpose, constraints and
 flexibility, and features by project phase. Functional specifications should include:

</p>
    <ul>
        <li>High-level flow chart(s) of the system.</li>
        <li>Low-level flow chart(s) describing flow through the program.</li>
        <li>Every message box, the text of the message, and code path for each choice should be described.</li>
        <li>Wire-frame mockups of each form, screen, or dialog</li>
        <li>Screen shots of finished forms, screens, and dialogs from a prototype.</li>
    </ul>

<h3>Nonfunctional Requirements</h3>

<p>
These are characteristics the system must exhibit, usually considered quality attributes
 because they do not relate to any specific function of the system <span class="author">
 (Kruchten, 1999)</span>
</p>
    <ul>
        <li>Usability</li>
        <li>Reliability</li>
        <li>Performance</li>
        <li>Supportability</li>
    </ul>
<br />


<h3>The Data Dictionary</h3>

<p>
Not directly part of a requirement, the <i>data dictionary</i> defines business specific
 terms and technical terms. Particularly, terms that have different common and technical
 meanings. This should be separate from the SRS, and not duplicated in other documents
 to prevent the situation where terms are defined differently in the documents.
</p>

<p>
</p>

<!--*******************************************************************************-->


<a id="idRef"></a>
<h3 class="center">References</h3>

<p class="references">
<b>Wiegers, Karl E.</b>, 1999, Software Requirements: Microsoft Press, 350 pages. ISBN: 0-7356-0631-5
</p>

<p class="references">
<b>Kruchten, Philippe</b>, 1999, The Rational Unified Process: An Introduction: Addison-Wesley, 255 pages. ISBN: 0-201-60459-0
</p>


<!--*******************************************************************************-->

        <a id="moveTop" href="#top">Top of page</a>
    </section>
    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>