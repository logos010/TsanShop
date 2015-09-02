<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>	  
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php foreach ($menu as $k => $v): ?>
                    <?php
                    $subMenu = $v->hasChild($v->id);
                    if (!empty($subMenu)):
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $v->name; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($subMenu as $sk => $sv): ?>
                                    <li><a href="<?php echo App()->controller->createUrl($sv->url); ?>"><?php echo $sv->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li id="<?php echo $v->id; ?>">
                            <a href="<?php echo App()->createUrl($v->url); ?>"><?php echo $v->name; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <form class="navbar-form navbar-left pull-right" id="searchForm" action="<?php echo App()->controller->createUrl('search/searchInBasic'); ?>" role="search">
                <div class="form-group">
                    <input type="text" id="search" name="kw" class="form-control" placeholder="Tìm kiếm">
                </div>
            </form>  
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<script type="text/javascript">
    $(document).ready(function () {
        $('#search').on('keypress', function (event) {
            if (event.which === 13) {
                $("form#searchForm").submit();
            }
        });
    });
</script>