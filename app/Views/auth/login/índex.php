<div id="wrapper" class="auth-main">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="javascript:void(0);">
                        <img src="/assets/img/logo-white.png" width="100" height="100" class="d-inline-block align-top mr-2" alt="">
                        <h1 class="mt-2">Toro Transport & Logistik</h1>
                    </a>
                    <!-- <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Documentation</a></li>
                        <li class="nav-item"><a class="nav-link" href="page-register.html">Sign Up</a></li>
                    </ul> -->
                </nav>                    
            </div>
            <div class="col-lg-8">
                <div class="auth_detail">
                    <h2 class="text-monospace">
                        Apapun yang anda <br> butuhkan untuk
                        <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">Ekspedisi Laut</div>
                                <div class="carousel-item">Ekspedisi Udara</div>
                                <div class="carousel-item">Ekspedisi Darat</div>
                            </div>
                        </div>
                    </h2>
                    <p>Toro Logistic menyediakan layanan pengiriman barang
                    dari Jakarta dan sekitarnya seluruh Indonesia.</p>
                    <ul class="social-links list-unstyled">
                        <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="header">
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" method="post">
                            <?= csrf_token() ?>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input  name="email" type="email" class="form-control" id="signin-email"  placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox" name="remember" id="remember">
                                    <span>Remember me</span>
                                </label>								
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            <?php if (isset($error) && $error) : ?>
                                <div class=" text-center"><small class="text-danger"><?= $error ?></small></div>
                            <?php endif; ?>
                            <!-- <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i><a href="page-forgot-password.html">Forgot password?</a></span>
                                <span>Don't have an account? <a href="page-register.html">Register</a></span>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>