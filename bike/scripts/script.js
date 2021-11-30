// JavaScript Document

function reloadtable() {
	$('table').load('output.php table tr');
	//alert("test");
}

function buthov(x) {
	document.getElementById(x).style.color = "red";
	//alert(x);
}

function butunhov(x) {
	document.getElementById(x).style.color = "black";
	//alert(x);
}

function show(x, y, z, w) {
	document.getElementById(x).style.display  = "block";
	document.getElementById(y).style.display  = "none";
	document.getElementById(z).style.display  = "none";
	document.getElementById(w).style.display  = "none"; 
}

function show2() {
	document.getElementById('viewer2').style.display  = "block"; 
	document.getElementById('maintable2').style.display  = "block"; 
}

function closer() {
	document.getElementById('viewer2').style.display  = "none"; 
	document.getElementById('maintable2').style.display  = "none"; 
}

function hinter(s) {
    if (s.length == 0) {
        document.getElementById("hint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "hints.php?q=" + s, true);
        xmlhttp.send();
    }
}
