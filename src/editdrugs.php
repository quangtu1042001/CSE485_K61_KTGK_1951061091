<?php
include 'header.php';
include 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<?php
$id = $_GET['id'];
$sql = "select * from drugs where id = $id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $dr_name = $row['name'];
        $dr_type = $row['type'];
        $dr_bar = $row['barcode'];
        $dr_dose = $row['dose'];
        $dr_code = $row['code'];
        $dr_price = $row['cost_price'];
        $dr_selling = $row['selling_price'];
        $dr_ex = $row['expiry'];
        $dr_cname = $row['company_name'];
        $dr_pro = $row['production_date'];
        $dr_exp = $row['expiration_date'];
        $dr_place = $row['place'];
        $dr_quantity = $row['quantity'];
    } else {
        header("location:index.php");
    }
}
?>

<?php
if (isset($_POST["edit"])) {
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
    if ($dr_name != "" && $dr_type != "" && $dr_bar != "" &&  $dr_dose != "" && $dr_code != "" && $dr_price != "" && $dr_selling != "" && $dr_ex != "" && $dr_cname != "" && $dr_pro != "" && $dr_exp != "" &&$dr_exp != "" && $dr_exp != "") {
        $sql = "UPDATE `drugs` SET `name`='$dr_name',`type`=' $dr_type',`barcode`='$dr_bar',`dose`='$dr_dose',`code`='$dr_code',`cost_price`='$dr_price' ,`selling_price`='$dr_selling',`expiry`='$dr_ex',`company_name`='$dr_cname',`production_date`='$dr_pro',`expiration_date`='$dr_exp',`place`='$dr_place',`quantity`='$dr_quantity' WHERE bd_id=$id";
        $result = mysqli_query($conn, $sql);
        header("location:index.php");
    }
}

?>

<main class="container">
    
    <form action="" method="post">


        <div class="mb-3">
            <label for="name" class="form-label">Tên thuốc</label>
            <input type="text" class="form-control" name="name" value="<?php echo $dr_name; ?>">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label"> Loại thuốc</label>
            <input type="text" class="form-control" name="type" value="<?php echo $dr_type; ?>">
        </div>
        <div class="mb-3">
            <label for="barcode" class="form-label">Mã Vạch</label>
            <input type="text" class="form-control" name="barcode" value="<?php echo $dr_bar; ?>">
        </div>
        <div class="mb-3">
            <label for="dose" class="form-label">liều lượng</label>
            <input type="text" class="form-control" name="dose" value="<?php echo $dr_dose; ?>">
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Mã</label>
            <input type="tel" class="form-control" name="code" value="<?php echo $dr_code; ?>">
        </div>
        <div class="mb-3">
            <label for="cost_price" class="form-label">tiền mua vào</label>
            <input type="tel" class="form-control" name="cost_price" value="<?php echo $dr_price; ?>">
        </div>
        <div class="mb-3">
            <label for="selling_price" class="form-label">tiền bán</label>
            <input type="tel" class="form-control" name="selling_price" value="<?php echo $dr_selling; ?>">
        </div>
        <div class="mb-3">
            <label for="expiry" class="form-label">trạng thái thuốc</label>
            <input type="tel" class="form-control" name="expiry" value="<?php echo $dr_ex; ?>">
        </div>
        <div class="mb-3">
            <label for="company_name" class="form-label">tên công ty</label>
            <input type="tel" class="form-control" name="company_name" value="<?php echo $dr_cname; ?>">
        </div>
        <div class="mb-3">
            <label for="production_date" class="form-label">ngày sản xuất</label>
            <input type="tel" class="form-control" name="production_date" value="<?php echo $dr_pro; ?>">
        </div>
        <div class="mb-3">
            <label for="expiration_date" class="form-label">ngày hết hạn</label>
            <input type="tel" class="form-control" name="expiration_date" value="<?php echo $dr_exp; ?>">
        </div>
        <div class="mb-3">
            <label for="place" class="form-label">nơi sản xuất</label>
            <input type="tel" class="form-control" name="place" value="<?php echo $dr_place; ?>">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">số lượng</label>
            <input type="tel" class="form-control" name="quantity" value="<?php echo $dr_quantity; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="edit" value="edit">Sửa</button>
    </form>
</main>
<?php
include 'footer.php';
?>