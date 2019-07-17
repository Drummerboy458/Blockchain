<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Merchandise */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="merchandise-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'merchandiseDescription')->textInput(['maxlength' => true,'placeholder' => '请输入订单备注']) ?>

    <!-- <?= $form->field($model, 'beginning')->dropDownList(['18'=>'汶汶','19'=>'峰峰','20' => '阳阳','21' => '飞飞'],['prompt'=>'寄件人姓名'])?> -->

    <?= $form->field($model, 'destination')->dropDownList(['18'=>'汶汶','19'=>'峰峰','20' => '阳阳','21' => '飞飞'],['prompt'=>'收件人姓名'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '提交' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
