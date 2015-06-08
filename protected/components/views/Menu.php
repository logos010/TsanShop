<?php 
    $i=1; foreach ($menu as $k => $v):
        $active = $i==1 ? 'class="active"' : '';
?>    
    <li <?php echo $active ?>><a href="<?php echo App()->controller->createUrl($v->url); ?>"><?php echo $v->name; ?></a></li>
<?php $i++; endforeach; ?>





