<?php
if(isset($_POST['edit_item'])){
    $connection = mysqli_connect('localhost', 'root', '', 'clinics');
    $clinic_id = $_POST['clinic_id'];
    $clinic_name = $_POST['clinic_name'];
    $clinic_adress = $_POST['clinic_adress'];
    $clinic_phone = $_POST['clinic_phone'];
    $location = $_POST['location'];



       $query = "UPDATE `clinics` SET ";
       $query .= "`name`='{$clinic_name}', ";
   
       $query .= "`adress`='{$clinic_adress}', ";
       $query .= "`phone`='{$clinic_phone}', ";

       $query .= "`location`='{$location}' ";

   
       $query .= "WHERE `id` = $clinic_id ";

       echo $query;

       $edit_item = mysqli_query($connection, $query);

       if(!$edit_item){
           die("QUERY FAILED ." . mysqli_error($connection) );
       }
       sleep(3);
       header("Location: ../admin.php?page=edit&type=clinic&id=$clinic_id&success=true");
}
?>