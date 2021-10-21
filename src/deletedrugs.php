<?php
    include 'config.php';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
?>

<?php 
$sql = "DELETE FROM `drugs` WHERE id = $id";
mysqli_query($conn,$sql);
header("location:index.php");
mysqli_close($conn);
?>