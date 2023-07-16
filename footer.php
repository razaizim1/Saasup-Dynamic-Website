<?php $options = get_option('coderit'); ?>
<footer>
    <!-- place footer here -->
    <section class="footer_area">
        <div class="container">
            <div class="row footer-padding">
                <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1 ">
                    <div class="footer_text-1">
                        <img src="<?php echo $options['footer-logo-upload']['url']; ?>" alt="footer-logo">
                        <p><?php echo $options['footer-description']; ?></p>

                        <?php
                        $footer_contacts = $options['footer-email-phone'];
                        echo "<pre>";
                        // print_r($footer_contacts);
                        echo "</pre>";

                        foreach ($footer_contacts as $fcontact) :
                        ?>
                            <div class="footer_email01 d-flex">
                                <a href="#"><i class="<?php echo $fcontact['phone-email-icon']; ?>"></i></a>
                                <ul class="footer_email">
                                    <?php
                                    $email_phone_values = $fcontact['email-phone-value-repeater'];
                                    // print_r($email_phone_values);
                                    foreach ($email_phone_values as $epvalue) :
                                    ?>
                                        <li><a href="<?php
                                                        if (is_numeric($epvalue['email-phone-item'])) {
                                                            echo 'tel:' . $epvalue['email-phone-item'];
                                                        } else {
                                                            echo 'mailto:' . $epvalue['email-phone-item'];
                                                        }
                                                        ?>"><?php echo $epvalue['email-phone-item']; ?></a></li>

                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="col-xl-2 col-lg-6 order-lg-3 order-xl-2 ">
                    <?php dynamic_sidebar('footer-widget1'); ?>
                </div>

                <div class="col-xl-2 col-lg-6 order-lg-4 order-xl-3 ">
                    <?php dynamic_sidebar('footer-widget2'); ?>
                </div>

                <div class="col-xl-4 col-lg-6 order-lg-2 order-xl-4 ">
                    <?php dynamic_sidebar('footer-widget3'); ?>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright d-flex justify-content-between">
                        <p><?php echo $options['copyright']; ?></p>
                        <div class="footer-icon">
                            <ul class="d-flex">
                                <?php
                                $social_items = $options['social-icons'];
                                foreach ($social_items as $item) :
                                ?>

                                    <li><a href="<?php echo $item['social-url']; ?>"><i class="<?php echo $item['social-icons']; ?>"></i></a></li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<!-- JavaScript Libraries -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>


<script src="assets/js/scripts.js"></script>
</body>

</html>