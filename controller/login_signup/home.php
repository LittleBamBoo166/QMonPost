<?php
include('view/header.php');?>
<div class="modal" id="loginModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title fw-bold">Đăng nhập</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="." method="POST" class="row g-3 m-auto">
                        <input type="hidden" name="action" value="log_in">
                        <div class="col-12">
                            <label for="username" class="form-label">Số điện thoại</label>
                            <input type="text" oninput="checkValidateLoginUserName()" class="form-control" id="username" placeholder="Nhập số điện thoại" name="log_number">
                        </div>
                        <div class="col-12">
                            <label for="pwd" class="form-label">Mật khẩu</label>
                            <input type="password" oninput="checkValidateLoginUserPass()" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="log_pass">
                        </div>
                        <div class="col-6">
                            <button class="btn" id="loginBtn" type="submit" disabled>Đăng nhập</button>
                        </div>
                        <div class="col-6 form-check">
                            <label class="form-check-label float-end">
                                <input class="form-check-input" type="checkbox" name="remember"> Nhớ mật khẩu
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row m-auto">
                        <div class="col-md-6">
                            <p id="errorLoginMessage"></p>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn float-end" data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign up modal -->
<div class="modal" id="signupModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title fw-bold">Đăng ký</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="." method="POST" class="row g-3 m-auto" style="width: 700px;">
                        <input type="hidden" name="action" value="sign_up">
                        <div class="col-md-12">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nguyễn Văn A" required>
                        </div>
                        <div class="col-md-4">
                            <label for="province" class="form-label">Tỉnh / Thành phố</label>
                            <select class="form-select" name="province" required id="province" onchange="get_district_by_province(this)">
                                <option>Chọn tỉnh / thành phố</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="district" class="form-label">Quận / Huyện</label>
                            <select class="form-select" id="district" name="district" onchange="get_town_by_district(this)" required>
                                <option value="">Chọn quận / huyện</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="town" class="form-label">Xã / Phường</label>
                            <select class="form-select" id="town" name="town" required>
                                <option value="">Chọn xã / phường</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Số 02 Đường 05" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phonenumber" class="form-label">Số điện thoại</label>
                            <input type="tel" name="phonenumber" pattern="[0-9]{10}" class="form-control" id="address" placeholder="0395902941" required>
                        </div>
                        <div class="col-md-6">
                            <label for="pass" class="form-label">Mật khẩu</label>
                            <input name="pass" type="password" class="form-control" id="pass" required>
                        </div>
                        <div class="col-md-6">
                            <label for="repass" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="repass" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Tôi đồng ý với các điều khoản sử dụng
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-signup" id="signupBtn" type="submit">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row m-auto">
                        <div class="col-md-6"><p id="errorSignupMessage"></p></div>
                        <div class="col-md-6">
                            <button type="button" class="btn float-end" data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('view/home_view.php'); ?>
<script src="styles/js/listoption.js"></script>
<script src="styles/js/checkValidate.js"></script>
<?php
include('view/footer.php');
?>