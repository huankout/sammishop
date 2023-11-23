<?php

  if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }

?>
<h2 style="text-align: center;">Liệt kê sản phẩm</h2>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng sản phẩm</th>
        <th>Mô tả</th>
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
        <td><?php echo $i; ?></td>
        <td><?php echo $pro['title_product']; ?></td>
        <td><?php echo $pro['image_product']; ?></td>
        <td><?php echo $pro['price_product']; ?></td>
        <td><?php echo $pro['quantity_product']; ?></td>
        <td><?php echo $pro['desc_product']; ?></td>
        
        <td><a href="<?php echo BASE_URL ?>product/delete_product/<?php echo $pro['id_product'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>product/edit_product/<?php echo $pro['id_product'] ?>">Cập nhật</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>