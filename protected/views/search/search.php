<section>
    <!--Products grid -->
    <div class="col-m-on">
        <div class="in-line">
            <div class="para-all">
                <h3>Kết quả tìm kiếm: "<i><?php echo $kw; ?></i>"</h3>
            </div>

            <!-- START LOAD PRODUCTS -->
            <div class="lady-on">
                <?php foreach ($prodSearch as $k => $v): $img = str_replace('original', 'medium', $v->image); ?>
                    <div class="col-md-4 you-men">
                        <a href="<?php echo App()->controller->createUrl('product/detail', array('pid' => $v->id)); ?>"><img class="img-responsive pic-in" src="<?php echo $img; ?>" height="280" alt="<?php echo $v->name; ?>" ></a>
                        <?php if ($v->discount != 0): ?>
                            <div class=" you-onto">
                                <span>15<label>%</label></span>
                                <small>off</small>
                            </div>
                        <?php endif; ?>
                        <p><?php echo $v->name; ?></p>
                        <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"> </div>
            </div>
            <!-- END LOAD PRODUCTS-->
        </div>
    </div> <!-- WRAPPER PRODUCTS-->
    <!-- END PRODUCT GRID-->
</section>
