<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Email Form</title>
	<link rel="stylesheet" href="styles/swansonsoftware.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/debug.js"></script>
	<script src="javascript/swansonSoftware-v1.1.js"></script>

    <style>
        .pad {padding: 5px;}
        .invalidMsg {
            width: 100%;
            padding: 5px;
            border: 1px solid #CC0000;
            background-color: #FFFFE0;
            border-radius: 4px;
            resize: vertical;
        }
    </style>

</head>

<body>

<div id="header" class="row">
    <div class="col-3" style="padding:0">
    <!--#include file="logo.inc"-->
    </div>

    <div class="col-17">&nbsp;
    </div>
</div>

<div class="row">

    <!--#include file="nav.inc"-->

    <div class="col-17 section">

        <span id="articleHeader">
        <a href="default.asp">SwansonSoftware Home</a> > Contact
        </span>

<h1>Contact SwansonSoftware</h1>

<p>
Please use the form below to contact SwansonSoftware. If you would like a response,
 enter your email address too. SwansonSoftware does not store any information you
 send, and you will not get unsolicited email or marketing material from SwansonSoftware.
</p>


<div style="padding: 20px;">
<form name="frmEmail" method="post" action="/gdform.php">
    <input type="hidden" name="subject" value="Form Submission" />
    <input type="hidden" name="redirect" value="thankyou.asp" />

    <input type="hidden" name="txtDate" id="txtDate">
    <input type="hidden" name="txtTime" id="txtTime">

    <div class="row" id="errBox" style="display:none;">
        <div class="col-13 pad">
            <p id="errMessage" class="invalidMsg"></p>
        </div>
    </div>

    <div class="row">
        <div class="col-3 pad">
            <label for="cboTo">To:</label>
        </div>
        <div class="col-10 pad">
            <select class="frm" id="cboTo" name="To">
                <option value="admin" selected>Admin</option>
                <option value="techsupport">Tech Support</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-3 pad">
            <label for="email">Email:</label>
        </div>
        <div class="col-10 pad">
    		<input class="frm" type="text" id="email" name="email" onkeypress="updateClass(this)" />
        </div>
	</div>

    <div class="row">
        <div class="col-3 pad">
            <label for="subj">Subject:</label>
        </div>
        <div class="col-10 pad">
    		<input class="frm" type="text" id="subj" value="SwansonSoftware Web site" onkeypress="updateClass(this)" />
        </div>
	</div>

    <div class="row">
        <div class="col-3 pad">
            <label for="comments">Message:</label>
        </div>
        <div class="col-10 pad">
        	<textarea class="frm" name="comments" rows="5" maxlength="2000" onkeypress="updateClass(this)"></textarea>
        </div>
	</div>

    <div class="row">
        <div class="col-13">
        	<input type="button" value="Send" onclick="sendEmail();" />
        </div>
	</div>

</form>
</div>

    </div>
</div>

<!-- #include file="footer.inc" -->

</body>
</html>
