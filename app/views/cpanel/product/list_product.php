<?php

  if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }

?>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>public\template\css\list_product.css">
<h2 style="text-align: center;">Liệt kê sản phẩm</h2>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Danh mục</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <!-- <th>Mô tả</th> -->
        <th>Sản phẩm hot</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach ($product as $key => $pro) {
        $i++;
      ?>
      <tr>
        <td><div class="col1"><?php echo $i; ?></div></td>
        <td><div class="col2"><?php echo $pro['title_product']; ?></div></td>
        <td><div class="col3"><img src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['image_product']; ?>" height="100" width="100"></div></td>
        <td><div class="col4"><?php echo $pro['title_category_product']; ?></div></td>
        <td><div class="col5"><?php echo number_format($pro['price_product'], '0', ',', '.') . 'Đ'; ?></div></td>
        <td><div class="col6"><?php echo $pro['quantity_product']; ?></div></td>
        <!-- <td><div class="col7"><textarea class="text7"> echo $pro['desc_product']; ?></textarea></div></td> -->
        
        <td>
          <?php if ($pro['product_hot'] == 0) {
                  echo 'Không';
          }else {
                  echo 'Có';
          } 
          ?>
        </td>
        <td><div class="col8"><a href="<?php echo BASE_URL ?>product/delete_product/<?php echo $pro['id_product'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>product/edit_product/<?php echo $pro['id_product'] ?>">Cập nhật</a></tr></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>