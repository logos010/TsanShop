<!DOCTYPE html>
<html>
    <head>
        <title>Fashion Store A Fashion Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Fashion Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <link href="<?php echo App()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo App()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="<?php echo App()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--//theme-style-->        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!--//fonts-->

        <script src="<?php echo App()->theme->baseUrl; ?>/js/js.cookie.js"></script>
        <script src="<?php echo App()->theme->baseUrl; ?>/js/bootbox.min.js"></script>
        <script src="<?php echo App()->theme->baseUrl; ?>/js/bootstrap.js"></script>
    </head>
    <body> 
        <!--header-->
        <div class="header">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-lg-12">
                        <div class="header-bottom">			
                            <div class="logo">
                                <a href="index.html"><img src="<?php echo App()->theme->baseUrl ?>/images/logo.png" alt=" " ></a>
                            </div>
                            <div class="ad-right">
                                <img class="img-responsive" src="<?php echo App()->theme->baseUrl ?>/images/ad.png" alt="Ads" >
                            </div>
                            <div class="clearfix"> </div>
                        </div> 
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col-lg-12 header-bottom-bottom">
                        <?php
                        $this->widget('application.components.MenuFrontPage', array(
                            'menuCate' => isset($_GET['tid']) ? $_GET['tid'] : null,
                        ));
                        ?>                        
                    </div>
                </div>
            </div>
        </div>
        <!--content-->
        <div class="content">
            <div class="container">
                <?php echo $content; ?>
            </div>
        </div>
        <!---->
        <div class="footer">
            <div class="container">
                <div class="footer-class">
                    <div class="class-footer">
                        <ul>
                            <li><a href="index.html" class="scroll">HOME </a><label>|</label></li>
                            <li><a href="men.html" class="scroll">MEN</a><label>|</label></li>
                            <li><a href="women.html" class="scroll">WOMEN</a><label>|</label></li>
                            <li><a href="collection.html" class="scroll">COLLECTION</a><label>|</label></li>
                            <li><a href="collection.html" class="scroll">STORE PRODUCTS</a><label>|</label></li>
                            <li><a href="collection.html" class="scroll">LATEST  PRODUCT</a></li>
                        </ul>
                        <p class="footer-grid">&copy; 2014 Template by <a href="" target="_blank">W3layouts</a> </p>
                    </div>	 
                    <div class="footer-left">
                        <a href="index.html"><img src="<?php echo App()->theme->baseUrl; ?>/images/logo1.png" alt=" " ></a>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </body>
</html>