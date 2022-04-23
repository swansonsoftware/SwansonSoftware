function doPrint() {
	toggleVisibilityForPrint("hidden");
	
	var section = document.getElementById("section");
	var width = "";
	var left = "";
	var sectionTop = "";
	if (section) {
		width = section.style.width;
		left = section.style.left;
		sectionTop = section.style.top;

		section.style.width = "6.5in";
		section.style.left = ".3in";
		section.style.top = "0px";
	}

	print();
	
	if (section) {
		section.style.width = width;
		section.style.left = left;
		section.style.top = sectionTop;
	}

	toggleVisibilityForPrint("visible")
}

var visHeader, visMenu, visNav, visPrint, vis; //it's a shame we have to do this because some browsers don't support CSS "initial"


function toggleVisibilityForPrint(visibility)
{
	var header = document.getElementById("header");
	var menu = document.getElementById("menu");
	var nav = document.getElementById("nav");
	var print = document.getElementById("print");
	if (header) {
		header.style.visibility = visibility;
	}

	var menu = document.getElementById("menu");
	if (menu) {
		menu.style.visibility = visibility;
	}
	var nav = document.getElementById("nav");
	if (nav) {
		nav.style.visibility = visibility;
	}
	var print = document.getElementById("print");
	if (print) {
		print.style.visibility = visibility;
	}
	var print = document.getElementById("articleHeader");
	if (articleHeader) {
		print.style.visibility = visibility;
	}

	if (menu) {
		menu.style.visibility = visibility;
	}
	if (nav) {
		nav.style.visibility = visibility;
	}
	if (print) {
		print.style.visibility = visibility;
	}
    if (visibility == "hidden")
    {
        if (header) {
            visHeader = header.style.display;
            header.style.display = "none";
        }
        if (menu) {
            visMenu = menu.style.display;
            menu.style.display = "none";
        }
        if (nav) {
            visNav = nav.style.display;
            nav.style.display = "none";
        }
        if (print) {
            visPrint = print.style.display;
            print.style.display = "none";
        }
    }
    else
    {
        if (header) {
            header.style.display = visHeader;
            //header.style.display = "initial"; //not supported in IE 11 
        }
        if (menu) {
            menu.style.display = visMenu;
        }
        if (nav) {
            nav.style.display = visNav;
        }
        if (print) {
            print.style.display = visPrint;
        }
    }
}

/*--------------------------------------------------------------------
 Based on example in JavaScript, The Definitive Guide
 3rd Edition
 by David Flanagan
 O'Reilly & Associates, Inc. 1998
 * -----------------------------------------------------------------
 */

/*
 * Function showDoc(strDoc)
 * Description:
 *   Opens a new window and displays the page at the URL strDoc.
 *   The window size is resolution-independent.
 *   Optional parameters:
 *       iWidth
 *       iHeight
 *       showMenu
 *       showToolbar
 *
 */
function showDoc(strDoc, iWidth, iHeight, showMenu, showToolbar)
{
   if (showDoc.arguments.length == 1)
      var strParams = getWindowSetup(820, 400)
   else if (showDoc.arguments.length == 3)
      var strParams = getWindowSetup(iWidth, iHeight)
   else if (showDoc.arguments.length ==4)
      var strParams = getWindowSetup(iWidth, iHeight, showMenu)
   else if (showDoc.arguments.length ==5)
      var strParams = getWindowSetup(iWidth, iHeight, showMenu, showToolbar)
   //alert(strParams);
   //var displayWindow = window.open(strDoc,'_blank',strParams);
   var displayWindow = window.open('largeview.asp?pic=' + strDoc,'_blank',strParams);

   displayWindow.focus();
   return false;
}

/*
 * Function getWindowSetup(intWidth, intHeight, showMenu, showToolbar)
 * Description:
 *   Sets window parameters using SwansonSoftware user interface
 *   guidelines.  If the user's screen resolution does not allow
 *   the window to fit on the screen, the window size is
 *   calculated based on the input parameters.
 */
function getWindowSetup(intWidth, intHeight, showMenu, showToolbar)
{
   if (screen.width < 1024)
   {
      var window_height= screen.height - screen.height / 4;
      var window_width = screen.width - screen.width / 8;
   } else {
      var window_width = intWidth;
      var window_height = intHeight;
   }

   var window_top = (screen.height-window_height)/2;
   var window_left = (screen.width-window_width)/2;
   var menu='no';
   var toolbar='no';
   if (getWindowSetup.arguments.length == 3)
      menu='yes';
   else if (getWindowSetup.arguments.length == 4)
   {
      menu=showMenu;
      toolbar='yes';
   }

   var strParams = "resizable=yes,";
   strParams += "menubar=" + menu + ",";
   strParams += "scrollbars=yes,";
   strParams += "toolbar=" + toolbar + ",";
   strParams += "directories=no,";
   strParams += "width=" + window_width + ",";
   strParams += "height=" + window_height + ",";
   strParams += "top=" + window_top + ",";
   strParams += "left=" + window_left;

   return strParams;
}
