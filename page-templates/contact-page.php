<?php

// Template Name: Contact Template

get_header(); ?>


    <!-- Contact Page — info + image only, NO form -->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-box">
                    <h1>Let's work together</h1>
                    <p>Interested in working together? Reach out to get in touch.</p>
                    <p><strong>Phone</strong> <a href="tel:401.683.3323">401.683.3323</a></p>
                    <p><strong>Email</strong>
                        <a href="mailto:belgravia@belgraviaimports.com">belgravia@belgraviaimports.com</a><br>
                        <a href="mailto:belgraviaorders@belgraviaimports.com">belgraviaorders@belgraviaimports.com</a>
                    </p>
                    <p><strong>Belgravia Imports</strong>
                        Aquidneck Corporate Park, Tech 4 Bldg <br>
                        88 Silva Ln, Suite 102A <br>
                        Middletown, RI 02842</p>
                </div>
                <div class="col-md-4 img-box">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-img.webp"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Page Closed -->

    <!-- Contact Form — separate centered section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-inner">
                <div class="eyebrow">Get In Touch</div>
                <h2>Send us a message</h2>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" placeholder="Phone">
                        </div>
                        <div class="col-md-6">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea name="" placeholder="Comment" id=""></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact Form Closed -->

    <!-- Signup -->
    <section class="contact-signup">
        <div class="container">
            <h2>Sign Up</h2>
            <p>Receive our full catalog, and find out when new products are available!</p>
            <form action="">
                <input type="email" placeholder="Email Address">
                <input type="submit" value="Sign Up">
            </form>
        </div>
    </section>



<?php get_footer(); ?>



