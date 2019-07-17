<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MerchandiseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '确认收货';
$this->params['breadcrumbs'][] = ['label' => 'Merchandises', 'url' => ['confirm']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="/images/logo.png"> <!--网站图标--->
</head>
<?php
     foreach ($confirms as $confirm) {

    switch ($confirm['beginning']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $confirm['beginning'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $confirm['beginning'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $confirm['beginning'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $confirm['beginning'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
    switch ($confirm['nowNode']) {
        case 'resource:org.exchangeMerchandises.TheNode#1':
            $confirm['nowNode'] = '【已揽件】【收件员xxx】已收件';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#2':
            $confirm['nowNode'] = '【运输中】由【中转站甲】送往【中转站乙】';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#3':
           $confirm['nowNode'] = '【运输中】由【中转站乙】送往【中转站丙】';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#4':
            $confirm['nowNode'] = '【运输中】正在等待投递';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#5':
           $confirm['nowNode'] = '【派送中】正在派送';
            # code...
            break;
        default:
            # code...
            break;
    }
     switch ($confirm['destination']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $confirm['destination'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $confirm['destination'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $confirm['destination'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $confirm['destination'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
           // print_r($confirm);
        echo "<div style= \"background-color: rgb(247,247,247);margin-top: 20px;padding:30px; border-radius: 30px;  \">
            <p>
                订单号：",$confirm['merchandiseID'],"
            </p>

            <p>
                订单描述：",$confirm['merchandiseDescription'],"
            </p>

            <p>
               寄件人： ",$confirm['beginning'],"
            </p>
            <p>
               收件人： ",$confirm['destination'],"
            </p>
            <p>
               当前状态： ",$confirm['nowNode'],"
            </p>


        </div>
        ";
        }
        
?>
    <!---确认收货-->
<div class="merchandise-confirm">
    
     <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '确认收货！' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

   
