<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

?>
<!DOCTYPE html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="/images/logo.png"> <!--网站图标--->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all"/>

  <title>注册</title>

</head>
<body style=" background-image:url('/images/nku.jpg')">
    <div class="header">
        <div class="header-main">
               <h2 style="text-align: center;font-size: 30px;color: purple;">注册</h2>
            <div class="header-bottom">
                <div style="background-color: rgba(18,14,14,0.08); border-radius: 30px;">
                    <div class="header-right w3agile">
                        <div class="header-left-bottom agileinfo" style="padding: 20px;">
                             <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                            <?= $form->field($model, 'username')->label('用户名：')->textInput(['autofocus' => true,'placeholder'=>'请输入6~18位字符']) ?>

                            <?= $form->field($model, 'email')->label('邮箱：')->textInput(['autofocus' => true,'placeholder'=>'请输入您的常用邮箱'])?>

                            <?= $form->field($model, 'password')->label('密码：')->passwordInput(['placeholder'=>'请输入6~18位英文字母、数字']) ?>

                            <div class="form-group">
                                 <?= Html::submitButton('注册', ['class' => 'btn btn-success','name' => 'signup-button','style' => 'background-color:rgb(191,255,224);width:455px;height:40px;font-size:15px;']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
            </div>
        </div>       
    </div>
</div>
</body>