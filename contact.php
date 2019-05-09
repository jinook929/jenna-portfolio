<?php 
$page = 'contact';
include './assets/include/header.php'; 
?>

    <!-- CONTACT TOP SECTION -->
    <section id="contact-top">
        <h2>Contact Me</h2>
    </section>

    <!-- CONTACT FORM SECTION -->
    <section id="contact">
        <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup {
                background: rgba(255, 255, 255, 0.85);
                clear: left;
                font: 14px Helvetica, Arial, sans-serif;
            }

            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
            <form
                action="https://gmail.us20.list-manage.com/subscribe/post?u=ab2fe20d4dc1f6e51918daa23&amp;id=338e60af94"
                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                    <div class="mc-field-group">
                        <label for="mce-FNAME">First Name </label>
                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-LNAME">Last Name </label>
                        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                        </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-MMERGE3">Message </label>
                        <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                            name="b_ab2fe20d4dc1f6e51918daa23_338e60af94" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Contact" name="subscribe" id="mc-embedded-subscribe"
                            class="button"></div>
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script
            type='text/javascript'>(function ($) { window.fnames = new Array(); window.ftypes = new Array(); fnames[1] = 'FNAME'; ftypes[1] = 'text'; fnames[2] = 'LNAME'; ftypes[2] = 'text'; fnames[0] = 'EMAIL'; ftypes[0] = 'email'; fnames[3] = 'MMERGE3'; ftypes[3] = 'text'; }(jQuery)); var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
    </section>

    <?php include './assets/include/footer.php'; ?>