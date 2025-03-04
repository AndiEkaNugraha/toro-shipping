<footer class="footer-one">
        <div class="footer-one__pattern"><img src="/assets/general/images/pattern/footer-v1-pattern.png" alt="#"></div>
        <div class="footer-one__top">
            <div class="container">
                <div class="footer-one__top-inner">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__single footer-one__about">
                                <div class="footer-one__about-logo">
                                    <?php
                                        $default_logo_url = "/assets/general/images/resources/footer-logo.png";
                                        if(isset($dark_logo_url)&&!empty($dark_logo_url)) {
                                            $default_logo_url = $dark_logo_url;
                                        }
                                    ?>
                                    <a href="index.php"><img src="<?php echo $default_logo_url;?>" alt=""></a>
                                </div>
                                <p class="footer-one__about-text">Logistic service provider company plays a
                                    pivotal role in the global supply chain logistic service provider.</p>

                                <div class="footer-one__about-contact-info">
                                    <div class="icon">
                                        <span class="icon-support"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>Make a Call</p>
                                        <h4><a href="tel:+1234567890">+880 123 456 789</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__single footer-one__quick-links">
                                <div class="title">
                                    <h2>Quick Links <span class="icon-plane3"></span></h2>
                                </div>

                                <ul class="footer-one__quick-links-list">
                                    <li><a href="index.php"><span class="icon-right-arrow1"></span> Home</a></li>
                                    <li><a href="about.php"><span class="icon-right-arrow1"></span> About Us</a>
                                    </li>
                                    <li><a href="service.php"><span class="icon-right-arrow1"></span> Service</a>
                                    </li>
                                    <li><a href="project.php"><span class="icon-right-arrow1"></span> Latest
                                            Project</a></li>
                                    <li><a href="contact.php"><span class="icon-right-arrow1"></span> Contact
                                            Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__single footer-one__contact">
                                <div class="title">
                                    <h2>Get In Touch <span class="icon-plane3"></span></h2>
                                </div>

                                <div class="footer-one__contact-box">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-address"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>3060 Commercial Street Road <br> Fratton, Australia</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-email"></span>
                                            </div>
                                            <div class="text-box">
                                                <p><a href="mailto:yourmail@email.com">support@logistra.com</a></p>
                                                <p><a href="mailto:yourmail@email.com">info@logistra.com</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone"></span>
                                            </div>
                                            <div class="text-box">
                                                <p><a href="tel:1234567890">+880 123 456 789 </a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__single footer-one__subscribe">
                                <div class="title">
                                    <h2>Subscribe Us <span class="icon-plane3"></span></h2>
                                </div>

                                <p class="footer-one__subscribe-text">Sign up for alerts, our latest blogs, <br>
                                    thoughts, and insights</p>

                                <div class="footer-one__subscribe-form">
                                    <form class="subscribe-form" action="#">
                                        <input type="email" name="email" placeholder="Your E-mail">
                                        <button type="submit" class="thm-btn">Subcribe
                                            <i class="icon-right-arrow21"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-one__bottom">
            <div class="container">

                <div class="footer-one__bottom-inner">
                    <div class="footer-one__bottom-text">
                        <p>© Copyright 2024 <a href="index.php">Logistiq.</a> All Rights Reserved</p>
                    </div>

                    <div class="footer-one__social-links">
                        <ul>
                            <li>
                                <a href="#"><span class="icon-facebook-f"></span></a>
                            </li>

                            <li>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>

                            <li>
                                <a href="#"><span class="icon-twitter1"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>