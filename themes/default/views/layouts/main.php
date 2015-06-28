<!DOCTYPE html>
<html>
    <head>
        <title>Fashion Store A Fashion Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Fashion Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo App()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="<?php echo App()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />        
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
    </head>
    <body> 
        <!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-grid">
                        <ul>
                            <li  ><a href="articles.html" class="scroll">Articles</a></li>
                            <li><a href="contact.html" class="scroll">Contact  </a></li>
                            <li><a href="privacy.html" class="scroll">Privacy</a></li>
                            <li><a href="#" class="scroll">Terms</a></li>						
                        </ul>
                    </div>
                    <div class="header-grid-right">
                        <?php if (App()->user->isGuest): ?>
                            <div class="header-guest">     
                                <a href="javascript:void(0)" class="cart">
                                    <label id="shopping-item"></label>
                                    <img src="<?php echo App()->theme->baseUrl."/images/invoice.png"; ?>" alt="Giỏ hàng" width="20" />
                                </a>
                                <a href="<?php echo App()->createUrl('user/login'); ?>" class="sign-up">Đăng Nhập</a>
                                <label>|</label>
                                <a href="<?php echo App()->createUrl('user/registration'); ?>" class="sign-up">Đăng Ký</a>
                            </div>
                        <?php else: ?>
                            <div class="header-account">
                                <ul>
                                    <li>
                                        <a href="#" class="scroll">
                                            <img src="<?php echo App()->theme->baseUrl ?>/images/account.png" alt="Tài khoản" height="18"/>
                                            <?php echo Yii::app()->user->name; ?></a>                                    
                                    </li>
                                    <li>
                                        <a href="#" class="scroll">
                                            <label id="shopping-item"></label>
                                            <img src="<?php echo App()->theme->baseUrl ?>/images/invoice.png" alt="Đơn hàng" height="20" />
                                            Đơn hàng</a>                                    
                                    </li>
                                    <li>
                                        <a href="<?php echo App()->createUrl('/user/logout'); ?>" class="scroll">
                                            <img src="<?php echo App()->theme->baseUrl ?>/images/sign_out.png" alt="Thoát" height="24" />
                                            Thoát</a>
                                    </li>
                                </ul>
                            </div>                        
                        <?php endif; ?>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="container">
                <div class="header-bottom">			
                    <div class="logo">
                        <a href="<?php echo App()->createUrl('/'); ?>"><img src="<?php echo App()->theme->baseUrl; ?>/images/logo.png" alt=" " ></a>
                    </div>
                    <div class="ad-right">
                        <img class="img-responsive" src="images/ad.png" alt=" " >
                    </div>
                    <div class="clearfix"> </div>
                </div>	
                <div class="header-bottom-bottom">
                    <div class="top-nav">
                        <span class="menu"> </span>
                        <ul class="menu-nav-bar">
                            <?php
                            $this->widget('application.components.MenuFrontPage', array(
                                'menuCate' => isset($_GET['tid']) ? $_GET['tid'] : null,
                            ));
                            ?>
                        </ul>	
                        <script>
                            $("span.menu").click(function () {
                                $(".top-nav ul").slideToggle(500, function () {
                                });
                            });
                        </script>

                        <div class="clearfix"> </div>					
                    </div>
                    <div class="search">
                        <form name="search">
                            <input type="text" value="Search" id="keywords" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = '';
                                    }" >
                            <input type="submit"  value="">
                        </form>                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>

        <!--content-->
        <div class="content">
            <div class="container main-container">
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

        <!-- search result -->
        <script type="text/javascript">
            var activeClass = 0;
            $("ul.menu-nav-bar").find('li').each(function () {
                if ($(this).hasClass('active'))
                    activeClass = 1;
                    return true;                                 
            });
            if(activeClass == 0)
                $("ul.menu-nav-bar li").first().addClass('active');            

            //search form
            $("form[name='search']").submit(function () {
                var kw = $('#keywords').val();
                var url = "<?php echo App()->controller->createUrl('/search/searchInBasic'); ?>/keyword/" + kw;
                $.ajax({
                    url: url,
                    type: "post",
                    success: function (data) {
                        //$("div.content").html(data);
                        $("div.main-container").html(data);
                    }
                });
                return false;
            });
            
            //cart items
            var items = "<?php echo App()->shoppingCart->getCount(); ?>";
            console.log("items:" +items);
            if (items != 0)
                $("label#shopping-item").html("("+items+")");
            $("a.cart").click(function(){
                if (items == 0)
                    bootbox.alert("Giỏ hàng của bạn hiện đang trống.");
                else
                    $(location).attr("href", "<?php echo App()->controller->createUrl('order/viewCart'); ?>");
            });
        </script>
    </body>
</html>