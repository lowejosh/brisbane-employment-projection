function setNavbar(currSel) {
    // If it is data selection
    if (currSel == 0) {
        // Sets the current "page" as bold and the rest with low opacity
        document.getElementById("data-selection").style.fontWeight = "bold";
        document.getElementById("location-selection").style.opacity = "0.5";
        document.getElementById("specific-selection").style.opacity = "0.5";
        
        // Removes the <a> tag around the text as it is not necessary
        document.getElementById("data-selection").innerHTML = "Data Selection";
    } else {
        
        document.getElementById("data-selection").style.fontWeight = "normal";
        document.getElementById("location-selection").style.fontWeight = "bold";
        document.getElementById("specific-selection").style.opacity = "0.5";
    }
}
