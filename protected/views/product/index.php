<?php
$this->breadcrumbs = array(
    'Sản phẩm'
);

$this->menu = array(
    array('label' => 'Create Product', 'url' => array('create')),
    array('label' => 'Manage Product', 'url' => array('admin')),
);
?>
<link href="<?php echo App()->theme->baseUrl; ?>/css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all" />
<script src="<?php echo App()->theme->baseUrl; ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.bxslider').bxSlider();
    });
</script>

<div class="women-in">
    <div class="col-md-9 col-d">
        <?php $promotion_one = UtiService::getPromotion(1); ?>
        <?php if (!empty($promotion_one)): ?>
            <div class="banner">
                <ul class="bxslider">
                    <?php foreach ($promotion_one as $k => $v): ?>
                        <li>
                            <a href="<?php echo App()->controller->createUrl($promotion_one->url); ?>">
                                <img src="<?php echo $v->image ?>" class="img-responsive" alt="<?php echo $v->alias ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <!---->
        <div class="in-line">
            <?php if (!empty($products_new)): ?>
                <div class="para-an">
                    <h3>Sản Phẩm Mới Nhất</h3>
                    <p>Check our all latest products in this section.</p>
                </div>

                <?php
                $this->widget("application.components.ProductNewFavourite", array(
                    "status" => 1
                ));
                ?>
            <?php endif; ?>
        </div>

        <div class="in-line"> 
            <div class="para-an">
                <h3>Sản Phẩm Bán Chạy Nhất</h3>
                <p>Check our all latest products in this section.</p>
            </div>
            <?php
            $this->widget("application.components.ProductNewFavourite", array(
                "status" => 2
            ));
            ?>
        </div>
    </div>
    <div class="col-md-3 col-m-left">
        <?php
        //get promotion products
        $promotion_two = UtiService::getPromotion(2);
        ?>
        <div class="in-left">	
            <?php if (!empty($promotion_two)): ?>
                <a href="<?php echo App()->controller->createUrl($promotion_two->url); ?>">
                    <img src="<?php echo $promotion_two->image ?>" alt="<?php echo $promotion_two->alias ?>" class="img-responsive pic-in" />
                </a>
            <?php endif; ?>
        </div>
        <?php if (!empty($promote)): ?>
            <?php foreach ($promote as $k => $v): ?>
                <div class="discount">
                    <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)) ?>">
                        <img class="img-responsive pic-in" src="<?php echo $v->image ?>" alt="" >
                    </a>		
                    <p class="no-more">Exclusive <b>discount</b> <span>Womens wear</span></p>					
                    <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)) ?>" class="know-more">know more</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
    <div class="clearfix"> </div>
</div>

<div class="lady-in-on">
    <?php if (!empty($others)): ?>
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
                        <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>
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
            $("a.add-to-cart").on('click', function () {
                $.ajax({
                    url: "<?php echo App()->controller->createUrl('/order/addToCart'); ?>",
                    type: 'post',
                    data: "pid=" + $(this).attr('id') + "&quantity=1&size=L",
                    success: function (items) {
                        //$("#shopping-item").html("(" + items + ")");
                        console.log(items);
                    },
                    complete: function () {
                        //bootbox.alert("'<strong>Sản phẩm</strong>' của bạn đã được đưa vào giỏ hàng.");
                    }
                });
            });
        </script>
        <script type="text/javascript" src="<?php echo App()->theme->baseUrl; ?>/js/jquery.flexisel.js"></script>
    <?php endif; ?>
</div>