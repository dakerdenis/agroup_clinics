<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>A-Group Clinics & Apteks</title>

	<link rel="stylesheet" href="./style/style.css">
</head>

<body>


	<div class="main__wrapper">
		<div class="main__header">
			<div class="main__header__logo">
				<img src="./style/Logo.svg" alt="" srcset="">
			</div>

			<div class="main__header__name">
				<p>
					A-group sığorta şirkəti
				</p>
			</div>
		</div>

		<div class="container">
			<!-- Tab links -->
			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'clinics')"  id="defaultOpen">Klinikalar</button>
				<button class="tablinks" onclick="openCity(event, 'aptek')">Apteklər</button>
			
			</div>

			<!-- Tab content -->
			<div id="clinics" class="tabcontent">
				<div class="elements__wrapper">
					<div class="elements_element">
						<div class="elements_element_name">
							<p>optika Koroglu</p>
						</div>
						<div class="elements_element_adress">
							<p>Sumqayit, Azerbayjan, köz dönər küçesi, ev 228 ,m 1488 </p>
						</div>
						<div class="elements_element_number">
							<p>+994 50 228 14 88</p>
						</div>
					</div>

					<div class="elements_element">
						<div class="elements_element_name">
							<p>optika Koroglu</p>
						</div>
						<div class="elements_element_adress">
							<p>Sumqayit, Azerbayjan, köz dönər küçesi, ev 228 ,m 1488 </p>
						</div>
						<div class="elements_element_number">
							<p>+994 50 228 14 88</p>
						</div>
					</div>

					<div class="elements_element">
						<div class="elements_element_name">
							<p>optika Koroglu</p>
						</div>
						<div class="elements_element_adress">
							<p>Sumqayit, Azerbayjan, köz dönər küçesi, ev 228 ,m 1488 </p>
						</div>
						<div class="elements_element_number">
							<p>+994 50 228 14 88</p>
						</div>
					</div>


				</div>
			</div>

			<div id="aptek" class="tabcontent">
				<div class="elements__wrapper">
					<div class="elements_element">
						<div class="elements_element_name">
							<p>optika Koroglu</p>
						</div>
						<div class="elements_element_adress">
							<p>Sumqayit, Azerbayjan, köz dönər küçesi, ev 228 ,m 1488 </p>
						</div>
						<div class="elements_element_number">
							<p>+994 50 228 14 88</p>
						</div>
					</div>

					<div class="elements_element">
						<div class="elements_element_name">
							<p>optika Koroglu</p>
						</div>
						<div class="elements_element_adress">
							<p>Sumqayit, Azerbayjan, köz dönər küçesi, ev 228 ,m 1488 </p>
						</div>
						<div class="elements_element_number">
							<p>+994 50 228 14 88</p>
						</div>
					</div>
				


				</div>
			</div>
		</div>
	</div>





	<script>
		function openCity(evt, cityName) {
			// Declare all variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		document.getElementById("defaultOpen").click();
	</script>
</body>

</html>