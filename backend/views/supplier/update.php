<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Supplier */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Supplier',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Suppliers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="supplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>