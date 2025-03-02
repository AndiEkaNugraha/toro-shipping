<?= partial('_preloader') ?>
<header class="main-header main-header-one" style="<?php isset($pageHome)? print'background:transparent;position:absolute' : "" ?>">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-header-one__inner">
                    <div class="main-header-one__top">
                        <div class="main-header-one__top-inner">
                            <div class="main-header-one__top-left">
                                <div class="header-contact-style1">
                                    <ul>
                                         <?php if(isset($contact[0]->redirect_to) && $contact[0]->redirect_to !== ""): 
                                                    $phoneNumber = preg_replace('/\D/', '', $contact[0]->redirect_to);?>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-phone"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p><span>Talk to Us</span> <a href="https://wa.me/<?= $phoneNumber; ?>">[<?= $contact[0]->redirect_to; ?>]</a></p>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                        <?php if(isset($contact[1]->redirect_to) && $contact[1]->redirect_to !== ""): ?>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-email"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p><span>Mail Us</span> <a  href="mailto:<?= $contact[1]->redirect_to; ?>">[<?= $contact[1]->redirect_to; ?>]</a> </p>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="main-header-one__top-right">
                                <div class="header-social-links">
                                    <?php if(isset($contact[2]->redirect_to) && $contact[2]->redirect_to !== ""): ?>
                                        <a href="<?=$contact[2]->redirect_to?>"><span class="icon-facebook-f"></span></a>
                                    <?php endif; ?>
                                    <?php if(isset($contact[3]->redirect_to) && $contact[3]->redirect_to !== ""): ?>
                                    <a href="<?=$contact[3]->redirect_to?>"><span class="icon-twitter1"></span></a>
                                    <?php endif; ?>
                                    <?php if(isset($contact[4]->redirect_to) && $contact[4]->redirect_to !== ""): ?>
                                    <a href="<?=$contact[4]->redirect_to?>"><span class="icon-instagram"></span></a>
                                    <?php endif; ?>
                                    <?php if(isset($contact[5]->redirect_to) && $contact[5]->redirect_to !== ""): ?>
                                    <a href="<?=$contact[5]->redirect_to?>"><span class="icon-linkedin"></span></a>
                                    <?php endif; ?>
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
                                            $default_logo_url = "/assets/img/logo nav.png";
                                            if(isset($dark_logo_url)&&!empty($dark_logo_url)) {
                                                $default_logo_url = $dark_logo_url;
                                            }
                                        ?>
                                        <a href="/">
                                            <img src="<?php echo $default_logo_url;?>" alt="logo" height="48px">
                                        </a>
                                    </div>

                                </div>
                                <div class="main-header-one__bottom-menu">
                                    <div class="main-menu__main-menu-box">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <?php
                                            $default_menu_file = partial('_menu', ['menu' => metaPage() ]);
                                            if(isset($single_menu_file)&&!empty($single_menu_file)) {
                                                $default_menu_file = $single_menu_file;
                                            }
                                        ?>
                                        <?= $default_menu_file; ?>
                                    </div>
                                </div>

                                <div class="main-header-one__bottom-right">
                                    <div class="main-header-one__bottom-right-btn">
                                        <a href="contact.php">Track Order
                                            <i class="icon-right-arrow21"></i>
                                        </a>
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