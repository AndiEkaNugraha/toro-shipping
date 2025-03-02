<!doctype html>
<html lang="en">
<head>
<title>Toro Sentosa</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Toro Sentosa Admin Page">
<meta name="author" content="Toro Sentosa">

<link rel="icon" href="/assets/img/logo.png" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="/assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/admin/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/admin/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="/assets/admin/vendor/toastr/toastr.min.css">

<?php if (isset($summerNote) && $summerNote == true ) : ?>
    <link rel="stylesheet" href="/assets/admin/vendor/summernote/dist/summernote.css"/>
<?php endif; ?>

<?php if(isset($table) && $table == true): ?>
    <link rel="stylesheet" href="/assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<?php endif; ?>

<?php if(isset($form) && $form == true): ?>
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <link rel="stylesheet" href="/assets/admin/vendor/multi-select/css/multi-select.css">
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="/assets/admin/vendor/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/admin/vendor/parsleyjs/css/parsley.css">
    <link rel="stylesheet" href="/assets/admin/vendor/dropify/css/dropify.min.css">
<?php endif; ?>

<!-- MAIN CSS -->
<link rel="stylesheet" href="/assets/admin/css/main.css">
<link rel="stylesheet" href="/assets/admin/css/color_skins.css">
</head>

<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="/assets/img/logo-white.png" width="50" height="50" alt="logo"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="/"><img src="/assets/img/logo-white.png" alt="logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left d-none d-xl-inline"></i></a>
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="/"><img src="/assets/img/logo.png" alt="Logo" class="img-fluid logo"><span>Toro Logistik</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="/file/userProfile/<?= $userAuthorize->avatar !== ""? $userAuthorize->avatar:"default/avatar.jpg" ?>" class="user-photo" alt="User Profile Picture" height="90" width="90" style="object-fit: cover;objec-position: center">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?= $userAuthorize->name??"Unknown" ?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <!-- <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li> -->
                        <li class="divider"></li>
                        <li><a href="/administrator/<?= $userAuthorize->seo_name??"" ?>/logout"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="<?= $page == "dashboard"?"active":""; ?>"><a href="/administrator/<?= $userAuthorize->seo_name??"" ?>"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li class="<?= $page == "seoPage"?"active":""; ?>"><a href="/administrator/<?= $userAuthorize->seo_name??"" ?>/seo-page"><i class="icon-puzzle"></i><span>Seo Page</span></a></li>
                    <li class="<?= $page == "contact"?"active":""; ?>"><a href="/administrator/<?= $userAuthorize->seo_name??"" ?>/contact"><i class="icon-book-open"></i><span>Contact</span></a></li>
                    <li class="<?= $page == "faq"?"active":""; ?>"><a href="/administrator/<?= $userAuthorize->seo_name??"" ?>/faq"><i class="icon-question"></i><span>FAQ</span></a></li>
                </ul>
            </nav>     
        </div>
    </div>
    <div id="main-content">
        <?= $content ?>
    </div>
</div>

<!-- Javascript -->
<script src="/assets/admin/bundles/libscripts.bundle.js"></script>    
<script src="/assets/admin/bundles/vendorscripts.bundle.js"></script>

<?php if(isset($table) && $table == true): ?>
    <script src="/assets/admin/bundles/datatablescripts.bundle.js"></script>
    <script src="/assets/admin/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="/assets/admin/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="/assets/admin/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="/assets/admin/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="/assets/admin/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<?php endif; ?>

<?php if(isset($form) && $form == true): ?>
    <script src="/assets/admin/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><!-- Bootstrap Colorpicker Js --> 
    <script src="/assets/admin/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script><!-- Input Mask Plugin Js --> 
    <script src="/assets/admin/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="/assets/admin/vendor/multi-select/js/jquery.multi-select.js"></script><!-- Multi Select Plugin Js -->
    <script src="/assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="/assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script><!-- Bootstrap Tags Input Plugin Js --> 
    <script src="/assets/admin/vendor/nouislider/nouislider.js"></script><!-- noUISlider Plugin Js --> 
    <script src="/assets/admin/vendor/parsleyjs/js/parsley.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="/assets/admin/vendor/dropify/js/dropify.min.js"></script>
    <script>
        $(function() {
            $('#formValidation').parsley();
        });
    </script>
<?php endif; ?>

<script src="/assets/admin/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 
<script src="/assets/admin/js/pages/ui/dialogs.js"></script>
<script src="/assets/admin/vendor/toastr/toastr.js"></script>


<script src="/assets/admin/bundles/mainscripts.bundle.js"></script>

<?php if (isset($summerNote) && $summerNote == true ) : ?>
    <script src="/assets/admin/vendor/summernote/dist/summernote.js"></script>
<?php endif; ?>
<?php if(isset($table) && $table == true): ?>
    <script src="/assets/admin/js/pages/tables/jquery-datatable.js"></script>
<?php endif; ?>
<?php if(isset($form) && $form == true): ?>
    <script src="/assets/admin/js/pages/forms/dropify.js"></script>
    <script src="/assets/admin/js/pages/forms/advanced-form-elements.js"></script>
<?php endif; ?>

<?php if(isset($response) && $response == true): ?>
<script>
    toastr.options.closeButton = true;
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.showDuration = 1000;
    toastr['<?=$context??"info"?>']('<?=$message??""?>');
</script>
<?php endif; ?>

</body>
</html>