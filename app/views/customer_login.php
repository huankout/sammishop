<section>
    <style type="text/css">
    .title_login {
        margin: 10px 0;
        text-align: center;
        padding: 0;
        font-size: 20px;
    }

    .title_sign_up {
        margin: 10px 0;
        text-align: center;
        padding: 0;
        font-size: 20px;
    }
    </style>
    <div class="bg_in">
        <div class="contact_form">
            <div class="contact_left">
                <h5 class="title_sign_up">Đăng kí khách hàng</h5>
                <div class="form_contact_in">
                    <div class="box_contact">
                        <form name="FormDatHang" method="post" action="gio-hang/">
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
                                        <input type="text" name="txtDienThoai" required
                                            onkeydown="return checkIt(event)" class="clsip">
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
                                        <input type="text" name="txtEmail" onchange="return KiemTraEmail(this);"
                                            required class="clsip">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!---row---->
                                <div class="row">
                                    <div class="input">
                                        <label>Nội dung: <span style="color:red;">*</span></label>
                                        <textarea type="text" name="txtNoiDung" class="clsipa"></textarea>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!---row---->
                                <div class="row btnclass">
                                    <div class="input ipmaxn ">
                                        <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit"
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
            <div class="contact_right">
                <h5 class="title_login">Đăng nhập khách hàng</h5>
                <div class="form_contact_in">
                    <div class="box_contact">
                        <form name="FormDatHang" method="post" action="gio-hang/">
                            <div class="content-box_contact">
                                <div class="row">
                                    <div class="input">
                                        <label>Tài khoản: <span style="color:red;">*</span></label>
                                        <input type="text" name="txtUsername" onchange="return KiemTraEmail(this);"
                                            required class="clsip">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="row">
                                    <div class="input">
                                        <label>Mật khẩu: <span style="color:red;">*</span></label>
                                        <input type="password" name="txtPassword" onchange="return KiemTraEmail(this);"
                                            required class="clsip">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!---row---->
                                <div class="row btnclass">
                                    <div class="input ipmaxn ">
                                        <input type="submit" class="btn-gui" name="login" id="frmSubmit"
                                            value="Đăng nhập">
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