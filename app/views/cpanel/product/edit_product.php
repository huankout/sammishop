<?php

	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}

?>

<h2 style="text-align: center;">Cập nhật sản phẩm</h2>
<div class="col-md-6">
	<?php
		foreach ($productbyid as $key => $pro) {
		
	?>
	<form action="<?php echo BASE_URL ?>product/update_product/<?php echo $pro['id_product'] ?>" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="email">Tên sản phẩm:</label>
	    <input type="text" value="<?php echo $pro['title_product'] ?>" name="title_product" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Ảnh sản phẩm:</label>
	    <input type="file"  name="image_product" class="form-control">
	    <p><img src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['image_product']; ?>" height="100" width="100"></p>
	  </div>
	  <div class="form-group">
	    <label for="pwd">Giá sản phẩm:</label>
	    <input type="text" value="<?php echo $pro['price_product'] ?>" name="price_product" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Số lượng sản phẩm:</label>
	    <input type="text" value="<?php echo $pro['quantity_product'] ?>" name="quantity_product" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả sản phẩm:</label>
	    <textarea name="desc_product" style="resize: none;" rows="5"  class="form-control"><?php echo $pro['desc_product'] ?></textarea>
	  </div>
	  <div class="form-group">
	    <label for="pwd">danh mục sản phẩm:</label>
<<<<<<< HEAD
	    <select class="form-control" name="category_product">
	    	<?php foreach ($category as $key => $cate) { ?>
	    		<option <?php if ($pro['id_category_product'] == $cate['id_category_product']) {
	    			echo "selected";
	    		} ?> value="<?php echo $cate['id_category_product']; ?>"><?php echo $cate['title_category_product']; ?></option>
	    	<?php } ?>
=======
	    <select class="form-control" name="category_product" id="category_select">
		<?php foreach ($category as $key => $cate) { ?>
	    		<option value="<?php echo $cate['id_category_product']; ?>"><?php echo $cate['title_category_product']; ?></option>
	    <?php } ?>
>>>>>>> dath
	    	
	    </select>
	  </div>
	  <button type="submit" class="btn btn-default">Cập nhật sản phẩm</button>
<<<<<<< HEAD
	</form>	
	<?php
		}
	?>
</div>
=======
	</form>
	<?php } ?>	
</div>

<script>
  // Lấy giá trị từ PHP và đặt vào biến JavaScript
  var selectedValue = "<?php echo $pro['id_category_product']; ?>";

  // Tìm option có giá trị tương ứng và đặt thuộc tính selected
  var selectElement = document.getElementById("category_select");
  var options = selectElement.options;

  for (var i = 0; i < options.length; i++) {
    if (options[i].value === selectedValue) {
      options[i].selected = true;
      break; // Dừng lại khi đã tìm thấy và đặt giá trị
    }
  }
</script>
>>>>>>> dath
