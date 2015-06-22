<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Detilpenjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detilpenjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpenjualan')->textInput() ?>

    <?= $form->field($model, 'idbarang')->textInput() ?>

    <?= $form->field($model, 'jmlbarang')->textInput() ?>

    <?= $form->field($model, 'hrgsatuan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
