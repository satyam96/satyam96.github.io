function openPrograms(ent, Program) {
	// body...
	var i,programMenu,tablinks;
	programMenu=document.getElementsByClassName("programMenu");
	for (i = 0; i < programMenu.length; i++) {
        programMenu[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Program).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
}