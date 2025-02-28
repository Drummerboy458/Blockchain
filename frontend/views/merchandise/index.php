<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MerchandiseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '运输中';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="/images/logo.png"> <!--网站图标--->
</head>
<?php
     foreach ($transports as $trans) {

    switch ($trans['beginning']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $trans['beginning'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $trans['beginning'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $trans['beginning'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $trans['beginning'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
    switch ($trans['nowNode']) {
        case 'resource:org.exchangeMerchandises.TheNode#1':
            $trans['nowNode'] = '【已揽件】【收件员xxx】已收件';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#2':
            $trans['nowNode'] = '【运输中】由【中转站甲】送往【中转站乙】';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#3':
           $trans['nowNode'] = '【运输中】由【中转站乙】送往【中转站丙】';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#4':
            $trans['nowNode'] = '【运输中】正在等待投递';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#5':
           $trans['nowNode'] = '【派送中】正在派送';
            # code...
            break;
        default:
            # code...
            break;
    }
     switch ($trans['destination']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $trans['destination'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $trans['destination'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $trans['destination'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $trans['destination'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
           // print_r($trans);
        echo "<div style= \"background-color: rgb(247,247,247);margin-top: 20px;padding:30px; border-radius: 30px;  \">
            <p>
                订单号：",$trans['merchandiseID'],"
            </p>

            <p>
                订单描述：",$trans['merchandiseDescription'],"
            </p>

            <p>
               寄件人： ",$trans['beginning'],"
            </p>
            <p>
               收件人： ",$trans['destination'],"
            </p>
            <p>
               当前状态： ",$trans['nowNode'],"
            </p>

        </div>
        ";
        }
        
?>
   
