<?php
$connection = mysqli_connect('localhost', 'root', '', 'clinics');
if(isset($_POST['create_aptek'])){
    $aptek_name = $_POST['aptek_name'];
    $aptek_adress = $_POST['aptek_adress'];
    $aptek_phone = $_POST['aptek_phone'];

    $aptek_location1 = $_POST['aptek_location1'];
    $aptek_location2 = $_POST['aptek_location2'];


    $query = "INSERT INTO `aptek` (`name`, `adress`, `phone`, `location_1`, `location_2`) "; 
    $query .= "VALUES ('{$aptek_name}', '{$aptek_adress}', '{$aptek_phone}', '{$aptek_location1}', '{$aptek_location2}') ";
    
    $create__aptek = mysqli_query($connection, $query); 

    if(!$create__aptek){
        die("QUERY FAILED ." . mysqli_error($connection));
    }


    header("Location: ../admin.php?page=data");
}

?>



<div class="add_container">
    <form class="add__element__form" action="./include/add_aptek_block.php" method="POST" enctype="multipart/form-data">
        <div class="add__element__container">
            <div class="add__element__block">
                <div class="add__element__desc">
                   Aptek's name
                </div>
                <div class="add__element__input">
                    <input type="text" name="aptek_name" placeholder="add Aptek's name">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's adress
                </div>
                <div class="add__element__input">
                    <input type="text" name="aptek_adress" placeholder="add Aptek's adress">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's phone
                </div>
                <div class="add__element__input">
                    <input type="text" name="aptek_phone" placeholder="add Aptek's phone">
                </div>
            </div>

            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's location X
                </div>
                <div class="add__element__input">
                    <input type="text" name="aptek_location1" placeholder="add Aptek's location X">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's Location Y
                </div>
                <div class="add__element__input">
                    <input type="text" name="aptek_location2" placeholder="add Aptek's Location Y">
                </div>
            </div>

            <div class="add__element__button">
                    <input type="submit" name="create_aptek" value="Add Aptek">
            </div>
        </div>
    </form>
</div>
