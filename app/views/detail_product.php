<?php  

   foreach ($detail_product as $key => $value) {
      $name_product = $value['title_product'];
      $name_category_product = $value['title_category_product'];
      $id_cate = $value['id_category_product'];
   }

?>

<section>
   <?php
      foreach ($detail_product as $key => $detail) {

   ?>
   <div class="bg_in">
      <div class="wrapper_all_main">
         <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
            <div class="breadcrumbs">
               <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL ?>">
                     <span itemprop="name">Trang chủ</span></a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL ?>user_product/category/<?php echo $id_cate ?>">
                     <span itemprop="name"><?php echo $name_category_product ?></span></a>
                     <meta itemprop="position" content="2" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <span itemprop="item">
                     <strong itemprop="name">
                        <?php echo $name_product ?>
                     </strong>
                     </span>
                     <meta itemprop="position" content="3" />
                  </li>
               </ol>
            </div>
            <div class="content_page">
               <div class="content-right-items margin0">
                  <div class="title-pro-des-ct">
                     <h1><?php echo $name_product ?></h1>
                  </div>
                  <div class="slider-galery ">
                     <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                     </div>
                     <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                        
                     </div>
                  </div>
                  <div class="content-des-pro">
                     <div class="content-des-pro_in">
                        <div class="pro-des-sum">
                           <div class="price">
                              <p class="code_skin" style="margin-bottom:10px">
                                 <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                              </p>
                              <div class="status_pro">
                                 <span><b>Trạng thái:</b>  Còn hàng</span>
                              </div>
                              <div class="status_pro"><span><b>Xuất xứ:</b>  Việt Nam</span></div>
                           </div>
                           <div class="color_price">
                              <span class="title_price bg_green">Giá bán</span> <?php echo number_format($detail['price_product'], '0', ',', '.') ; ?> <span>đ</span>.
                              <div class="clear"></div>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="content-pro-des">
                        <div class="content_des">
                           <?php echo $detail['desc_product'] ?>
                        </div>
                     </div>
                     <div class="ct">
                        <div class="number_price">
                           <div class="custom pull-left">
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                              <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                              <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                        </div>
                        <div class="wp_a">
                           <form action="<?php echo BASE_URL ?>cart/addcart" method="POST">
                                <input type ="hidden" value="<?php echo $detail['id_product'] ?>" name ="product_id">
                                <input type ="hidden" value="<?php echo $detail['title_product'] ?>" name ="product_title">
                                <input type ="hidden" value="<?php echo $detail['image_product'] ?>" name ="product_image">
                                <input type ="hidden" value="<?php echo $detail['price_product'] ?>" name ="product_price">
                                <input type ="hidden" value="1" name ="product_quantity">
                              <div class="add_card">
                                    <input type="submit" style="box-shadow:none" class="btn btn-success" name="addcart" value ="Đặt hàng">
                                </div>
                           <div class="clear"></div>
                           </form>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="tags_products prodcut_detail">
                        <div class="tab_link">
                           <h3 class="title_tab_link">TAGS: </h3>
                           <div class="content_tab_link"> <a href="tag/"></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="content-des-pro-suport">
                     <div class="box-setup">
                        <div class="title-setup">
                           <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                        </div>
                        <div class="info-setup">
                           <div class="row-setup">
                              <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                              <p><span style="color:#d50100">0932 023 992</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                           </div>
                        </div>
                     </div>
                     <div class="info-prod prod-price freeship">
                        <span class="title">
                           <p>
                              <!-- <img alt="chuyển hàng miễn phí tại thietbivanphong123.com" src="/data/upload/ship-hang-mien-phi.png" style="height:33px; width:60px" /> --> Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.
                           </p>
                        </span>
                        <span class="row more"><a href="" title="">Xem thêm</a>
                        </span>
                     </div>
                     <div class="bx-contact">
                        <span class="title-cnt">Bạn cần hỗ trợ?</span> 
                        <p>Chat với chúng tôi :</p>
                        <p><img alt="icon skype " src="<?php echo BASE_URL ?>public\images\icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <p><img alt="icon skype " src="<?php echo BASE_URL ?>public\images\icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <p><img alt="icon skype " src="<?php echo BASE_URL ?>public\images\icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <!--<div class="sup-item item1">
                           <div>
                           
                            <span class="title-support">Chat với chúng tôi:</span>
                           
                            <div class="icon-support">
                           
                              <span class="icon-chat">
                           
                              <a href="." target="_blank" title="Chat We">
                           
                                <img src="template/Default/img/skp.png" height="30" style="float:left; margin-right:5px;"/>  Mr.Quang
                           
                              </a></span>
                           
                           
                           
                            </div>
                           
                           </div>
                           
                           </div>
                           
                           <div class="sup-item item2">
                           
                           Góp ý, khiếu nại: (8h00 - 17h30)
                           
                           <span class="sub-item hanoi row"><i class="fa fa-caret-right fa-lg"></i>TP HCM:
                           
                           <span class="phone-number"><a href="tel:0906699 038">090 66 99 038</a></span>
                           
                           </span>
                           
                           <span class="sub-item hcm row"><i class="fa fa-caret-right fa-lg"></i>TP HCM: <span class="phone-number"><a href="tel:0909802038" >0909 80 20 38</a></span></span>
                           
                           </div>
                           
                           <div class="sup-item item3">Email: 
                           
                           <a class="email-text" href="mailto:thietbivanphong.123corp@gmail.com" title="Email hỗ trợ"><font color="#0092db">thietbivanphong.123corp@gmail.com</font></a></div>
                           
                           -->
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
         <div class="wrapper_all_main_right">
            <div class="tabs-animation">
               <div class="bg_in">
                  <div id="nav-anchor"></div>
                  <nav class="nav-tabs">
                     <ul>
                        <li><a href="#productDetail"><i class="fa fa-info-circle" aria-hidden="true"></i> <span class="text-mobile">Chi tiết sản phẩm</span></a></li>
                        <li><a href="#inforProduct"><i class="fa fa-file-text-o" aria-hidden="true"></i><span class="text-mobile"> Thông số kỹ thuật</span></a></li>
                        <li><a href="#Comment"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="text-mobile"> Bình luận</span></a></li>
                     </ul>
                     <div class="name-product">
                        Iphone X
                        <span class="" style="font-size:16px; color:red; padding-left:5px;">1,960,000 VNĐ</span>
                     </div>
                     <div class="ct btn-wp">
                        <div class="wp_a">
                           <a onclick="return giohang(371);" class="view_duan">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                           </a>
                           <a href="tel:090 66 99 038" class="view_duan">
                           <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                           </a>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
            <div class="product_detail_info">
               
            </div>
            <div class="clear"></div>
            
            <div class="clear"></div>
            <div class="dmsub">
               <div class="tags_products desktop">
                  <div class="tab_link">
                     <h3 class="title_tab_link">TAGS: </h3>
                     <div class="content_tab_link"> 
                        <a href="tag/">Mỹ phẩm</a>
                        <a href="tag/">Chăm sóc tóc</a>
                        <a href="tag/">Trang điểm</a>
                        <a href="tag/">Sữa rửa mặt</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="content-brank">
               <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
               </div> -->
            <div class="module_pro_all">
               <div class="box-title">
                  <div class="title-bar">
                     <h3>Sản phẩm liên quan</h3>
                  </div>
               </div>
               <div class="pro_all_gird">
                  <div class="girds_all list_all_other_page ">
                     <?php
                        foreach($related as $key => $relate){
                     ?>
                     <div class="grids">
                        <div class="grids_in">
                           <div class="content">
                              <div class="img-right-pro">
                                 <a href="sanpham.php">
                                 <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $relate['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                 </a>
                                 <div class="content-overlay" onclick="window.location.href ='<?php echo BASE_URL ?>user_product/detail_product/<?php echo $relate['id_product'] ?>'"></div>
                                 <div class="content-details fadeIn-top">
                                 </div>
                              </div>
                              <div class="name-pro-right">
                                 <a href="<?php echo BASE_URL ?>user_product/detail_product/<?php echo $relate['id_product'] ?>">
                                    <h3 class="title_product"><?php echo $relate['title_product'] ?></h3>
                                 </a>
                              </div>
                                 <form action="<?php echo BASE_URL ?>cart/addcart" method="POST">
                                      <input type ="hidden" value="<?php echo $relate['id_product'] ?>" name ="product_id">
                                      <input type ="hidden" value="<?php echo $relate['title_product'] ?>" name ="product_title">
                                      <input type ="hidden" value="<?php echo $relate['image_product'] ?>" name ="product_image">
                                      <input type ="hidden" value="<?php echo $relate['price_product'] ?>" name ="product_price">
                                      <input type ="hidden" value="1" name ="product_quantity">
                                    <div class="add_card">
                                       <input type="submit" style="box-shadow:none" class="btn btn-success" name="addcart" value ="Đặt hàng">
                                   </div>
                                 </form>
                              <div class="price_old_new">
                                 <div class="price">
                                    <span class="news_price"><?php echo number_format($relate['price_product'], '0', ',', '.') . 'Đ'; ?> đ </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                        }
                     ?>
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
         <!--end:left-->
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
<?php } ?>
   <script>
      jQuery(document).ready(function() {
      
      
      
          var div_fixed = jQuery('.product_detail_info').offset().top;
      
          jQuery(window).scroll(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              } else {
      
                  jQuery('.tabs-animation').removeClass('fix_top');
      
              }
      
          });
      
          jQuery(window).load(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              }
      
          });
      
      });
      
   </script>
</section>
