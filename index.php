<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>A-Group Clinics & Apteks</title>
</head>
<body>
	<div class="container">
	<div id="tabs">
	<ul>
	  <li><a href="#tab1">Tab 1</a></li>
	  <li><a href="#tab2">Tab 2</a></li>
	</ul>
	<div id="tab1">
	  <p>This is tab 1.</p>
	</div>
	<div id="tab2">
	  <p>This is tab 2.</p>
	</div>
  </div>
	</div>


	<script>
		var tabs = document.getElementById("tabs");
		tabs.addEventListener("click", function(event) {
 			var tab = event.target.hash.substr(1);
 			var divs = document.querySelectorAll("#tabs > div");
 			for (var i = 0; i < divs.length; i++) {
				divs[i].style.display = "none";
 			}
 			document.getElementById(tab).style.display = "block";
});

	</script>
</body>
</html>