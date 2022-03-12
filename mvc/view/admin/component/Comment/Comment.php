<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
<?php include_once('mvc/view/admin/component/search.php'); ?>
    <div class="details_customer">
        <div class="recentoder">
            <div class="carheader">
            </div>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Anh</th>
                    <th>số lượng</th>
                    <th>Mới nhất</th>
                    <th>cũ nhất</th>
                    <th>Chi tiết</th>
                </tr>
                <?php foreach ($result as $row):?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?= $row['products_name'] ?></td>
                        <td><img src="http://localhost:81/Duanmau/public/img/<?= $row['image'] ?>" style = "width:100px"></td>
                        <td><?= $row['SOLUONG'] ?></td>
                        <td><?= $row['datenew'] ?></td>
                        <td><?= $row['datelate'] ?></td>
                        <td><a href="detail?id=<?php echo $row['id'] ?>"><button class="success">chi tiết</button></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div> 