<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);

$this->menu = array(
    array('label' => 'Create Product', 'url' => array('create')),
    array('label' => 'Manage Product', 'url' => array('admin')),
);

//Multiple Select Dropdown -->
//scriptFile(themeUrl() . "/js/jquery-ui-1.8.23.custom.min.js", CClientScript::POS_BEGIN);
//scriptFile(themeUrl() . "/js/mainnav-smoothScrolling.js", CClientScript::POS_BEGIN);
//scriptFile(themeUrl() . "/js/jQuery.equalHeights.js", CClientScript::POS_BEGIN);
?>

<div class="women-in">
    <div class="col-md-9 col-d">
        <div class="banner">
            <div class="banner-matter">
                <label>Collection</label>
                <h2>Summmer</h2>
                <p>Helping you look cool</p>

            </div>
            <div class="you">
                <span>40<label>%</label></span>
                <small>off</small>
            </div>			
            <p  class="para-in">Some text regarding the featured product.</p>
        </div>
        <!---->
        <div class="in-line">
            <div class="para-an">
                <h3>LATEST  ARRIVALS</h3>
                <p>Check our all latest products in this section.</p>
            </div>
            <div class="lady-in">
                <?php
                $i = 1;
                $last = null;
                foreach ($products as $k => $v):
                    if ($i%3==0) {
                        $last = ' para-grid';                        
                    }
                ?>
                    <div class="col-md-4 you-para <?php echo $last; ?>">
                        <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">
                            <img class="img-responsive pic-in" src="<?php echo $v->image; ?>" alt=" " >
                        </a>
                        <?php if ($v->discount != 0): ?>
                            <div class="you-in">
                                <span>15<label>%</label></span>
                                <small>off</small>
                            </div>
                        <?php endif; ?>
                        <p><?php echo $v->name; ?></p>
                        <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>| <label class="cat-in"> </label> <a href="#">Mua ngay </a></span>
                    </div>
                <?php                 
                $last = ($i==3) ? null : $last;
                $i++;
                endforeach; 
                ?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-m-left">
        <div class="in-left">				
            <p class="code">Cool COLLECTIONS</p>		
            <div class="cool">		
            </div>		
        </div>
        <?php foreach ($promote as $k => $v): ?>
        <div class="discount">
            <a href="#"><img class="img-responsive pic-in" src="<?php echo $v->image ?>" alt="" ></a>		
            <p class="no-more">Exclusive <b>discount</b> <span>Womens wear</span></p>					
            <a href="#" class="know-more">know more</a>
        </div>
        <?php endforeach; ?>
        
        <div class="twitter-in">
            <h5>TWITTER  UPDATES</h5>
            <span class="twitter-ic">	</span>
            <div class="up-date">
                <p>@suniljoshi Looks like nice and dicent design</p>
                <a href="#">http://bit.ly/sun</a>
                <p class="ago">About 1 hour ago via twitterfeed</p>
            </div>
            <div class="up-date">
                <p>@suniljoshi Looks like nice and dicent design</p>
                <a href="#">http://bit.ly/sun</a>
                <p class="ago">About 1 hour ago via twitterfeed</p>
            </div>
            <a href="#" class="tweets">More Tweets</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="lady-in-on">
    <div class="buy-an">
        <h3>OTHER PRODUCTS</h3>
        <p>Check our all latest products in this section.</p>
    </div>
    <ul id="flexiselDemo1">
        <?php foreach ($others as $k => $v): ?>
        <li>
            <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>">
                <img class="img-responsive women" src="<?php echo $v->image; ?>" alt="<?php echo $v->name ?>" width="200">
            </a>
            <div class="hide-in">
                <p><?php echo $v->name ?></p>
                <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>  |  <a href="#">Shop ngay </a></span>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <script type="text/javascript">
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.flexisel.js"></script>
</div>