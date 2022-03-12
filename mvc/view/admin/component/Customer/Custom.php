<?php require_once('mvc/view/admin/index.php'); ?>
<!-- <link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/admin2.css"> -->
<div class="main">
<?php include_once('mvc/view/admin/component/search.php'); ?>
    <div class="details_customer">
        <div class="recentoder">
            <div class="carheader">
            </div>
            <i class="fa-solid fa-hexagon-plus"></i>
            <a href="insert_acount"><button type="button" class="success">Thêm tài khoản</button></a>
            <table>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>avatar</th>
                    <th>status </th>
                    <th>trạng thái</th>
                    <th>Vai trò </th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
                <tbody id="user_grid">
                    <?php foreach ($result as $row):?>
                        <tr>
                            <td>1</td>
                            <td><?= $row['email'] ?></td>
                            <td>
                                <div class="user" style = "margin-left:60px">
                                    <img src="http://localhost:81/Duanmau/public/img/<?= $row['image'] ?>" class="user_image">
                                </div>
                            </td>
                            <td>
                                <?php 
                                    $timestamep = time();
                                     if ($row['last_login']>$timestamep) {
                                        $status = 'green';
                                    }else {
                                        $status = 'red';
                                    }
                                ?>
                                <i class="fa fa-circle" aria-hidden="true" style = "color:<?php echo $status?>"></i>
                            </td>
                            <td><?= $row['status'] ?></td>
                            <td>
                                <?php   
                                    if ($row['role']==1) {
                                        echo $vai_tro = 'quản trị viên';
                                    }else {
                                        echo $vai_tro = 'khách hàng';
                                    } 
                                ?>
                            </td>
                            <td><a href="delete_custom?id=<?php echo $row['id'] ?>"><button class="bnt_delete">xóa</button></a></td>
                            <td><a href="edit_custom?id=<?php echo $row['id'] ?>"><button class="bnt_edit">sửa</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<?php if (isset($_SESSION['user_name'])): ?>
        <script type="text/javascript" >
            // $(document).ready(function () {
                
            // });
            function updatetime() {
                jQuery.ajax({
				url:'update_user_status',
                    success:function(){
                    }
			    });
            }
            function show_user_status() {
                jQuery.ajax({
				url:'show_user_status',
                    success:function(result){
                        jQuery('#user_grid').html(result);
                    }
			    });
            }
            setInterval(function(){
			    updatetime();
		    },3000);
            show_user_status();
            setInterval(function(){
			    show_user_status();
		    },3500);
        </script>
<?php endif; ?>