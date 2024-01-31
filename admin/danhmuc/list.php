<div class="row">
        <div class="row frmtitle">
            <h1>Danh Sách Loại Hàng</h1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10">
              <input type="text" placeholder="Nhập Tên Loại Hàng">
              <input type="button" value="Tìm Kiếm">
            </div>
           <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=.$id.";
                    $xoadm="index.php?act=xoadm&id=.$id.";
                    echo'<tr>
                    <td><input type="checkbox"></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadm.'"></a><input type="button" value="Sửa"></a> <a herf="'.$xoadm.'"></a><input type="button" value="Xóa"></a></td>
                </tr>';
                    # code...
                }
                ?>
            </table>
           </div>
           <div class="row mb10">
            <input type="button" value="Chọn Tất Cả">
            <input type="button" value="Bỏ Chọn Tất Cả">
            <input type="button" value="Xóa Các Mục Đã Chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
           </div>
            
        </div>
      </div>