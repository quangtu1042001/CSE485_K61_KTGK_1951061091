<?php
    include 'header.php';
?>

<main>
        <a href="addrugs.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm loại thuốc</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã thuốc</th>
                    <th scope="col">Tên thuốc</th>
                    <th scope="col">Hiển thị thông tin chi tiết</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT id , name FROM drugs "; 
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td><a href="detail.php?id='.$row['id'].'"><i class="fas fa-info-circle"></i></a></td>';
                            echo '<td><a href="editdrugs.php?id='.$row['id'].'"><i class="fas fa-user-edit"></i></a></td>';
                            echo '<td><a href="deletedrugs.php?id='.$row['id'].'"><i class="fas fa-user-times"></i></a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
    
<?php
    include 'footer.php';
?>