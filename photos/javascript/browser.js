/*--------------------------------------------------------------------
 	(c) 2001 Gregory Swanson.  All Rights Reserved.

	File: browser.js
--------------------------------------------------------------------*/

function cBrowser() {
	 agent  = navigator.userAgent.toLowerCase();
	 this.major = parseInt(navigator.appVersion);
	 this.minor = parseFloat(navigator.appVersion);
	 this.ns    = ((agent.indexOf('mozilla')   !=   -1) &&
					  (agent.indexOf('compatible') ==   -1));
	 this.nsOld = (this.ns && (document.layers) ? true : false);
	 this.nsNew = (this.ns && (!this.nsOld));
	 this.ie    = (agent.indexOf("msie")       !=   -1);
	 this.ieOld = (this.ie && (!(agent.indexOf("msie 5") == -1)) |
					  this.major < 4);
	 this.ieNew = (this.ie && !(this.ieOld));
	 this.mac   = (navigator.appVersion.indexOf("Mac") != -1);
	 this.opera = (navigator.userAgent.indexOf("Opera")!=-1);
}

var oBrowser = new cBrowser();

	var s = '<link rel="stylesheet" type="text/css" href="';
	if (oBrowser.nsOld) {
		document.write(s + 'acmeNSOld.css">');
		//alert(s + 'acmeNSOld.css">');
	} else if (oBrowser.opera) {
		document.write(s + 'acmeOpera.css">');
		//alert("acmeOpera.css");
	} else if (oBrowser.ie) {
		document.write(s + 'acme.css">');
		//alert("acme.css");
	} else if (oBrowser.nsNew) {
		document.write(s + 'acmeNSNew.css">');
		//alert("acme.css");
	} else {
		document.write(s + 'acme.css">');
		alert(s + 'acme.css">');
		//alert("acme.css");
	}
