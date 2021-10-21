<?php
include 'header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<main>

    <table class="table my-4">
        <thead>
            <tr>
                <th scope="col">Mã thuốc</th>
                <th scope="col">Tên thuốc</th>
                <th scope="col">Mã Vạch</th>
                <th scope="col">Liều Lượng</th>
                <th scope="col">Mã</th>
                <th scope="col">Giá Nhập</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Trạng thái Hạn sử dụng</th>
                <th scope="col">Công ty</th>
                <th scope="col">Ngày sản xuất</th>
                <th scope="col">Ngày hết hạn</th>
                <th scope="col">Nơi sản xuất</th>
                <th scope="col">Số lượng</th>

            </tr>
        </thead>
        <tbody>

            <?php

            include 'config.php';

            $sql = "SELECT * FROM `drugs` where id = $id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['type'] . '</td>';
                    echo '<td>' . $row['barcode'] . '</td>';
                    echo '<td>' . $row['dose'] . '</td>';
                    echo '<td>' . $row['cost_price'] . '</td>';
                    echo '<td>' . $row['selling_price'] . '</td>';
                    echo '<td>' . $row['expiry'] . '</td>';
                    echo '<td>' . $row['company_name'] . '</td>';
                    echo '<td>' . $row['production_date'] . '</td>';
                    echo '<td>' . $row['expiration_date'] . '</td>';
                    echo '<td>' . $row['place'] . '</td>';
                    echo '<td>' . $row['quantity'] . '</td>';
                    echo '</tr>';
                }
            }
            ?>


        </tbody>
    </table>
</main>


<?php
include 'footer.php';
?>