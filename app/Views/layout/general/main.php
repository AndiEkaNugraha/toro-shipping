<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $meta_title??'TORO TRANSPORT & LOGISTIC';?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/logo.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/logo.png" />
    <link rel="manifest" href="/assets/general/images/favicons/site.webmanifest" />
    <meta name="description" content="<?=$meta_description??''?>" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="/assets/general/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/general/css/animate.min.css" />
    <link rel="stylesheet" href="/assets/general/css/custom-animate.css" />
    <link rel="stylesheet" href="/assets/general/css/swiper.min.css" />
    <link rel="stylesheet" href="/assets/general/css/font-awesome-all.css" />
    <link rel="stylesheet" href="/assets/general/css/jarallax.css" />
    <link rel="stylesheet" href="/assets/general/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/general/css/odometer.min.css" />
    <link rel="stylesheet" href="/assets/general/css/flaticon.css">
    <link rel="stylesheet" href="/assets/general/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/general/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/general/css/nice-select.css" />
    <link rel="stylesheet" href="/assets/general/css/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/slider.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/banner.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/footer.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/feature.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/about.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/sliding-text.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/services.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/projects.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/design-interior.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/testimonial.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/video.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/awards.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/blog.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/brand.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/counter.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/team.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/why-choose.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/skill.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/faq.css" />
    <link rel="stylesheet" href="/assets/general/css/module-css/cta.css" />
	<link rel="stylesheet" href="/assets/general/css/module-css/page-header.css" />
	<link rel="stylesheet" href="/assets/general/css/module-css/contact.css" />
	<link rel="stylesheet" href="/assets/general/css/module-css/pricing.css" />
	<link rel="stylesheet" href="/assets/general/css/module-css/error.css" />
	<link rel="stylesheet" href="/assets/general/css/module-css/quote.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="/assets/general/css/style.css" />
        <?php if(isset($dark_mode)&&!empty($dark_mode)) {?>
        <link href="/assets/general/css/dark.css" rel="stylesheet">
    <?php }?>
    <link rel="stylesheet" href="/assets/general/css/responsive.css" />
</head>

<body>
<div class="page-wrapper">

<!--Start Main Header One-->
    <?= partial('_header', ['contact' => $contact]) ?>
    <!--End Main Header One-->

    <div class="stricky-header stricky-header--style1 stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <?= $content; ?>

    <!--Start Footer One-->
    <?= partial('_footer') ?>
    <!--End Footer One-->

</div><!-- End Page Wrapper -->
<?= partial('_footer-js') ?>
</body>