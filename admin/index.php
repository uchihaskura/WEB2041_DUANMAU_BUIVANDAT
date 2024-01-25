<?php 
  include "../model/pdo.php";
  include "header.php";
  // controller

  if(isset($G_GET['act'])){
    $act = $G_GET['act'];
    switch($act){
      case'adddm':
        include "danhmuc/add.php";
        // kiểm tra xem người dùng có click vào nút add hay khôngì
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
          $tenloai = isset($_POST['tenloai']);
          $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')";
          pdo_execute($sql);
          $thongbao = "Thêm mới thành công";
        }
          
        
        
        break;
      case'addsp':
        include "sanpham/add.php";
        break;
    default:
      include "home.php";    
    }
  }else{
    include "home.php";

  }


 
  include "footer.php";
 
?>