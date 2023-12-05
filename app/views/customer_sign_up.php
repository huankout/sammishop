<?php

	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}

?>

<section>
    <style type="text/css">
    .title_sign_up {
        margin: 10px 0;
        text-align: center;
        padding: 0;
        font-size: 20px;
    }
    .btn-gui{
        text-align: center;
    }
    </style>
    <div class="bg_in">
        <div class="contact_form">
            
                <div class="contact_left">
                    <h5 class="title_sign_up">Đăng kí khách hàng</h5>
                    <div class="form_contact_in">
                        <div class="box_contact">
                            <form name="frmSignup" method="POST" action="<?php echo BASE_URL ?>user/add_user">
                                <div class="content-box_contact">
                                    <div class="row">
                                        <div class="input">
                                            <label>Họ và tên: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtHoTen" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Số điện thoại: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtDienThoai" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Địa chỉ: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtDiaChi" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Email: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtEmail" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="input">
                                            <label>Mật khẩu: <span style="color:red;">*</span></label>
                                            <input type="password" name="txtPassword" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row btnclass">
                                        <div class="input ipmaxn ">
                                            <input type="submit" class="btn-gui" name="sign_up" id="frmSubmit"
                                                value="Đăng kí">
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
    </div>
</section>