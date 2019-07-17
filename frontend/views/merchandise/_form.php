<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Merchandise */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merchandise-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'merchandiseDescription')->textInput(['maxlength' => true,'paceholder' => '请输入订单信息']) ?>

    <?= $form->field($model, 'beginning')->dropDownList(['1'=>'天津','2'=>'吉林长春','3' => '兰州','4' => '江苏','5' => '云南'],['prompt'=>'请填写发件人地址'])?>

    <?= $form->field($model, 'destination')->dropDownList(['1'=>'天津','2'=>'吉林长春','3' => '兰州','4' => '江苏','5' => '云南'],['prompt'=>'请填写收件人地址'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '提交' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
