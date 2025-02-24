<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2>Contact</h2>
        </div>            
        <div class="col-md-6 col-sm-12 text-right">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator/<?=$userAuthorize->seo_name??""?>"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Masked Input -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <form class="card" method="POST">
                <?= csrf_token() ?>
                <div class="header">
                    <h2>Contact Information</h2>
                    <ul class="header-dropdown dropdown dropdown-animated scale-left">
                        <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                    </ul>
                </div>
                <div class="body">
                    <div class="demo-masked-input">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6">
                                <b>Phone Number</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-call-in"></i></span>
                                    </div>
                                    <input value="<?= $phone->redirect_to??""?>" name="phone" type="text" class="form-control mobile-phone-number" placeholder="Ex: (+62) 877 7777 8888">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <b>Email Address</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                    <input value="<?= $email->redirect_to??""?>" name="email" type="text" class="form-control email" placeholder="Ex: example@example.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body pt-1 text-right">
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <form class="card" method="POST">
                <?= csrf_token() ?>
                <div class="header">
                    <h2>Social Media Information</h2>
                    <ul class="header-dropdown dropdown dropdown-animated scale-left">
                        <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                    </ul>
                </div>
                <div class="body">
                    <div class="demo-masked-input">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6">
                                <b>Twitter</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-social-twitter"></i></span>
                                    </div>
                                    <input value ="<?= $twitter->redirect_to??""?>" name="twitter" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <b>Facebook</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class=" icon-social-facebook"></i></span>
                                    </div>
                                    <input value="<?= $facebook->redirect_to??""?>" name="facebook" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <b>Instagram</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-instagram"></i></span>
                                    </div>
                                    <input value="<?= $instagram->redirect_to??""?>" name="instagram" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <b>Linkedin</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-linkedin"></i></span>
                                    </div>
                                    <input value="<?= $linkedin->redirect_to??""?>" name="linkedin" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body pt-1 text-right">
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>