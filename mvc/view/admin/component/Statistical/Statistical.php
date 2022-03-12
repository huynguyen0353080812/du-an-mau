<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
        <?php include_once('mvc/view/admin/component/search.php'); ?>
        <div class="details_customer">
        <div class="recentoder">
            <div class="carheader">
            </div>
            <a href="chart"><button>xem chart</button></a>
            <table>
                <tr>
                    <th>#</th>
                    <th>Loại Hàng</th>
                    <th>Sô Lượng</th>
                    <th>Gía Cao Nhất</th>
                    <th>Gía Thấp Nhất</th>
                    <th>Gía Trung Bình</th>
                </tr>
                <!-- SELECT categories.name,COUNT(*) AS SOLUONG FROM `prodcts_sale` JOIN categories on prodcts_sale.categories_id = categories.id GROUP BY categories.name -->
                <?php foreach ($result as $row):?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['SOLUONG'] ?></td>
                        <td><?php echo $row['gíacao'] ?></td>
                        <td><?php echo $row['giánhỏ'] ?></td>
                        <td><?php echo $row['TRUNGBINH'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>