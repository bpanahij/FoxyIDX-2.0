<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


    <!-- General meta information -->
    <title><?php echo $bookmark;?></title>
    <meta name="keywords" content="<?php echo $keywords;?>" />
    <meta name="description" content="<?php echo $description;?>" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- // General meta information -->


    <!-- Load stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/960.css" media="screen" /><!-- no need to edit, 960.gs Framework -->
    <link type="text/css" rel="stylesheet" href="css/screen.css" media="screen" />
    <link id="theme-colors" type="text/css" rel="stylesheet" href="css/themes/default.css" media="screen" /><!-- replace css/themes/xxxxxx.css with the theme you want to use -->
    <link type="text/css" rel="stylesheet" href="css/print.css" media="print" />
    <link type="text/css" rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" media="screen" /><!-- no need to edit, lightbox css -->
    <!--[if lt IE 7]><link type="text/css" rel="stylesheet" href="css/ie6.css" media="screen" /><![endif]-->
    <!-- // Load stylesheets -->


    <!-- Load Javascript / jQuery -->
    <!--[if lt IE 7]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script><![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/superfish-combined.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
    <!-- // Load Javascript / jQuery -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/gif" href="images/favicon.gif" />
    <!-- // Favicon -->

</head>
<body>


<div id="outer" class="clearfix">


<div id="topbar" class="clearfix">

    <div class="container_12">

        <div class="grid_6">
            <p><a href="/"><strong><?php echo $brand;?></strong></a> <?php echo $moto;?></p>
        </div><!-- //grid_6 -->

        <div class="grid_4">
            <p>phone: <strong><?php echo $phone;?></strong> email: <strong><a href="#"><?php echo $email;?></a></strong></p>
        </div><!-- //grid_4 -->

        <div class="grid_2">
            <form title="Search!" action="search.html" method="get" class="clearfix" id="searchform">
                <input type="text" value="" size="15" id="s" name="s" class="rounded" />
                <input type="submit" value="Seach" id="searchsubmit" title="Search the Site" />
            </form>
        </div><!-- //grid_2 -->

    </div><!-- //container_12 -->

</div><!-- //topbar -->


<div id="header" class="clearfix">

    <div class="container_12">

        <div class="grid_12" id="header-container">

            <div id="logo">
                <h1><a href="index.html" title="Go to the home page"><img width="300px" src="images/foxyidx_logo.png" alt="Logo" /></a></h1>
            </div><!-- //logo -->

            <ul class="sf-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="features.html">Features</a></li>
                <li>
                    <a href="#">Samples</a>
                    <ul>
                        <li>
                            <a href="columns-all.html">All Columns</a>
                            <ul>
                                <li><a href="fullwidth.html">Full Width</a></li>
                                <li><a href="columns-540x220x140.html">540 x 220 x 140</a></li>
                                <li><a href="columns-620x140x140.html">620 x 140 x 140</a></li>
                                <li><a href="columns-620x300.html">620 x 300</a></li>
                                <li><a href="columns-700x220.html">700 x 220</a></li>
                                <li><a href="columns-780x140.html">780 x 140</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="portfolio-gallery-2a.html">Photo Galleries</a>
                            <ul>
                                <li><a href="portfolio-gallery-2a.html">2 Column Boxed</a></li>
                                <li><a href="portfolio-gallery-2b.html">2 Column Regular</a></li>
                                <li><a href="portfolio-gallery-3a.html">3 Column Boxed</a></li>
                                <li><a href="portfolio-gallery-3b.html">3 Column Regular</a></li>
                                <li><a href="portfolio-gallery-4a.html">4 Columns</a></li>
                                <li><a href="portfolio-grid-slider.html">Grid Slider</a></li>
                                <li><a href="portfolio-products-small.html">Products</a></li>
                                <li><a href="portfolio-projects-large-slider.html">Products with Slider</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="video-gallery-3.html">Flash/Video Galleries</a>
                            <ul>
                                <li><a href="video-gallery-3.html">3 Column Video Gallery</a></li>
                                <li><a href="video-gallery-mixed.html">Video Gallery Mixed</a></li>
                                <li><a href="video-slider-large.html">Video Slider</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.html">Alternate Home Samples</a>
                            <ul>
                                <li><a href="index-thumbs.html">Thumbnail Slider</a></li>
                                <li><a href="index-noslider.html">No Slider - Boxed</a></li>
                                <li><a href="index.html">Large Slider (default)</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-small.html">Blog</a>
                            <ul>
                                <li><a href="blog-single.html">Single Page</a></li>
                                <li><a href="blog-sliders.html">Post Sliders</a></li>
                                <li><a href="blog-small-left.html">Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="footer-samples.html">Footer Samples</a></li>
                        <li><a href="typography-grid.html">Typography Grid</a></li>
                        <li><a href="sample-formatting.html">Sample HTML</a></li>
                        <li><a href="resume.html">Resume Style</a></li>
                        <li><a href="search.html">Search Results</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                    <ul>
                        <li><a href="contact.html">Contact Form</a></li>
                        <li><a href="contact-map.html">Large Map</a></li>
                        <li><a href="contact-locations.html">Our Locations</a></li>
                    </ul>
                </li>
                <li><a href="colors.html">Colors</a></li>
                <li><a href="blog-small.html">Blog</a></li>
            </ul>
        </div><!-- //grid_12 -->

    </div><!-- //container_12 -->


</div><!-- //header -->


<div id="main" class="clearfix">

    <div class="container_12">

        <div class="grid_12">


            <div id="promo_01" class="promo-container primary-promo-container">

                <ul class="promo-navigation clean"></ul><!-- //promo-navigation (auto generated) -->

                <ul class="promos clean">
                    <li><a href="#"><img src="images/promos/foxy_hero_one.png" alt="Promo" /></a></li>
                    <li class="hidden"><a href="#"><img src="images/promos/foxy_hero_two.png" alt="Promo" width="940" height="400" /></a></li>
                    <li class="hidden"><a href="#"><img src="images/promos/foxy_hero_three.png" alt="Promo" width="940" height="400" /></a></li>
                </ul><!-- // promo list -->

            </div><!-- //promo-container -->
            <script type="text/javascript">
                jQuery(function($){

                    // Full options at http://jquery.malsup.com/cycle/options.html
                    $('#promo_01 .promos').cycle({
                        fx: 		'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                        pager: 		'#promo_01 .promo-navigation',
                        pause: 		1
                    });

                });
            </script>


        </div><!--//grid_12-->


        <div class="clear"></div><!--//clear columns-->



        <div class="grid_8">
            <h2>Welcome to Clearly Modern by Cudazi</h2>
            <p>Clearly Modern is a clean, modern HTML/CSS theme by Cudazi that is extremely flexible and easy to use. It includes tons of sample formatting with lightboxes, sliders and much more!</p>

            <div class="grid_4 alpha">
                <ul class="iconlist clean">
                    <li class="clearfix">
                        <img src="images/icons/exchange32.png" alt="Icon" class="left" />
                        <h5><a href="#">Fast Turnaround</a></h5>
                        <p>Easy to set up, gets you started quickly</p>
                    </li>
                    <li class="clearfix">
                        <img src="images/icons/star32.png" alt="Icon" class="left" />
                        <h5>Sure to be a favorite</h5>
                        <p>Impress your visitors!</p>
                    </li>
                    <li class="clearfix">
                        <img src="images/icons/check32.png" alt="Icon" class="left" />
                        <h5>Quality Coding and Validation</h5>
                        <p>Well thought out with room to grow</p>
                    </li>
                </ul>
            </div><!-- grid_4 alpha (nested column start)-->

            <div class="grid_4 omega">
                <ul class="iconlist clean">
                    <li class="clearfix">
                        <img src="images/icons/moneyreceipt32.png" alt="Icon" class="left" />
                        <h5>Value Priced</h5>
                        <p>You can't beat the price!</p>
                    </li>
                    <li class="clearfix">
                        <img src="images/icons/plug32.png" alt="Icon" class="left" />
                        <h5>jQuery Plugin Ready!</h5>
                        <p>Add any jQuery plugin and go</p>
                    </li>
                    <li class="clearfix">
                        <img src="images/icons/wordpress32.png" alt="Icon" class="left" />
                        <h5>Coming to WordPress</h5>
                        <p>Watch for the WordPress version</p>
                    </li>
                </ul>
            </div><!-- grid_4 omega (nested column end)-->

        </div><!--//grid_8-->



        <div class="grid_4">

            <div class="widget">
                <h3 class="widgettitle">Built on the Grid</h3>
                <p>Nearly unlimited layout options since this is built on the 960.gs grid framework. Easily change column or gallery widths with minimal effort!</p>
            </div>

            <div class="widget">
                <h3 class="widgettitle">Features, Features, Features</h3>
                <div id="promo_44">
                    <ul>
                        <!-- specify width/height when using HTML to help out older browsers slide HTML content -->
                        <li class="clearfix" style="width:300px; height:55px;">
                            <p><strong>jQuery Enhanced</strong><br />Take advantage of the many jQuery plugins out there already, this theme can handle it!</p>
                        </li>
                        <li class="clearfix hidden" style="width:300px; height:55px;">
                            <p><strong>Lightbox Included</strong><br />I've included an easy to use, flexible lightbox to showcase your work on the site.</p>
                        </li>
                        <li class="clearfix hidden" style="width:300px; height:55px;">
                            <p><strong>Tons of Sample Formatting</strong><br />Explore the site to see all the sample formatting included with your download.</p>
                        </li>
                        <li class="clearfix hidden" style="width:300px; height:55px;">
                            <p><strong>Lightbox Included</strong><br />I've included an easy to use, flexible lightbox to showcase your work on the site.</p>
                        </li>
                    </ul>
                    <p><a href="#" class="next">View Next Feature &raquo;</a></p>
                </div>
                <script type="text/javascript">
                    jQuery(function($){ $("#promo_44 UL").cycle({ /* add options here */ fx:'scrollUp',next:'#promo_44 .next', timeout:0, speed:500 }); });
                </script>
            </div>


        </div><!--//grid_4-->



        <div class="clear"></div><!--//clear columns-->

        <div class="grid_12">
            <p class="quotebox">
                <small class="right">John Marks - <a href="#">FakeCo</a></small>
                We were lost until we discovered your services five years ago and haven’t looked back, thanks for everything!
            </p>
        </div><!--//grid_12-->




    </div><!-- //container_12 -->

</div><!-- //main -->




<div id="footer" class="clearfix">
    <div class="container_12">

        <div class="grid_3">

            <div class="widget widget_links">
                <h3 class="widgettitle">Popular Blogs I Read</h3>
                <ul>
                    <li><a href="#">Jay Gatsby</a></li>
                    <li><a href="#">Holden Caulfield</a></li>
                    <li><a href="#">Humbert Humbert</a></li>
                    <li><a href="#">Leopold Bloom</a></li>
                    <li><a href="#">Rabbit Angstrom</a></li>
                    <li><a href="#">Sherlock Holmes</a></li>
                    <li><a href="#">Atticus Finch</a></li>
                    <li><a href="#">Molly Bloom</a></li>
                    <li><a href="#">Stephen Dedalus</a></li>
                    <li><a href="#">Lily Bart</a></li>
                    <li><a href="#">Holly Golightly</a></li>
                    <li><a href="#">Gregor Samsa</a></li>
                    <li><a href="#">The Invisible Man</a></li>
                    <li><a href="#">Vladimir Nabokov</a></li>
                    <li><a href="#">Aureliano Buendia</a></li>
                    <li><a href="#">Sherlock Holmes</a></li>
                    <li><a href="#">Atticus Finch</a></li>
                    <li><a href="#">Winnie the Pooh</a></li>
                    <li><a href="#">Clarissa Dalloway</a></li>
                    <li><a href="#">Ignatius Reilly</a></li>
                    <li><a href="#">George Smiley</a></li>
                </ul>
            </div>

        </div><!--//grid_3-->

        <div class="grid_3">

            <div class="widget widget_links">
                <h3 class="widgettitle">Envato Marketplaces</h3>
                <ul>
                    <li><a href="http://activeden.net">ActiveDen</a></li>
                    <li><a href="http://audiojungle.net">AudioJungle</a></li>
                    <li><a href="http://themeforest.net">ThemeForest</a></li>
                    <li><a href="http://videohive.net">VideoHive</a></li>
                    <li><a href="http://graphicriver.net">GraphicRiver</a></li>
                    <li><a href="http://3docean.net">3DOcean</a></li>
                    <li><a href="http://codecanyon.net">CodeCanyon</a></li>
                </ul>
            </div>

            <div class="widget widget_links">
                <h3 class="widgettitle">Educational Sites</h3>
                <ul>
                    <li><a href="http://psd.tutsplus.com">Psdtuts+</a></li>
                    <li><a href="http://net.tutsplus.com">Nettuts+</a></li>
                    <li><a href="http://vector.tutsplus.com">Vectortuts+</a></li>
                    <li><a href="http://ae.tutsplus.com">Aetuts+</a></li>
                    <li><a href="http://active.tutsplus.com">Activetuts+</a></li>
                    <li><a href="http://cg.tutsplus.com">Cgtuts+</a></li>
                    <li><a href="http://photo.tutsplus.com">Phototuts+</a></li>
                    <li><a href="http://mobile.tutsplus.com">Mobiletuts+</a></li>
                    <li><a href="http://webdesign.tutsplus.com">Webdesigntuts+</a></li>
                </ul>
            </div>

        </div><!--//grid_3-->

        <div class="grid_6">

            <div class="widget twitter-widget">
                <h3 class="widgettitle"><small class="right">Follow us <a href="http://twitter.com/">@username</a></small>Twitter</h3>
                <div id="latest-footer-tweets"></div>
            </div>

            <div class="widget">
                <h3 class="widgettitle">Suggested Reading</h3>
                <ul>
                    <li><strong><a href="#">PSD to HTML Part 1 of 22</a></strong><br />
                        Phasellus mollis turpis ipsum. Aenean vitae mi in est pulvinar ornare.</li>

                    <li><strong><a href="#">Sample Headings are Very Exciting</a></strong><br />
                        Phasellus mollis turpis ipsum. Aenean vitae mi in est pulvinar ornare.</li>
                </ul>
            </div>
        </div><!--//grid_6-->

    </div><!--//container_12-->
</div><!-- //footer -->

<div id="footer-bottom" class="clearfix">
    <div class="container_12">
        <div class="grid_12">
            <p class="left">&copy; 2010 - Theme created by <a href="http://cudazi.com/" title="Curt Ziegler / Cudazi Web Design Portfolio ">Cudazi</a> for <a href="http://themeforest.net/user/cudazi/?ref=cudazi" title="More WordPress and HTML themes by Cudazi on ThemeForest">ThemeForest.net</a></p>
            <p class="right"><a href="#" class="scroll-top" title="Back to the Top">TOP</a></p>
        </div>
    </div><!--//container_12-->
</div>


</div><!-- //outer -->

<!-- insert analytics -->
</body>
</html>
