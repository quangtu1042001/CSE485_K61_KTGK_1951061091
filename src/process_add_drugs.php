<?php
    $dr_name = $_POST['name'];
    $dr_type = $_POST['type'];
    $dr_bar = $_POST['barcode'];
    $dr_dose = $_POST['dose'];
    $dr_code = $_POST['code'];
    $dr_price = $_POST['cost_price'];
    $dr_selling=$_POST['selling_price'];
    $dr_ex = $_POST['expiry'];
    $dr_cname = $_POST['company_name'];
    $dr_pro =$_POST['production_date'];
    $dr_exp =$_POST['expiration_date'];
    $dr_place = $_POST['place'];
    $dr_quantity = $_POST['quantity'];

    include 'config.php';

    // Bước 02:
    $sql = "INSERT INTO `drugs`( `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`)
     VALUES ('$dr_name','$dr_type','$emp_bar','$dr_dose','$dr_code','$dr_price',' $dr_selling','$dr_ex',' $dr_cname','$dr_pro','$dr_exp','$dr_place','$dr_quantity')";

    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>