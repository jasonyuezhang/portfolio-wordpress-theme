<?php get_header(); ?>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top">SkyStar Studio</a>
        </li>
        <li>
            <a href="#top">Home</a>
        </li>
        <li>
            <a href="#services">Services</a>
        </li>
        <li>
            <a href="#portfolio">Portfolio</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1>SkyStar Studio</h1>
        <h3>An amazing development team!</h3>
        <br>
        <a href="#services" class="btn btn-dark btn-lg">View More</a>
    </div>
</header>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>What can we do for you?</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                        </span>
                            <h4>
                                <strong>Website Building</strong>
                            </h4>
                            <p>Fully Responsive Website Design and Development</p>
                            <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-compass fa-stack-1x text-primary"></i>
                        </span>
                            <h4>
                                <strong>Mobile App Development</strong>
                            </h4>
                            <p>Multi-platform Mobile Application Development</p>
                            <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-flask fa-stack-1x text-primary"></i>
                        </span>
                            <h4>
                                <strong>Enterprise Service</strong>
                            </h4>
                            <p>Enterprise CMS and Server Development & SEO</p>
                            <!-- <a href="#" class="btn btn-light">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Contact Us -->
<section id="contact-us" class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 info">
                <ul>
                    <li>
                        <h4>
                            <strong>Email:</strong>
                        </h4>
                        developer@skystarstudio.com
                    </li>
                    <br />
                    <li>
                        <h4>
                            <strong>Phone:</strong>
                        </h4>
                        <span>
                            <strong>US:</strong>
                            <br />
                            +1 (858) 349-8335
                        </span>
                        <br />
                        <span>
                            <strong>China:</strong>
                            <br />
                            +86 (189) 119-83180
                        </span>                        
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 form">
                <form class="row" action="contactup.php" method="get" accept-charset="utf-8">
                    <fieldset class="col-sm-6">
                        <input type="text" name="first_name" placeholder="First Name">
                    </fieldset>
                    <fieldset class="col-sm-6">
                        <input type="text" name="last_name" placeholder="Last Name">
                    </fieldset>
                    <fieldset class="col-sm-12">
                        <input type="email" name="email" placeholder="Email Address">
                    </fieldset >
                    <fieldset class="col-sm-12">
                        <textarea name="message" placeholder="Message..."></textarea>
                    </fieldset>
                    <fieldset class="col-xs-12">
                        <input class="btn btn-lg btn-light" type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Developers Portfolio -->
<aside class="developers bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6">
                <p>
                    Front-end Engineer, Business Intelligence Developer
                    <br />
                    University of California, San Diego, B.S.
                </p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 text-center">
                <div class="service-item">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                    </span>
                    <h4>
                        <strong>Jason Zhang</strong>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-push-2 col-md-8 col-md-push-4 col-sm-6 col-sm-push-6">
                <p>
                    iOS Senior Engineer, Server Engineer, Freelancer
                    <br />
                    Beijing University of Posts and Telecommunications,
                    <br />
                    B.S., Software Engineering
                    <br />
                    iOS team tech leader @ Beijing Spring Rain Software Co. (The biggest
                    mobile healthy company in China)
                </p>
            </div>
            <div class="col-lg-2 col-lg-pull-10 col-md-4 col-md-pull-8 col-sm-6 col-sm-pull-6 text-center">
                <div class="service-item">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                    </span>
                    <h4>
                        <strong>Lei Zhang</strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>SkyStar Studio</strong>
                </h4>
                <!-- <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p> -->
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> +1 (858) 349-8335</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:developer@skystarstudio.com">developer@skystarstudio.com</a>
                    </li>
                </ul>
                <!-- <br>
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                <hr class="small"> -->
                <p class="text-muted">Copyright &copy; SkyStar Studio 2016</p>
            </div>
        </div>
    </div>
</footer>

<?php get_footer(); ?>