function loadTable() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById("table").innerHTML = this.responseText;
	    }
	};
	// if (str == null || str == '') {
	// 	xhttp.open("GET", "all table data.php", true);
	// }else{
	// 	xhttp.open("GET", "js/all table search.php?q=" + str, true);
	// }
	xhttp.open("GET", "all table data.php", true);
	xhttp.send();
}

function searchTable(str) {
  if (str.length == 0) {
    document.getElementById("table").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("table").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "js/tableSearch.php?q=" + str, true);
    xmlhttp.send();
  }
}