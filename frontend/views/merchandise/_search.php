<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MerchandiseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merchandise-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'merchandiseID') ?>

    <?= $form->field($model, 'merchandiseDescription') ?>

    <?= $form->field($model, 'beginning') ?>

    <?= $form->field($model, 'destination') ?>

    <!-- <?= $form->field($model, 'nowNode') ?> -->

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
