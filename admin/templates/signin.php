<section class="container myLoginDN bg-light">
        <h2 class="text-center">Đăng Nhập</h2>
        <div class="row">
            <div class="col-6 m-auto">
                <form action="dangnhap.php" method="POST">
                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="email" class="form-control" id="txtEmail" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="txtMatKhau">Mật Khẩu</label>
                        <input type="password" class="form-control" id="txtMatKhau" name="matkhau" aria-describedby="emailHelp"
                            placeholder="Mật Khẩu">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ tái khoản</label>
                    </div>
                    <button type="submit" class="btn btn-danger mr-auto ml-auto">Đăng Nhập</button>
                </form>
            </div>
        </div>

    </section>