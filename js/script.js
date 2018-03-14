function setNavbar(currSel) {
    if (currSel == 0) {
        document.getElementById("data-selection").style.fontWeight = "bold";
        document.getElementById("location-selection").style.opacity = "0.5";
        document.getElementById("specific-selection").style.opacity = "0.5";
    } else {
        document.getElementById("data-selection").style.fontWeight = "normal";
        document.getElementById("location-selection").style.fontWeight = "bold";
        document.getElementById("specific-selection").style.opacity = "0.5";
    }
}
