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
				<h1 class="tablinks" >Klinikalar</h1>			
			</div>

			<!-- Tab content -->
			<div id="clinics" class="tabcontent">
				<div class="elements__wrapper">

				<?php
				$connection = mysqli_connect('localhost', 'root', '', 'clinics');
				$query = "SELECT * FROM clinics ORDER BY `id`;";

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
					<a target="_blank" href="<?php echo "https://www.google.com/maps?q=".$clinic_location1.",".$clinic_location2."" ?>">
							<img src="./style/location.png" alt="">
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

	</script>
</body>

</html>