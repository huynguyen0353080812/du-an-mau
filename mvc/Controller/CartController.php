<?php
    require_once('mvc/Model/Base.php'); 
    require_once('CategoryController.php');
    class CartController{
        private $Cart = [];
        private $Cart_total;
        private $id;
        private $customer;
        private $category;
        public function __construct(){
            $category = new CategoryController();
            $this->category = $category->category();
            $this->customer = new Base();
            if (isset($_SESSION['Cart'])) {
                $this->Cart = $_SESSION['Cart'];
            }else{
                $this->Cart = $_SESSION['Cart']=[];
            }
            foreach ($this->Cart as $key => $value) {
               $this->Cart_total +=$value['quantity']*$value['price'];
            }
        }
        public function add(){
            $id = $_GET['id'];
            $products = $this->customer->find('prodcts_sale',$id);
            $Cart = [
                'id'=> $products['id'],
                'image'=> $products['image'],
                'products_name'=> $products['products_name'],
                'price' => $products['price'],
                'quantity' => $quantity = 1
            ];
            if (array_key_exists($products['id'],$this->Cart) && isset($_GET['sss'])) {
                $this->Cart[$products['id']]['quantity'] += $quantity;
                $this->Cart[$products['id']]['total'] = $price*$quantity;
            }elseif (array_key_exists($products['id'],$this->Cart) && isset($_GET['type'])) {

                if ($_SESSION['Cart'] == []) {
                    $this->Cart[$products['id']]['quantity'] += $quantity;
                }else {
                    $this->Cart[$products['id']]['quantity'] += $_GET['quantity'];
                }
            }else{
                $this->Cart[$products['id']] = $Cart;
            }
            $_SESSION['Cart'] = $this->Cart;
            var_dump($_SESSION['Cart']);
            die;
        }
        public function remove(){
            $id = $_GET['id'];
           if (isset($_SESSION['Cart']["$id"])) {
               unset($_SESSION['Cart']["$id"]);
           }
        }
        public function update(){
            $id = $_GET['id'];
            $this->Cart[$id]['quantity'] = $_GET['quantity'];
            $_SESSION['Cart'] = $this->Cart;
        }
        public function clear(){
            return session(['Cart'=>[]]);
        }
        public function showcart()
        {
            $this->category;
            include('mvc/view/client/component/Cart.php');
        }
        public function showquantity()
        {
            $car = count($_SESSION['Cart']);
            $cartquantity = '';
            $cartquantity.='<span class="quantity">'.$car.'</span>
                            <a href="showcart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                            <p>Giỏ Hàng</p>';
            echo $cartquantity;
        }
        public function sssss(Type $var = null)
        {   
            if ($this->Cart_total>0) {
                echo $this->Cart_total;
            }else {
                echo $this->Cart_total = 0;
            }
        }
        public function test()
        {
            if (isset($_SESSION['user_name'])) {
                var_dump($_SESSION['user_name']);   
            }else{
                
                echo '';
            }
        }
     }
