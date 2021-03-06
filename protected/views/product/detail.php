<?php
cssFile(App()->theme->baseUrl . "/css/easyzoom.css");
cssFile(App()->theme->baseUrl . "/css/pygments.css");
scriptFile(App()->theme->baseUrl . "/js/jquery.jscrollpane.min.js");

$this->breadcrumbs = array(
    'Sản phẩm'
);

$original = str_replace('medium', 'original', $product->image);
?>
<script src="<?php echo App()->theme->baseUrl; ?>/js/easyzoom.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" id="sourcecode">
    $(function ()
    {
        $('.scroll-pane').jScrollPane();
    });
</script> 

<!-- PRODUCT DETAIL-->
<div class="single">
    <div class="col-md-9">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                    <a href="<?php echo $original; ?>">
                        <img src="<?php echo $product->image; ?>" alt="" width="300" height="400" />
                    </a>
                </div>

                <ul class="thumbnails">
                    <?php
                    foreach ($gallery as $k => $v):
                        $medium = str_replace('original', 'medium', $v->uri);
                        $small = str_replace('original', 'small', $v->uri);
                        ?>
                        <li>
                            <a href="<?php echo BASE_URL . "/" . $v->uri; ?>" data-standard="<?php echo BASE_URL . "/" . $medium; ?>">
                                <img src="<?php echo BASE_URL . "/" . $small; ?>" alt="" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <li>
                        <a href="<?php echo $original; ?>" data-standard="<?php echo $product->image; ?>">
                            <img src="<?php echo $product->image; ?>" width="50" alt="" />
                        </a>
                    </li>
                </ul>                
                <div class="clearfix"></div>		
            </div> 
            <!---->
            <div class="span1_of_1_des">
                <div class="desc1">
                    <h3><?php echo $product->name ?></h3>
                    <p><?php echo $product->description; ?></p>
                    <h5><?php echo number_format($product->price, 0, '', ',') ?> <sup>đ</sup></h5>
                    <div class="available">
                        <h4>Tôi muôn mua:</h4>
                        <ul>
                            <li>Size:
                                <select name="product_size">
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>S</option>
                                    <option>M</option>
                                </select>
                            </li>
                            <li>Số lượng:
                                <select name="product_qty">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </li>
                        </ul>
                        <div class="form-in">
                            <!--<a href="javascript:void(0)" class="add-to-cart">Mua hàng</a>-->
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="share-desc">
                        <div class="share">
                            <h4>Share Product :</h4>
                            <ul class="share_nav">
                                <li><a href="#"><img src="<?php echo App()->theme->baseUrl; ?>/images/facebook.png" title="facebook"></a></li>
<!--                                <li><a href="#"><img src="<?php echo App()->theme->baseUrl; ?>/images/twitter.png" title="Twiiter"></a></li>
                                <li><a href="#"><img src="<?php echo App()->theme->baseUrl; ?>/images/rss.png" title="Rss"></a></li>
                                <li><a href="#"><img src="<?php echo App()->theme->baseUrl; ?>/images/gpluse.png" title="Google+"></a></li>-->
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!----- tabs-box ---->
        <div class="sap_tabs">	
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Thông tin sản phẩm</span></li>
                    <div class="clearfix"></div>
                </ul>				  	 
                <div class="resp-tabs-container">                    
                    <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                        <div class="facts">
                            <?php echo $product->description; ?>         
                        </div>
                    </div>
<!--                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="facts">									
                            <p > Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                            <ul >
                                <li>Multimedia Systems</li>
                                <li>Digital media adapters</li>
                                <li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
                            </ul>
                        </div>	
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="facts">									
                            <p > Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                            <ul >
                                <li>Multimedia Systems</li>                                
                                <li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
                            </ul>
                        </div>	
                    </div>-->
                </div>
            </div>
            <script src="<?php echo App()->theme->baseUrl; ?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
            </script>
        </div>
    </div>
    <!---->
    <div class="clearfix"> </div>
</div>

<script type="text/javascript">
    var $easyzoom = $('.easyzoom').easyZoom();
    // Get an instance API
    var api = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
    $(".thumbnails").on("click", "a", function (e) {
        var $this = $(this);
        e.preventDefault();
        // Use EasyZoom's `swap` method
        api.swap($this.data("standard"), $this.attr("href"));
    });

    $("a.add-to-cart").on('click', function () {
        var s = $("select[name='product_size']").val();
        var q = $("select[name='product_qty']").val();
        var productName = '<?php echo $product->name; ?>';

        $.ajax({
            url: "<?php echo App()->controller->createUrl('/order/addToCart'); ?>",
            type: 'post',
            data: "pid=<?php echo $product->id; ?>&quantity=" + q + "&size=" + s,
            success: function (items) {
                $("#shopping-item").html("(" + items + ")");
                
            },
            complete: function () {
                bootbox.alert("'<strong>" + productName + "</strong>' của bạn đã được đưa vào giỏ hàng.");
            }
        });
    });
</script>