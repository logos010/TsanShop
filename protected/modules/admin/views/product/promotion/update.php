<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotion'=>array('/admin/product/promotion'),
	$model->name. ' - Update',
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
	array('label'=>'Create Promotion', 'url'=>array('create')),
	array('label'=>'View Promotion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Promotion', 'url'=>array('admin')),
);
?>

<h1>Update Promotion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'term' => $term)); ?>