<div class="admin__data">
<div class="container">
			<!-- Tab links -->
			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'clinics')"  id="defaultOpen">Klinikalar</button>
				<button class="tablinks" onclick="openCity(event, 'aptek')">Apteklər</button>
			
			</div>

			<!-- Tab content -->
			<div id="clinics" class="tabcontent">
				<div class="elements__wrapper">

				<?php
				$connection = mysqli_connect('localhost', 'root', '', 'clinics');
				$query = "SELECT * FROM `clinics` ORDER BY `id`;";

				$all_clinics = mysqli_query($connection, $query);


				while ($row = mysqli_fetch_assoc($all_clinics)) {
					$clinic_id = $row['id'];
					$clinic_name = $row['name'];
					$clinic_adress = $row['adress'];
					$clinic_phone = $row['phone'];
					$clinic_location1 = $row['location_1'];
					$clinic_location2 = $row['location_2'];

					?>

						<div class="elements_element">
							<div class="elements_element__container">
								<div class="elements_element_name">
									<p><?php echo $clinic_name ?></p>
								</div>
								<div class="elements_element_adress">
									<p>
									<?php echo $clinic_adress ?>
									</p>
								</div>
								<div class="elements_element_number">
									<p>
									<?php echo $clinic_phone ?>
									</p>
								</div>
							</div>
							<div class="elements_element__location">
								 <a target="_blank" href="https://www.google.com/maps?q=<?php echo $clinic_location1 ?>,<?php echo $clinic_location2 ?>">
									<img src="../style/location.png" alt="">
								</a>
							</div>
                            <div class="elements_element__location_delete">
                                <a href="./include/delete.php?id=<?php echo $clinic_id; ?>">
                                    Delete
                                </a>
                            </div>
                            <div class="elements_element__location_change">
                                <a href="./admin.php?page=edit&type=clinic&id=<?php echo $clinic_id; ?>">
                                    Settings
                                </a>
                            </div>

						</div>
					<?php
				}
				?>
				</div>
			</div>

			<div id="aptek" class="tabcontent">
				<div class="elements__wrapper">
				<?php
				$connection = mysqli_connect('localhost', 'root', '', 'clinics');
				$query = "SELECT * FROM `aptek` ORDER BY `id`;";

				$all_apteks = mysqli_query($connection, $query);


				while ($row2 = mysqli_fetch_assoc($all_apteks)) {
					$aptek_id = $row2['id'];
					$aptek_name = $row2['name'];
					$aptek_adress = $row2['adress'];
					$aptek_phone = $row2['phone'];
					$aptek_location1 = $row2['location_1'];
					$aptek_location2 = $row2['location_2'];

					?>

						<div class="elements_element">
							<div class="elements_element__container">
								<div class="elements_element_name">
									<p><?php echo $aptek_name ?></p>
								</div>
								<div class="elements_element_adress">
									<p>
									<?php echo $aptek_adress ?>
									</p>
								</div>
								<div class="elements_element_number">
									<p>
									<?php echo $aptek_phone ?>
									</p>
								</div>
							</div>
							<div class="elements_element__location">
								 <a target="_blank" href="https://www.google.com/maps?q=<?php echo $aptek_location1 ?>,<?php echo $aptek_location2 ?>">
									<img src="../style/location.png" alt="">
								</a>
							</div>
                            <div class="elements_element__location_delete">
                                <a href="./include/delete_aptek.php?id=<?php echo $aptek_id ?>">
                                    Delete
                                </a>
                            </div>
                            <div class="elements_element__location_change">
                                <a href="">
                                    Settings
                                </a>
                            </div>

						</div>
					<?php
				}
				?>


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