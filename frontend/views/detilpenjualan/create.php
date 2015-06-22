<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\grid\GridView;
use kartik\builder\TabularForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\Detilpenjualan */

$this->title = 'Create Detilpenjualan';
$this->params['breadcrumbs'][] = ['label' => 'Detilpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detilpenjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    //  $this->render('_form', [
    //     'model' => $model,
    // ]) ?>
    <?php 
	$form = ActiveForm::begin();
	echo TabularForm::widget([
	    'dataProvider'=>$dataProvider,
	    'form'=>$form,
	    'attributes'=>$model->formAttribs,
        'gridSettings'=>[
	        'floatHeader'=>true,
	        'panel'=>[
	            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Manage Books</h3>',
	            'type' => GridView::TYPE_PRIMARY,
	            'after'=> Html::a('<i class="glyphicon glyphicon-plus"></i> Add New', '#', ['class'=>'btn btn-success']) . ' ' . 
	                    Html::a('<i class="glyphicon glyphicon-remove"></i> Delete', '#', ['class'=>'btn btn-danger']) . ' ' .
	                    Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i> Save', ['class'=>'btn btn-primary'])
	        ]
	    ]   
	]);
	// Add other fields if needed or render your submit button
	echo '<div class="text-right">' . 
	     Html::submitButton('Submit', ['class'=>'btn btn-primary']) .
	     '<div>';
	ActiveForm::end();
     ?>

</div>
