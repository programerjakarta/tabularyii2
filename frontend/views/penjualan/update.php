<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penjualan */

$this->title = 'Update Penjualan: ' . ' ' . $model->idpenjualan;
$this->params['breadcrumbs'][] = ['label' => 'Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpenjualan, 'url' => ['view', 'id' => $model->idpenjualan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
