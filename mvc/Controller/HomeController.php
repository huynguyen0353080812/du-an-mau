<?php
require_once('mvc/Model/database.php');
require_once('CategoryController.php');
require_once('mvc/Model/Base.php'); 
session_start();
class HomeController extends CategoryController{
    private $category;
    public function index($erros = '',$info = ''){
        $products = new databse();
        $category = new CategoryController();
        $rows = $products->database();
        try {
            $sql = "SELECT* FROM prodcts_sale LIMIT 5";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $sql1 = "SELECT* FROM prodcts_sale LIMIT 10";
            $stmt1 = $rows->prepare($sql1);
            $stmt1->execute();
            $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            $sql2 = "SELECT* FROM prodcts_sale WHERE `products_name` LIKE '%phụ kiện%' LIMIT 5";
            $stmt2 = $rows->prepare($sql2);
            $stmt2->execute();
            $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            $sql3 = "SELECT * FROM `prodcts_sale` WHERE `products_name` LIKE '%phu kien%' LIMIT 5";
            $stmt3 = $rows->prepare($sql3);
            $stmt3->execute();
            $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo "Lỗi: " . $e->getMessage();    
        }
        $category = $category->category();
        include ('mvc/view/client/component/index.php');
    }
    public function product_details(){
        $products = new databse();
        $rows = $products->database();
        $id = $_GET['id'];
        $category = $this->category;
        $sql = "SELECT * FROM prodcts_sale WHERE id = $id";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        try {
            $sql = "SELECT * FROM prodcts_sale WHERE id = $id";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // 
            $sql = "SELECT * FROM image_library WHERE products_id = $id";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $image_library = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $id = 1;
            $id_img = 1;
            // 
            $id_get = $_GET['id'];
            $sql = "SELECT comment.user_id,comment.id,manage_user.image,manage_user.user_name,comment.text,comment.created_time FROM `comment` INNER JOIN manage_user ON comment.user_id = manage_user.id WHERE comment.products_id = $id_get";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $comment = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($comment);
            // die;
            include ('mvc/view/client/component/product_details.php');
        } catch (\Throwable $th) {
            echo "Lỗi: " . $e->getMessage();    
        }
    }
    public function login()
    {
        extract($_POST);
        if ($bnt) {
            $products = new databse();
            $rows = $products->database();
            $sql = "SELECT * FROM `manage_user` WHERE user_name= '".$Email."'";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // var_dump($result);
            if ($result) {
               if (password_verify($Password,$result['password'])) {
                   if ($result['status'] == 'on') {
                        $_SESSION['user_name'] = $result;
                        $info = $_SESSION['user_name'];
                        return $this->index('',$info);
                            // if ($result['role']==1) {
                            //     $_SESSION['user_name'] = $result;
                            //     $info = $_SESSION['user_name'];
                            //     return header("location:Dashboard");
                            // }else{
                            //     $_SESSION['user_name'] = $result;
                            //     $info = $_SESSION['user_name'];
                            //     return $this->index('',$info);
                            // }
                   }else {
                    return $this->index($erros = 'Tài Khoản Chưa Kích Hoạt!');
                   }
               }else {
                    return $this->index($erros = 'Password Không Tồn Tại!');
               }
            }else{
                return $this->index($erros = 'Email không Tồn Tại!');
            }
        }
    }
    public function delete()
    {
        unset($_SESSION['user_name']);
        header("Location:/");
    }
    public function search()
    {
            $keyword = $_GET['keyword'];
            $products = new databse();
            $rows = $products->database();
            $sql = "SELECT * FROM `prodcts_sale` WHERE `products_name` LIKE '%$keyword%'";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            include ('mvc/view/client/component/search.php');
        
    }
    public function categoryshow()
    {
        include ('mvc/view/client/component/category.php');
    }
    public function contac()
    {
        include ('mvc/view/client/component/contac.php');
    }
    public function bill()
    {
        if (empty($_SESSION['Cart'])) {
            
        }
        include ('mvc/view/client/component/hoadon.php');
    }
    public function order()
    {
            extract($_POST);
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date_create();
            $products = new databse();
            $rows = $products->database();
            $sql = "INSERT INTO orders SET name = '$adress_user',phone=$number_phone,address = '$adress_user'";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $id = $rows->lastInsertId();
            foreach ($_SESSION['Cart'] as $key => $value) {
                $sql1 = "INSERT INTO orders_detail SET order_id = $id,produrt_id = ".$value['id'].",quantity=".$value['quantity']."";
                $stmt1 = $rows->prepare($sql1);
                $stmt1->execute();
            }
            unset($_SESSION['Cart']);
    }
    public function registration()
    {
        include ('mvc/view/client/component/registration.php');
    }
    public function registration_acount(Type $var = null)
    {
        extract($_POST);  
        $products = new databse();
        $rows = $products->database();  
        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO manage_user SET user_name='$user_name',number_phone='$number_phone',email = '$email',password = '$password',status='off',role='0',last_login =0";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        header('location:http://huynguyen12345.byethost7.com/');
        // $customer = new Base();
        // $result = $customer->insert('manage_user',["user_name='$user_name',number_phone='$number_phone',email = '$email',password = '$password',status='off',role='0'"]);
    }
    public function DeleteComment()
    {
        $id = $_GET['id'];
        $products = new databse();
        $rows = $products->database();
        $sql = "DELETE FROM comment WHERE id = $id";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        return header('location:product_details?id=49#menu_2');
    }
}
?>
