<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '登录';

?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <title>登录</title>
  <link rel="shortcut icon" href="/images/logo3.png"> <!--网站图标--->
</head>
<body style=" background-image:url('/images/nku.jpg')">

    <div class="login-box">
    <div class="login-logo">
        <a><b style="color: purple;">登录</b>
    </div>
    <div class="login-box-body" style="background-color: rgba(18,14,14,0.08); border-radius: 30px;">
         <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->label('用户名：',['style'=>['float'=>'left','margin-top'=>'5px','color' => 'purple']])->textInput(['autofocus' => true])?>

                <?= $form->field($model, 'password')->label('密码：',['style'=>['float'=>'left','margin-top'=>'10px','color' => 'purple']])->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['label'=>'记住我']) ?>

                <div class="form-group">

                    <?= Html::submitButton('登录', ['class' => 'btn btn-success','name' => 'login-button','style' => 'background-image : linear-gradient(to bottom, #6280c4, #c782dc);']) ?>
                           
                </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>
</body>