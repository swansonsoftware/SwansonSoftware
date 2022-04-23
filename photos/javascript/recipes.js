function doPrint() {
	toggleVisibilityForPrint("hidden");
	
	var section = document.getElementById("recipe");
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
		section.style.overflowY = "hidden";
		section.style.overflowX = "hidden";
	}

	print();
	
	if (section) {
		section.style.width = width;
		section.style.left = left;
		section.style.top = sectionTop;
	}

	toggleVisibilityForPrint("visible")
}

var visHeader, visMenu, visNav, visPrint; //it's a shame we have to do this because some browsers don't support CSS "initial"

function toggleVisibilityForPrint(visibility)
{
	var header = document.getElementById("header");
	var menu = document.getElementById("menu");
	var nav = document.getElementById("nav");
	var print = document.getElementById("print");
	if (header) {
		header.style.visibility = visibility;
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
