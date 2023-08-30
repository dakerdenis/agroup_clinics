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
					$location = $row['location'];
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
								 <a target="_blank" href="<?php echo $location ?>">
									<img src="./style/location.png" alt="">
								</a>
							</div>
                            <div class="elements_element__location_change">
                                <a href="./admin.php?page=edit&type=clinic&id=<?php echo $clinic_id; ?>">
                                <i class="fa fa-gear"></i>
                                </a>
                            </div>
                            <div class="elements_element__location_delete">
                                <a href="./include/delete.php?id=<?php echo $clinic_id; ?>">
                                <i class="fa fa-trash-o"></i>
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
				$connection2 = mysqli_connect('localhost', 'root', '', 'clinics');
				$query2 = "SELECT * FROM `apteks` ORDER BY `id`;";

				$all_apteks = mysqli_query($connection2, $query2);


				while ($row2 = mysqli_fetch_assoc($all_apteks)) {
					$aptek_id = $row2['id'];
					$aptek_name = $row2['name'];
					$aptek_adress = $row2['adress'];
					$aptek_phone = $row2['phone'];
					$aptek_location = $row2['location'];

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
								 <a target="_blank" href="<?php echo $aptek_location?>">
									<img src="../style/location.png" alt="">
								</a>
							</div>
                            <div class="elements_element__location_change">
                                <a href="./admin.php?page=edit&type=aptek&id=<?php echo $aptek_id; ?>">
                                <i class="fa fa-gear"></i>
                                </a>
                            </div>
                            <div class="elements_element__location_delete">
                                <a href="./include/delete_aptek.php?id=<?php echo $aptek_id; ?>">
                                <i class="fa fa-trash-o"></i>
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