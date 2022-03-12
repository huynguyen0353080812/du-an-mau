<?php
    require_once('mvc/Model/Base.php'); 
    class CommentController{
        public function index()
        {
            $customer = new Base();
            $result = $customer->Group(['prodcts_sale.products_name,prodcts_sale.image,prodcts_sale.id, COUNT(*) AS SOLUONG,MAX(comment.created_time) AS datenew,MIN(comment.created_time) AS datelate'],'comment',);
            $i = 1;
            // var_dump($result);
            // die;
            // $sql = "SELECT manage_user.image,manage_user.user_name,MIN(comment.created_time) AS date FROM `comment` INNER JOIN manage_user ON comment.user_id = manage_user.id WHERE comment.products_id = 50;";
            // $stmt = $this->conn->prepare($sql);
            // $stmt->execute();
            // $date_lated = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // $sql = "SELECT MAX(comment.created_time) AS date FROM `comment` INNER JOIN manage_user ON comment.user_id = manage_user.id WHERE comment.products_id = 50;";
            // $stmt = $this->conn->prepare($sql);
            // $stmt->execute();
            // $data_new = $stmt->fetchAll(PDO::FETCH_ASSOC);
            include ('mvc/view/admin/component/Comment/Comment.php'); 
        }
        public function detail()
        {
            $i = 1;
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->Group2($id);
            include ('mvc/view/admin/component/Comment/DetailComment.php'); 
        }
        public function delete()
        {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('comment',$id);
            return header("location:Comment");
        }
        public function inser_comment()
        {
            extract($_POST);
            if (!$textarea == "") {
                $customer = new Base();
                $result = $customer->insert('comment',["products_id='$products_id',user_id='$user_id',text='$textarea'"]);
                echo 'thanh công';   
            }else {
                echo 'không thanh công';
            }
        }
    }