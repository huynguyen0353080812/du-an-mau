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
                    <th>user</th>
                    <th>content</th>
                    <th>date</th>
                    <th>Xóa</th>
                </tr>
                <?php foreach ($result as $row):?>
                    <tr>
                        <td>1</td>
                        <td><?= $row['user_name'] ?></td>
                        <td><?= $row['text'] ?></td>
                        <td><?= $row['created_time'] ?></td>
                        <td><a href="deletecomment?id=<?php echo $row['id'] ?>"><button class="bnt_delete">xóa</button></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div> 