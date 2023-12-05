<h2 style="text-align: center;">Liệt kê đơn hàng</h2>
<?php

if (isset($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }



?>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach ($order as $key => $ord) {
        $i++;
      ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $ord['order_code']; ?></td>
        <td><?php echo $ord['order_date']; ?></td>
        <td><?php if($ord['order_status']) echo '<span style="color:red">','đã xử lý','</span>'; else echo 'đơn hàng mới'; ?></td>
        <td><a href="<?php echo BASE_URL; ?>order/order_details/<?php echo $ord['order_code'] ?>">Xem đơn hàng</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>