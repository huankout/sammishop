

<section>
    <style type="text/css">
    .title_login {
        margin: 10px 0;
        text-align: center;
        padding: 0;
        font-size: 20px;
    }

    .btn-signup {
        color: white;
        font-size: 20px;
    }
    </style>
    <div class="bg_in">
    
        <form method="POST" action="<?php echo BASE_URL ?>user/authentication_user_login">
        <div class="contact_form">
            
            <div class="contact_right">
            <?php

                if (isset($_GET['msg'])) {
                    $msg = unserialize(urldecode($_GET['msg']));
                    foreach ($msg as $key => $value) {
                        echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
                    }
                }

            ?>
                <h5 class="title_login">Đăng nhập khách hàng</h5>
                <div class="form_contact_in">
                    <div class="box_contact">
                        <form name="frmLogin" >
                            <div class="content-box_contact">
                                <div class="row">
                                    <div class="input">
                                        <label>Tài khoản: <span style="color:red;">*</span></label>
                                        <input type="text" name="username" 
                                            required class="clsip">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="row">
                                    <div class="input">
                                        <label>Mật khẩu: <span style="color:red;">*</span></label>
                                        <input type="password" name="password" 
                                            required class="clsip">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!---row---->
                                <div class="row btnclass">
                                    <div class="input ipmaxn ">
                                        <input type="submit" class="btn-gui" name="login" id="frmSubmit"
                                            value="Đăng nhập">
                                            
                                        <button class="btn-gui"  id="frmSubmit"><a href="<?php echo BASE_URL ?>user/user_sign_up" class="btn-signup">Đăng kí</a></button>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!---row---->
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>