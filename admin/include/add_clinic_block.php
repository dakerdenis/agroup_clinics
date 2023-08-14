<?php

if(isset($_POST['create_clinic'])){
    echo "created clinic suka";

}

?>



<div class="add_container">
    <form class="add__element__form" action="./include/add_clinic_block.php" method="POST" enctype="multipart/form-data" >
        <div class="add__element__container">
            <div class="add__element__block">
                <div class="add__element__desc">
                   Clinic's name
                </div>
                <div class="add__element__input">
                    <input type="text" name="clinic_name" placeholder="add clinic's name">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                   Clinic's adress
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add clinic's adress">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                   Clinic's phone
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add clinic's phone">
                </div>
            </div>

            <div class="add__element__block">
                <div class="add__element__desc">
                   Clinic's location X
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add clinic's location X">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                   Clinic's Location Y
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add clinic's Location Y">
                </div>
            </div>

            <div class="add__element__button">
                <input type="submit" name="create_clinic" value="Add Clinic">
            </div>
        </div>
    </form>
</div>