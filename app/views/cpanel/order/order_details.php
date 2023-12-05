    <h2 style="text-align: center;">Liệt kê đơn hàng chi tiết</h2>

<table class="table table-striped">
    <thead>
        <tr>
        <th>ID</th>
        <th>Tên người đặt</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
      </tr>
      <tr>
        <?php
            foreach ($order_info as $key => $ord) {
        ?>
        <td></td>
        <td><?php echo $ord['name']; ?></td>
        <td><?php echo $ord['phone']; ?></td>
        <td><?php echo $ord['email']; ?></td>
        <td><?php echo $ord['address']; ?></td>
        <?php
            }
        ?>
      </tr>
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      $total = 0;
      foreach ($order_details as $key => $ord) {
        $total += $ord['price_product']*$ord['product_quantity'];
        $i++;
      ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $ord['title_product']; ?></td>
        <td><img src= "<?php echo BASE_URL ?>public/images/<?php echo $ord['image_product'] ?>" alt="nhìn cái chó gì" /></td>
        <td><?php echo $ord['product_quantity']; ?></td>
        <td><?php echo number_format($ord['price_product'], '0', ',', '.') . ' đ'; ?></td>
        <td><?php echo number_format($ord['price_product']*$ord['product_quantity'], '0', ',', '.') . ' đ'; ?></td>
      </tr>
      <?php } ?>
        <form method="POST" action="<?php echo BASE_URL ?>order/order_confirm/<?php echo $ord['order_code'] ?>">
            <tr>
                <td><input type="submit" name="update_order" value="Đã xử lý" class="btn btn-default"></td>
                <td align="right" colspan="6" style="color:red">Tổng tiền: <?php echo number_format($total, '0', ',', '.') . ' đ'; ?></td>
            </tr>
        </form>
    </tbody>
  </table>