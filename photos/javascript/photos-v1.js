//High resolution image modal overlay
var modal = document.getElementById('myModal');
var viewer = document.getElementById('largeView');

function showModal(fileName)
{
    modal = document.getElementById('myModal');
    viewer = document.getElementById('largeView');
    if (viewer)
    {
        viewer.style.display = "block";
    }
    var modalImg = document.getElementById("img01");
    modal.style.display = "block";
    modalImg.src = fileName;
}

function closeModal()
{
    modal.style.display = "none";
    if (viewer)
    {
        viewer.style.display = "none";
    }
}

//Responsive menu
function setResponsiveClass() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function checkMenuClick(group) {
    var w = getBrowserWindowWidth();
    //We only allow menu click when screen is <= 800px
    if (w<800) {
        showSubMenu(group);
        if (document.getElementById('m' + group.substr(7,1)).style.display == "inline") {
            //hide the submenu
            document.getElementById('p' + group.substr(7,1)).style.display = "inline";
            document.getElementById('m' + group.substr(7,1)).style.display = "none";
        } else {
            //show the submenu
            document.getElementById('p' + group.substr(7,1)).style.display = "none";
            document.getElementById('m' + group.substr(7,1)).style.display = "inline";
        }
    }
}
function showSubMenu(group) {
    var w = getBrowserWindowWidth();
    //Get an array of sub menu groups, we need the count
    var subMenuGroups = document.getElementsByClassName("dropdown-content");
    for (i=1; i<subMenuGroups.length+1; i++)
    {
        //check for submenuX and if open, close it

        if (group.substr(7,1) != i)
        {
            document.getElementById('submenu' + i).classList.remove('show');
            if (w<800) {
                document.getElementById('p' + i).style.display = "inline";
                document.getElementById('m' + i).style.display = "none";
            }
        }
    }
    document.getElementById(group).classList.toggle("show");
}
//Hide the fa-plus icon when window is resized
function togglePlus() {
    var w = getBrowserWindowWidth();
    var dropdowns = document.getElementsByClassName("dropdown-content");
    if (w>800) {
        for (i = 1; i < dropdowns.length+1; i++) {
            document.getElementById('p' + i).style.display = "none";
            document.getElementById('m' + i).style.display = "none";
        }
    } else {
        for (i = 1; i < dropdowns.length+1; i++) {
            if (document.getElementById('p' + i).style)
            {
                document.getElementById('p' + i).style.display = "inline";
                //document.getElementById('m' + i).style.display = "none";
            }
        }
    }
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    var w = getBrowserWindowWidth();
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i, j;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                if (w<800) {
                    j = i+1;
                    document.getElementById('p' + j).style.display = "inline";
                    document.getElementById('m' + j).style.display = "none";
                }
            }
        }
    }
}
function getBrowserWindowWidth() {
    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}

