<?php
    include 'header.php';
    include 'config.php';
?>

    <main class="container">
        <h2>Thêm thông tin danh bạ Nhân viên</h2>
        <form action="process_add_drugs.php" method="post">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Tên thuốc:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" >
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label"> loại thuốc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type">
                </div>
            </div>
            <div class="form-group row">
                <label for="barcode" class="col-sm-2 col-form-label">Mã Code</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="barcode" name="barcode">
                </div>
            </div>
            <div class="form-group row">
                <label for="dose" class="col-sm-2 col-form-label">liều lượng</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="dose" name="dose">
                </div>
            </div>
            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">mã vạch</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="code" name="code">
                </div>
            </div>
            <div class="form-group row">
                <label for="cost_price" class="col-sm-2 col-form-label">tiền mua vào</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="cost_price" name="cost_price">
                </div>
            </div>
            <div class="form-group row">
                <label for="selling_price" class="col-sm-2 col-form-label">tiền bán</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="selling_price" name="selling_price">
                </div>
            </div>
            <div class="form-group row">
                <label for="expiry" class="col-sm-2 col-form-label">trạng thái thuốc</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="expiry" name="expiry">
                </div>
            </div>
            <div class="form-group row">
                <label for="company_name" class="col-sm-2 col-form-label">tên công ty</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="company_name" name="company_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="production_date" class="col-sm-2 col-form-label">ngày sản xuất</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="production_date" name="production_date">
                </div>
            </div>
            <div class="form-group row">
                <label for="expiration_date" class="col-sm-2 col-form-label">ngày hết hạn</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="expiration_date" name="expiration_date">
                </div>
            </div>
            <div class="form-group row">
                <label for="place" class="col-sm-2 col-form-label">nơi sản xuất</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="place" name="place">
                </div>
            </div>
            <div class="form-group row">
                <label for="quantity" class="col-sm-2 col-form-label">số lượng</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="quantity" name="quantity">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
    
<?php
    include 'footer.php';
?>