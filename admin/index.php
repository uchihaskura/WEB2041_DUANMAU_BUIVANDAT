<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include "../model/pdo.php";
include "../model/danhmuc.php";
include "header.php";
// controller
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'adddm':


      // kiểm tra xem người dùng có click vào nút add hay không
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $tenloai = isset($_POST['tenloai']) ? $_POST['tenloai'] : "";
        insert_danhmuc($tenloai);
        // $thongbao="Thêm mới thành công";
      }
      include "danhmuc/add.php";

      break;
    case 'listdm':
      $listdanhmuc = loadall_danhmuc();
      include "danhmuc/list.php";
      break;
    case 'xoadm';
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_danhmuc($_GET['id']);
      }
      $listdanhmuc = loadall_danhmuc();
      include "danhmuc/list.php";
      break;
    case 'suadm';
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
      $dm= loadone_danhmuc($_GET['id']);
    }
  
    include "danhmuc/update.php";
    break;
    case 'updatedm';
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
      $tenloai =$_POST['tenloai'];
      $id = $_POST['id'];
      update_danhmuc($id, $tenloai);
      $thongbao="Cập nhật thành công";
    }
    $listdanhmuc = loadall_danhmuc();

    default:
      include "home.php";
  }
} else {
  include "home.php";

}



include "footer.php";

?>