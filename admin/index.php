<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
  include "../model/pdo.php";
  include "header.php";
  // controller
  if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
      case'adddm':


        // kiểm tra xem người dùng có click vào nút add hay không
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
          $tenloai = isset($_POST['tenloai'])?$_POST['tenloai']:"";
          $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')";
          pdo_execute($sql);
          // $thongbao="Thêm mới thành công";
        }
        include "danhmuc/add.php";
        
        break;
      case'listdm':
        $sql = "SELECT * FROM danhmuc ORDER BY name ";
        pdo_query($sql);
        $listdanhmuc=pdo_query($sql);
        include "danhmuc/list.php";
        break;
        case'xoadm';
        if(isset($_GET['id'])&&($_GET['id']>0)){
         $sql="DELETE FROM danhmuc WHERE id=".$_GET['id'];
         $listdanhmuc=pdo_query($sql);
          pdo_execute($sql);
        }
        include "danhmuc/list.php";

    default:
      include "home.php";    
    }
  }else{
    include "home.php";

  }


 
  include "footer.php";
 
?>