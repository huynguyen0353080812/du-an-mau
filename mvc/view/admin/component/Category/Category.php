<?php require_once('mvc/view/admin/index.php'); ?>
<!-- <link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/admin2.css"> -->
<div class="main">
<?php include_once('mvc/view/admin/component/search.php'); ?>
    <div class="details_customer">
        <div class="recentoder">
            <div class="carheader">
            </div>
            <a href="Created" class = "created"><button class="success">Thêm Danh Mục</button></a>
            <table>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
                <?php foreach ($result as $row):?>
                    <tr>
                        <td>1</td>
                        <td><?= $row['name'] ?></td>
                        <td><a href="delete_category?id=<?php echo $row['id'] ?>"><button class="bnt_delete">xóa</button></a></td>
                        <td><a href="edit_category?id=<?php echo $row['id'] ?>"><button class="bnt_edit">sửa</button></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div> 