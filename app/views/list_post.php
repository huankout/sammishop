<section>
         <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right">
                  <!--breadcrumbs-->
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
                  <!--breadcrumbs-->
                  <div class="content_page">
                     <div class="box-title">
                        <div class="title-bar">
                           <h1>Tất cả tin tức</h1>
                        </div>
                     </div>
                     <div class="content_text">
                        <ul class="list_ul">
                           <?php
                              foreach($list_post as $key => $post){
                           ?>
                           <li class="lists">
                              <div class="img-list">
                                 <a href="<?php echo BASE_URL ?>news/news_detail/12">
                                 <img src="<?php echo BASE_URL ?>public/uploads/post/<?php echo $post['image_post'] ?>" alt="<?php echo $post['title_post'] ?>" class="img-list-in">
                                 </a>
                              </div>
                              <div class="content-list">
                                 <div class="content-list_inm">
                                    <div class="title-list">
                                       <h3>
                                          <a href="<?php echo BASE_URL ?>news/news_detail/<?php echo $post['id_post'] ?>"><?php echo $post['title_post'] ?></a>
                                       </h3>
                                       <p class="list-news-status-p">
                                          <a title="Thiết bị văn phòng">Thiết bị văn phòng</a> | <a title="26-12-2017" >26-12-2017</a>
                                       </p>
                                    </div>
                                    <div class="content-list-in">
                                       <p><span style="font-size:16px">Với lĩnh vực máy chiếu, hầu như các dòng sản phẩm máy chiếu trên thị trường sử dụng một trong hai công nghệ hiển thị hình ảnh phổ biến là công nghệ 3LCD và công nghệ DLP. Hiện nay, trong số các sản phẩm máy chiếu laser được sử dụng để trình chiếu dữ liệu thì duy chỉ có hãng <strong><a href="https://thietbivanphong123.com/san-pham/may-chieu-sony-c86.html" style="color:#000;text-decoration:none;">máy chiếu Sony</a></strong> sử dụng công nghệ hiển thị 3LCD còn các hãng khác như NEC, Optoma, Panasonic lại sử dụng công nghệ DLP.</span></p>
                                    </div>
                                    <div class="xt"><a href="tin-tuc/so-sanh-cong-nghe-hien-thi-3lcd-va-dlp-425.html">Xem thêm</a></div>
                                 </div>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <?php
                              }
                           ?>
                        </ul>
                        <div class="clear"></div>
                        <div class="wp_page">
                           <div class="page">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
      </section>