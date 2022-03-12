<?php
require_once('mvc/Model/database.php');
class CategoryController{
    public function category(){
        $category_data = new databse();
        $rows = $category_data->database();
        $sql = "SELECT* FROM categories";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);  
        $html='';
        function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
            global $html;
            foreach($arr as $data){
                if($parent==$data['parent_id']){
                    if($level>$prelevel){
                        if($html==''){
                            $html.='<ul class="the">';
                        }else{
                            $html.='<div class="dropdown"><ul>';
                        } 
                    }
                    if($level==$prelevel){
                        $html.='</li>';
                    }
                    $html.='<li class="dropdow-link"><a href="search?keyword='.$data['slug'].'">'.$data['name'].'</a>';
                    if($level>$prelevel){
                        $prelevel=$level;
                    }
                    $level++;
                    buildTreeView($arr,$data['id'],$level,$prelevel);
                    $level--;
                    // die;
                }
            }
            if($level==$prelevel){
                $html.='</li></ul>';
            }
            return $html;
        }
        $this->category = buildTreeView($data,0);
        return $this->category;
    }
}