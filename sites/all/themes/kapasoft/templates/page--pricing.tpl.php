<?php print '<section class="section section-alt section-padded" data-background="#101012 url('.base_path() . path_to_theme() .'/img/kapasoft/assets/landscapes/landscape-1-1250x830.jpg) no-repeat top">';?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="super-hero-unit super-marged">
                <h1 class="super animated fadeinup delayedmore">
                    Choose
                <span class="lighter">
                  &amp;
                </span>
                    Go
                </h1>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <div class="well well-package span10">
                    <h3 class="well-package-heading">
                        Standard
                    </h3>
                    <div class="well-package-price">
                        <small>
                            $
                        </small>
                        950

/
                        <small>
                            $
                        </small>
                        45
                        <small>
                            /month
                        </small>
                    </div>
                    <ul class="well-package-list">
                        <li>One Design</li>
                        <li>Up to 1 Interface <div><small> Drupal / WordPress</small></div></li>
                        <li>6 pages</li>
                        <li>1 Contact Form</li>
                        <li>Shared Cloud Hosting</li>
                        <li>Monthly Back Ups</li>
                    </ul>
                    <div class="btn btn-primary btn-large" id="standardPlan">
                        Sign Up
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="well well-package well-package-feature span10 offset1">
                    <h3 class="well-package-heading">
                        Sliver
                  <span class="tag">
                    <i class="icon-star"></i>
                  </span>
                    </h3>
                    <div class="well-package-price">
                        <small>
                            $
                        </small>
                        1950

                        /
                        <small>
                            $
                        </small>
                        95
                        <small>
                            /month
                        </small>
                    </div>
                    <ul class="well-package-list">
                        <li>Three Designs</li>
                        <li>Up to 3 Interfaces<div><small>Drupal / WordPress / Custom</small></li>
                        <li>1 Interactive Feature <div><small>email campaign / reservations / other</small></div></li>
                        <li>1 SaaS Integration <div><small>ChimpMail / SalesForce / other</small></div> </li>
                        <li>Single Back Office <div><small>(app for business operations)</small></div> </li>
                        <li>Separate Instance Cloud Hosting</li>
                        <li>Monthly SEO Optimization</li>
                        <li>Weekly Back Ups</li>
                    </ul>
                    <div class="btn btn-primary btn-large" id="silverPlan">
                        Sign Up
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="well well-package span10 offset2">
                    <h3 class="well-package-heading">
                        Gold
                    </h3>
                    <div class="well-package-price">
                        <small>
                            $
                        </small>
                        3950

                        /

                        <small>
                            $
                        </small>
                        145
                        <small>
                            /month
                        </small>
                    </div>
                    <ul class="well-package-list">
                        <li>Unlimited Designs</li>
                        <li>Unlimited Interfaces<div><small>Drupal / WordPress / Custom</small></li>
                        <li>3 Interactive Feature <div><small>email campaign / reservations / other</small></div></li>
                        <li>3 SaaS Integrations <div><small>ChimpMail / SalesForce / other</small></div> </li>
                        <li>Single Back Office <div><small>(app for business operations)</small></div> </li>
                        <li>Multiple Instance Cloud Hosting</li>
                        <li>Weekly SEO Optimization</li>
                        <li>Daily Back Ups</li>
                    </ul>
                    <div class="btn btn-primary btn-large" id="goldPlan">
                        Sign Up
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
        jQuery("#silverPlan").click(function(){jQuery("#contactin").show("slow"); jQuery("#app-contact input[name='name']").focus(); });
        jQuery("#standardPlan").click(function(){jQuery("#contactin").show("slow"); jQuery("#app-contact input[name='name']").focus();});
        jQuery("#goldPlan").click(function(){jQuery("#contactin").show("slow"); jQuery("#app-contact input[name='name']").focus();});
    </script>
    <section  class="section section-padded" id="contactin" style="display:none">
        <script type="text/javascript" src="http://kapasoft.com/repos/backbone/contact/main/contact.min.js"></script>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span6" id="app-contact" >
                </div>
                <div class="span6 contact-details">
                    <ul class="icons">
                        <li>
                            <h4>
                                <i class="icon-phone"></i>
                                Contact details
                            </h4>
                            <p>
                                Phone: +1 651-334-6333
                                <br>
                                Email: info@kapasoft.com
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!-- What you get -->
<section class="section section-padded">
    <div class="container-fluid">
        <div class="section-header">
            <h1>
                What
                <small class="light">Do I get?</small>
            </h1>
        </div>
        <div class="row-fluid">
            <div class="span3">
                <div class="round-box box-big">
                <span class="box-inner">
                  <?php print '<img alt="some image" class="img-circle" src="'.base_path() . path_to_theme().'/img/kapasoft/assets/landscapes/landscape-3-300x300.jpg">';?>
                  <i class="icon-heart"></i>
                </span>
                </div>
            </div>
            <div class="span9">
                <h2>Freedom and Choices</h2>
                <p class="lead">
                    Our web solutions are developed on sound open source frameworks and platforms. With that, there is a wide variety of plugins
                    and features already available. In addition, each open source framework is backed by a strong community of developers who can
                    assist you as well if you choose. In short, our web solutions provides <strong>freedom</strong> and <strong>choices</strong> to you.
                </p>
            </div>
        </div>
        <hr>
        <div class="row-fluid">
            <div class="span3">
                <div class="round-box box-big">
                <span class="box-inner">
                  <?php print '<img alt="some image" class="img-circle" src="'.base_path() . path_to_theme().'/img/kapasoft/assets/landscapes/landscape-1-300x300.jpg">';?>
                  <i class="icon-cloud"></i>
                </span>
                </div>
            </div>
            <div class="span9">
                <h2>Innovation to Revolutionize</h2>
                <p class="lead">
                    We are geeks with a passion for cutting edge technologies. We like to be challenged. The result is products with
                    features that <strong>innovate</strong> and <strong>revolutionize</strong>
                </p>
            </div>
        </div>
        <hr>
        <div class="row-fluid">
            <div class="span3">
                <div class="round-box box-big">
                <span class="box-inner">
                  <?php print '<img alt="some image" class="img-circle" src="'.base_path() . path_to_theme() .'/img/kapasoft/assets/landscapes/landscape-2-e-300x300.jpg">';?>
                  <i class="icon-star"></i>
                </span>
                </div>
            </div>
            <div class="span9">
                <h2>Five star rating help</h2>
                <p class="lead">
                    We are sincerely interested in your success. We listen to your challenges and issues, so we can resolve them.
                    Reliable and on time, we provide support that lets you reach your goals and dreams
                </p>
            </div>
        </div>
    </div>
</section>
<?php include './'. path_to_theme() .'/templates/section--technologies.php';?>