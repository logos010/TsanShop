<?php
$this->pageTitle = 'View Galleries #' . $model->id; 
$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->name,
);
?>
<div style="display: none" class="alert alert-success alert-dismissable" id="delete_msg">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    BrandBase ID #<?php echo $model->id ?> has been deleted.</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3><?php echo $this->pageTitle; ?></h3>
    </div>
    <div class="panel-body">
        <?php $this->widget('zii.widgets.CDetailView',array(
            'data'=>$model,
            'cssFile' => App()->theme->baseUrl . '/css/yii.css',
            'attributes'=>array(
            		'id',
		'pid',
		'name',
		'uri',
		'width',
		'height',
		'filesize',
		'create_time',
            ),
            )); ?>
            <div class="form-actions text-center">
                <?php echo CHtml::link('Update', array('update', 'id' => $model->id, 'ajax' => $_GET['ajax']), array('class' => 'btn btn-primary', 'id' => 'update')); ?>                <?php echo CHtml::link('Delete', array('delete', 'id' => $model->id), array('class' => 'btn btn-danger', 'id' => 'delete')); ?>            </div>
   </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#delete').bind('click', function() {
            if (!confirm('Are you sure you want to delete this item ?'))
                return false;
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: $(this).attr('href') + '?ajax=1',
            }).done(function(data) {
                $('div.panel').toggle();
                $('#delete_msg').html(data.msg).toggle();
            });
            return false;
        });
    });
</script>