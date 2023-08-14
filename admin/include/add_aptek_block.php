<?php

if(isset($_POST['create_aptek'])){
    echo "created aptek suka";

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
                    <input type="text" placeholder="add Aptek's name">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's adress
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add Aptek's adress">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's phone
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add Aptek's phone">
                </div>
            </div>

            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's location X
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add Aptek's location X">
                </div>
            </div>
            <div class="add__element__block">
                <div class="add__element__desc">
                Aptek's Location Y
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add Aptek's Location Y">
                </div>
            </div>

            <div class="add__element__button">
                    <input type="submit" name="create_aptek" value="Add Aptek">
            </div>
        </div>
    </form>
</div>
