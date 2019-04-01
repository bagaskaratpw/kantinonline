<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>

    <!-- core CSS -->
    <link href="<?php echo base_url('asset/');?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/icomoon.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/main.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('asset/');?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('asset/');?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('asset/');?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('asset/');?>images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('asset/');?>images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url('user/index');?>">Home</a></li>
                        <li><a href="<?php echo base_url('user/about');?>">About Us</a></li>
                        <li><a href="<?php echo base_url('user/daftar_blog');?>">Blog</a></li>
                        <li class="active"><a href="<?php echo base_url('user/contact');?>">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->


    <div class="page-title" style="background-image: url(<?php echo base_url('asset/');?>images/page-title.png)">
        <h1>Contact us</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Drop Your Message</h2>
                <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo base_url('user/index');?>">Home</a></li>
                        <li><a href="<?php echo base_url('user/about');?>">About Us</a></li>
                        <li><a href="<?php echo base_url('user/daftar_blog');?>">Blog</a></li>
                        <li><a href="<?php echo base_url('user/contact');?>">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="<?php echo base_url('asset/');?>js/jquery.js"></script>
    <script src="<?php echo base_url('asset/');?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/');?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url('asset/');?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('asset/');?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url('asset/');?>js/main.js"></script>
</body>

</html>
