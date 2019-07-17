<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MerchandiseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '已签收';
$this->params['breadcrumbs'][] = ['label' => 'Merchandises', 'url' => ['pocket']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="/images/logo.png"> <!--网站图标--->
</head>
<?php
     foreach ($pockets as $pocket) {

    switch ($pocket['beginning']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $pocket['beginning'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $pocket['beginning'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $pocket['beginning'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $pocket['beginning'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
    switch ($pocket['nowNode']) {
        case 'resource:org.exchangeMerchandises.TheNode#1':
            $pocket['nowNode'] = '【已揽件】【收件员xxx】已收件';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#2':
            $pocket['nowNode'] = '【运输中】由【中转站甲】送往【中转站乙】';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#3':
           $pocket['nowNode'] = '【运输中】由【中转站乙】送往【中转站丙】';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#4':
            $pocket['nowNode'] = '【运输中】正在等待投递';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#5':
           $pocket['nowNode'] = '【派送中】正在派送';
            # code...
            break;
        default:
            # code...
            break;
    }
     switch ($pocket['destination']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $pocket['destination'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $pocket['destination'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $pocket['destination'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $pocket['destination'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
           // print_r($pocket);
        echo "<div style= \"background-color: rgb(247,247,247);margin-top: 20px;padding:30px; border-radius: 30px;  \">
            <p>
                订单号：",$pocket['merchandiseID'],"
            </p>

            <p>
                订单描述：",$pocket['merchandiseDescription'],"
            </p>

            <p>
               寄件人： ",$pocket['beginning'],"
            </p>
            <p>
               收件人： ",$pocket['destination'],"
            </p>
            <p>
               当前状态： 【已签收】
            </p>


        </div>
        ";
        }
        
?>

   
