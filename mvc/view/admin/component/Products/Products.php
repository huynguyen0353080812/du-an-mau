<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
<?php include_once('mvc/view/admin/component/search.php'); ?>
<?php 
    if (isset($messgae)) {
        echo 'huynuygen';
    }
?>
    <div class="details_customer">
        <div class="recentoder">
            <div class="carheader">
            </div>
            <a href="insert_products"><button class="success">Thêm Sản Phẩm</button></a>
            <table>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>avatar</th>
                    <th>price </th>
                    <th>discount</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
                <?php foreach ($result as $row):?>
                    <tr>
                        <input type="hidden" class="id_products" value="<?php echo $row['id'] ?>">
                        <td>1</td>
                        <td><?= $row['products_name'] ?></td>
                        <td><img src="http://localhost:81/Duanmau/public/img/<?= $row['image'] ?>" style ="width:100px"></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['discount'] ?></td>
                        <td><button class="bnt_delete"  data-id="<?php echo $row['id']?>">xóa</button></td>
                        <td><a href="edit_product?id=<?php echo $row['id'] ?>"><button class="bnt_edit">sửa</button></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
                <?php if ($current_page > 3):?>
                    <a href="?per_page=<?php echo $item_perpage ?>&page=1"><i class="fas fa-angle-double-left"></i></a>
                <?php endif; ?>
                <div id="countpage">
                    <?php for($i=1; $i <= $countotal; $i++):?>
                        <?php if ($i != $current_page): ?>
                            <?php if ($i > $current_page - 3 && $i < $current_page + 3) : ?>
                                <!-- lấy ra số lượng bản thỏa mãn điều kiện trên -->
                                <a class = "count" href="?per_page=<?php echo $item_perpage ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
                                <?php endif; ?>
                        <?php else: ?>
                            <strong><?php echo $i ?></strong>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($current_page < $countotal - 3):?>
                        <a href="?per_page=<?php echo $item_perpage ?>&page=<?php echo $countotal ?>"><i class="fas fa-angle-double-right"></i></a>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</div> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
            $(document).ready(function () {
                $('.bnt_delete').on('click',function () {
                    var id = $(this).data('id');
                    Swal.fire({
                        title: 'Bạn có chắc chắn không?',
                        text: "Điều này Là Mất Vĩnh Viễn Dữ Liệu!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "delete_product",
                                method:"GET",
                                data:{
                                    id:id,
                                },  
                                success:function(data) {
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                        ) 
                                    setTimeout(function (params) { 
                                        location.reload(); 
                                    }, 1700)
                                  
                                }
                            });
                        }
                    })
                })
            });
        </script>