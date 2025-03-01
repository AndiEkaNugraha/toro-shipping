        <!--Start Faq One-->
        <section class="faq-one">
            <div class="shape1 float-bob-x"><img src="/assets/general/images/shapes/faq-v1-shape1.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <!--Start Faq One Content-->
                    <div class="col-xl-6">
                        <div class="faq-one__content">
                            <div class="faq-one__content-faq">
                                <div class="sec-title tg-heading-subheading animation-style2">
                                    <div class="sec-title__tagline">
                                        <div class="line"></div>
                                        <div class="text tg-element-title">
                                            <h4>Frequently Asked Questions</h4>
                                        </div>
                                        <div class="icon">
                                            <span class="icon-plane2 float-bob-x3"></span>
                                        </div>
                                    </div>
                                    <h2 class="sec-title__title tg-element-title">Pertanyaan yang Sering <span>DIAJUKAN</span></h2>
                                </div>

                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                    <?php foreach($faq as $f): ?>
                                    <?php if($f->is_active == 1 && $f->is_deleted == 0): ?>
                                        <div class="accrodion">
                                            <div class="accrodion-title">
                                                <h4><?php echo $f->title; ?></h4>
                                            </div>

                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p><?php echo htmlspecialchars($f->content); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Faq One Content-->

                    <!--Start Faq One Img-->
                    <div class="col-xl-6">
                        <div class="faq-one__img">
                            <div class="faq-one__img-box">
                                <img src="/assets/general/images/resources/faq-v1-img1.jpg" alt="">

                                <div class="faq-one__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="faq-one__video-icon">
                                            <span class="icon-video"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Faq One Img-->
                </div>
            </div>

            <!--Start Sliding Text One-->
            <div class="sliding-text-one">
                <div class="sliding-text-one__wrap">
                    <ul class="sliding-text__list list-unstyled marquee_mode">
                        <li>
                            <h2 data-hover="100% TRUSTED TRANSPORT" class="sliding-text__title">100% TRUSTED TRANSPORT
                                <img src="/assets/general/images/icon/sliding-text-icon-1.png" alt=""></h2>
                        </li>
                        <li>
                            <h2 data-hover="100% TRUSTED TRANSPORT" class="sliding-text__title">100% TRUSTED TRANSPORT
                                <img src="/assets/general/images/icon/sliding-text-icon-1.png" alt=""></h2>
                        </li>
                        <li>
                            <h2 data-hover="100% TRUSTED TRANSPORT" class="sliding-text__title">100% TRUSTED TRANSPORT
                                <img src="/assets/general/images/icon/sliding-text-icon-1.png" alt=""></h2>
                        </li>
                        <li>
                            <h2 data-hover="100% TRUSTED TRANSPORT" class="sliding-text__title">100% TRUSTED TRANSPORT
                                <img src="/assets/general/images/icon/sliding-text-icon-1.png" alt=""></h2>
                        </li>
                        <li>
                            <h2 data-hover="100% TRUSTED TRANSPORT" class="sliding-text__title">100% TRUSTED TRANSPORT
                                <img src="/assets/general/images/icon/sliding-text-icon-1.png" alt=""></h2>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End Sliding Text One-->
        </section>
        <!--End Faq One-->