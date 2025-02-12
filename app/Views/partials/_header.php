<?= partial('_preloader') ?>

<header class="main-header main-header-one">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-header-one__inner">
                    <div class="main-header-one__top">
                        <div class="main-header-one__top-inner">
                            <div class="main-header-one__top-left">
                                <div class="header-contact-style1">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><span>Talk to Us</span> <a href="tel:1234567890">[+123 456
                                                        789]</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-email"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><span>Mail Us</span> <a
                                                        href="mailto:yourmail@email.com">[support@logistra.com]</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="main-header-one__top-right">
                                <div class="header-social-links">
                                    <a href="#"><span class="icon-facebook-f"></span></a>
                                    <a href="#"><span class="icon-twitter1"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>

                                <div class="header-search-box">
                                    <a href="#" class="main-menu__search search-toggler">Search
                                        <i class="icon-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-header-one__bottom">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-header-one__bottom-inner">
                                <div class="main-header-one__bottom-left">
                                    <div class="logo-box">
                                        <?php
                                            $default_logo_url = "/assets/general/images/resources/logo-1.png";
                                            if(isset($dark_logo_url)&&!empty($dark_logo_url)) {
                                                $default_logo_url = $dark_logo_url;
                                            }
                                        ?>
                                        <a href="index.php"><img src="<?php echo $default_logo_url;?>" alt=""></a>
                                    </div>

                                    <div class="main-header-one__bottom-menu">
                                        <div class="main-menu__main-menu-box">
                                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                            <?php
                                                $default_menu_file = partial('_menu');
                                                if(isset($single_menu_file)&&!empty($single_menu_file)) {
                                                    $default_menu_file = $single_menu_file;
                                                }
                                            ?>
                                            <?= $default_menu_file; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="main-header-one__bottom-right">
                                    <div class="main-header-one__bottom-right-btn">
                                        <a href="contact.php">Track Order
                                            <i class="icon-right-arrow21"></i>
                                        </a>
                                    </div>

                                    <div class="login-box">
                                        <a href="#"><i class="fa fa-sign-in"></i> <span>Member <br>
                                                Login</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>