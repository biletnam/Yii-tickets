<?php
$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Tickets','url'=>array('index')),
	array('label'=>'Create Tickets','url'=>array('create')),
	array('label'=>'View Tickets','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Tickets','url'=>array('admin')),
	);
	?>

<h1>Update Tickets <?php echo $model->id; ?> </h1>
<?php if(Yii::app()->user->checkAccess('admin') == true): ?>
	<?php echo $this->renderPartial('_formManager',array('model'=>$model)); ?>
<?php else: ?>
	<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
<?php endif; ?>