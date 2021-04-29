function popup() {
        document.open("popup.html", "child", "toolbar=no,scrollbars=no,resizable=yes,top=200,left=400,width=400,height=275,location=no, title=no");

    }

function showContact() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contact").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "contact.txt", true);
  xhttp.send();
}
