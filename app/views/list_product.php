<section>
   <div class="bg_in">
   <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href=".">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           Tất cả tin tức
                           </strong>  
                           </span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
                  </div>
   <div class="module_pro_all">
      <div class="box-title">
         <div class="title-bar">
            <h1>Tất cả sản phẩm</h1>

         </div>
      </div>
      <div class="pro_all_gird">
         <div class="girds_all list_all_other_page ">
            <?php
                foreach($list_product as $key => $product){
            ?>
            <div class="grids">
               <div class="grids_in">
                  <div class="content">
                     <div class="img-right-pro">
                        <a href="sanpham.php">
                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/images/<?php echo $product['image_product'] ?>" data-original="<?php echo BASE_URL?>public/images/<?php echo $product['image_product'] ?>" alt="nhìn cái chó gì" />
                        </a>
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                           <ul class="details-product-overlay">
                              <?php
                                 echo $product['desc_product']
                              ?>
                           </ul>
                        </div>
                     </div>
                     <div class="name-pro-right">
                        <a href="<?php echo BASE_URL ?>index/detail_product/18">
                           <h3><?php echo $product['title_product'] ?></h3>
                        </a>
                     </div>
                     <div class="add_card">
                        <a onclick="return giohang(579);">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                        </a>
                     </div>
                     <div class="price_old_new">
                        <div class="price">
                           <span class="news_price"><?php echo number_format($product['price_product'],0,'','.') ?> đ </span>
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
</section>
