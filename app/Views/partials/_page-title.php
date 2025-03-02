<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(/file/seoPage/<?=$page_title->banner !== ""  ? $page_title->banner : "default/default.jpg"?>)">
    </div>
    <div class="page-header__pattern"><img src="/assets/general/images/pattern/page-header-pattern.png" alt="banner"></div>
    <div class="container">
        <div class="page-header__inner">
            <h2><?php if(isset($page_title->pageName)&&!empty($page_title->pageName)) { echo $page_title->pageName; } ?></h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><span class="icon-right-arrow21"></span></li>
                <li><?php if(isset($page_title->pageName)&&!empty($page_title->pageName)) { echo $page_title->pageName; } ?></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->