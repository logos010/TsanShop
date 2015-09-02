<?php if (!empty($products)): ?>    
    <div class="lady-in">
        <?php
        $i = 1;
        $last = null;
        foreach ($products as $k => $v):
            if ($i % 3 == 0) {
                $last = ' para-grid';
            }
            ?>
            <div class="col-md-4 you-para <?php echo $last; ?>">
                <a href="<?php echo App()->createUrl('product/detail', array('pid' => $v->id)); ?>">
                    <img class="img-responsive pic-in" src="<?php echo $v->image; ?>" alt=" " >
                </a>
                <?php if ($v->discount != 0): ?>
                    <div class="you-in">
                        <span>15<label>%</label></span>
                        <small>off</small>
                    </div>
                <?php endif; ?>
                <p><?php echo $v->name; ?></p>
                <span><?php echo number_format($v->price, 0, '', ',') ?> <sup>đ</sup>
                    <!--| <label class="cat-in"> </label>--> 
                    <!--<a href="javascript:void(0)" class="add-to-cart" id="<?php echo $v->id; ?>">Mua ngay</a>-->                    
                </span>
            </div>
            <?php
            $last = ($i == 3) ? null : $last;
            $i++;
        endforeach;
        ?>
        <div class="clearfix"></div>
    </div>
<?php endif; ?>