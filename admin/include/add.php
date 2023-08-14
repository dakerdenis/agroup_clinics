
<?php
if($_GET['type'] == 'clinic'){
    ?>
<div class="add_container">
    <from class="add__element__form" action="./include/add_clinic.php" method="POST" >
        <div class="add__element__container">
            <div class="add__element__block">
                <div class="add__element__desc">
                   Clinic's name
                </div>
                <div class="add__element__input">
                    <input type="text" placeholder="add clinic's name">
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
    </from>
</div>
    <?php
} else {
    ?>
    <div class="add_container">
    <from class="add__element__form">
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
                    <button name="submit" type="submit">
                        Add Aptek
                    </button>
            </div>
        </div>
    </from>
</div>

<?php 
} 

?>

