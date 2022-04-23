function doPrint() {

    var printsection = document.getElementById("printable");
    var width, paddingLeft, paddingRight, top;
    //Setting styles here plus @media print CSS seems to work best (i.e. w.close below seems to prevent the styles from taking effect)
    if (printsection) {
        width = printsection.style.width;
        paddingLeft = printsection.style.paddingLeft;
        paddingRight = printsection.style.paddingRight;
        top = printsection.style.paddingTop;

        printsection.style.width = "8.5in";
        printsection.style.paddingLeft = "0.7in";
        printsection.style.paddingRight = "0.7in";
		//printsection.style.paddingTop = "0.4in";
	}
    var head = "<head><link rel='stylesheet' href='styles/swansonsoftware.css'></head>";
    var body = "<body>" + document.getElementById("section").innerHTML + "</body>";
    var html = "<html>" + head + body + "</html>";

    var w = window.open();
    w.document.write(html);
    w.print();
    w.close();

    if (printsection) {
        printsection.style.width = width;
        printsection.style.paddingLeft = paddingLeft;
        printsection.style.paddingRight = paddingRight;
		printsection.style.paddingTop = top;
    }

}

//Responsive menu
function setResponsiveClass() {
    var x = document.getElementById("nav");
    if (x.className === "col-3 menu") {
        x.className += " responsive";
    } else {
        x.className = "col-3 menu";
    }
}

function sendEmail()
{
    if (CheckFields())
    {
        setDateTime();
        frmEmail.submit();
    }
}

function validEmail(email)
{
    var pattern = new RegExp(/.+@.+\..+/i);
    return pattern.test(email);
}

function addToMessage(msg, moreText)
{
    if (msg.length > 0)
    {
        msg += "<br />" + moreText;
    }
    else
    {
        msg = moreText;
    }
    return msg;
}

function CheckFields()
{
    var returnAddress = document.forms["frmEmail"]["email"];
    var subject = document.forms["frmEmail"]["subj"];
    var comments = document.forms["frmEmail"]["comments"];
    var msg = "";

    if (! validEmail(returnAddress.value))
    {
        msg = addToMessage(msg, "Email must be a valid email address (like foo@bar.com).");
    }
    if (subject.value.length == 0)
    {
        msg = addToMessage(msg, "Subject can not be blank.");
    }
    if (comments.value.length == 0)
    {
        msg = addToMessage(msg, "\nEmail body can not be blank.");
    }

    if (comments.value.length == 0)
    {
        comments.focus();
        comments.className = "invalid";
    }

    if (subject.value.length == 0)
    {
        subject.focus();
        subject.className = "invalid";
    }
    else
    {
        document.forms["frmEmail"]["subject"].value = subject.value;
    }

    if (! validEmail(returnAddress.value))
    {
        returnAddress.focus();
        returnAddress.className = "invalid";
    }

    if (msg.length > 0)
    {
        document.getElementById("errMessage").innerHTML = msg;
        document.getElementById('errBox').style.display = "block";
        return false;
    }
    else
    {
        document.getElementById('errBox').style.display = "none";
        return true;
    }
}

function updateClass(ctrl)
{
    if (ctrl.className === "invalid") {
        ctrl.className = "frm";
    }
}

function setDateTime()
{
    // Put the date and time in the hidden form fields

    date = new Date ();

    var s = (date.getMonth() + 1) + "/";
    s += date.getDate() + "/";
    s += date.getFullYear();

    document.forms["frmEmail"]["txtDate"].value = s;

    var c = ":";

    var h = date.getHours();
    var temp = /^(\b\d{2,2}\b)*$/;
    if (!(temp.test(h)))
    {
        s = "0" + h + c;
    } else s = h + c;

    var m = date.getMinutes();
    if (!(temp.test(m)))
    {
        s += "0" + m + c;
    } else s += m + c;

    var sc = date.getSeconds();
    if (!(temp.test(sc)))
    {
        s += "0" + sc;
    } else s += sc;

    if (h > 11)
        document.forms["frmEmail"]["txtTime"].value = s + " PM";
    else
        document.forms["frmEmail"]["txtTime"].value = s + " AM";

    return true;
}
