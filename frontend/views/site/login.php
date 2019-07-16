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
<link rel="shortcut icon" href="/images/logo.png"> <!--网站图标--->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all"/>

  <title>登录</title>

</head>
<body style=" background-image:url('/images/nku.jpg')">
    <div class="header">
        <div class="header-main">
               <h2 style="text-align: center;font-size: 30px;color: purple;">登录</h2>
            <div class="header-bottom">
                <div style="background-color: rgba(18,14,14,0.08); border-radius: 30px;">
                    <div class="header-right w3agile">
                        <div class="header-left-bottom agileinfo" style="padding: 20px;">
                             <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                <?= $form->field($model, 'username')->label('用户名：',['style'=>['float'=>'left','margin-top'=>'5px','color' => 'purple']])->textInput(['autofocus' => true])?>

                                <?= $form->field($model, 'password')->label('密码：',['style'=>['float'=>'left','margin-top'=>'10px','color' => 'purple']])->passwordInput() ?>

                               <!--  <?= $form->field($model, 'rememberMe')->checkbox(['label'=>'记住我']) ?> -->

                                <div class="form-group">

                                    <div style = "background-color:rgb(191,255,224);width:455px;height:35px;margin-bottom:5px;">
                                        <a href="/site/signup" style="margin-left: 210px;">
                                            注册
                                        </a>
                                    </div>
                                    <?= Html::submitButton('登录', ['class' => 'btn btn-success','name' => 'login-button','style' => 'background-color:rgb(191,255,224);width:455px;height:40px;font-size:15px;']) ?>
                                           
                                </div>

                                <?php ActiveForm::end(); ?>
                        </div>
                    </div>
            </div>
        </div>       
    </div>
</div>
</body>