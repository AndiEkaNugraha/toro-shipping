        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">X</a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <?php
                                        $default_logo_url = "/assets/general/images/resources/sidebar-logo.png";
                                        if(isset($dark_logo_url)&&!empty($dark_logo_url)) {
                                            $default_logo_url = $dark_logo_url;
                                        }
                                    ?>
                                    <a href="index.php"><img src="<?php echo $default_logo_url;?>" alt=""></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <div class="inner-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old.
                                        </p>
                                    </div>
                                </div>

                                <div class="form-inner">
                                    <h4>Get a free quote</h4>
                                    <form action="index.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message..."></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                                Submit Now
                                                <i class="icon-right-arrow21"></i>
                                                <span class="hover-btn hover-bx"></span>
                                                <span class="hover-btn hover-bx2"></span>
                                                <span class="hover-btn hover-bx3"></span>
                                                <span class="hover-btn hover-bx4"></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="sidebar-contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>
                                            <span class="icon-location1"></span> 88 broklyn street, New York
                                        </li>
                                        <li>
                                            <span class="icon-phone"></span>
                                            <a href="tel:123456789">+1 555-9990-153</a>
                                        </li>
                                        <li>
                                            <span class="fa fa-envelope"></span>
                                            <a href="mailto:info@example.com">info@example.com</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="thm-social-link1">
                                    <ul class="social-box">
                                        <li class="facebook">
                                            <a href="#"><i class="icon-facebook-f" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="icon-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="icon-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="gplus">
                                            <a href="#"><i class="icon-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>