<?php include_once('mvc/view/client/component/Cart.php'); ?>
<table id="text">
    <tr border=1>
        <th>stt</th>
        <th>tên sản phẩm</th>
        <th>số lượng</th>
        <th>xóa</th>
        <th>update</th>
    </tr>
    <?php foreach ($ss as $key => $value):?>
    <tr>
        <td></td>
        <td><?php echo $value['products_name']; ?></td>
        <td><input type="number" value = "<?php echo $value['quantity'] ?>" class="quantity" id = "quantity"></td>
        <td><button class = "bnt_delete" data-id="<?php echo $value['id']; ?>">xóa</button></td>
        <td><button class = "bnt_update" data-id="<?php echo $value['id']; ?>">update</button></td>
    </tr>
    <?php endforeach; ?>
</table>