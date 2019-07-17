<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MerchandiseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '历史签收';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="/images/logo.png"> <!--网站图标--->
</head>
    <?php
     foreach ($histories as $history) {

    switch ($history['beginning']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $history['beginning'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $history['beginning'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $history['beginning'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $history['beginning'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
     switch ($history['destination']) {
        case 'resource:org.exchangeMerchandises.TheNode#18':
            $history['destination'] = '汶汶';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#19':
            $history['destination'] = '峰峰';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#20':
            $history['destination'] = '阳阳';
            # code...
            break;
        case 'resource:org.exchangeMerchandises.TheNode#21':
            $history['destination'] = '飞飞';
            # code...
            break;
        default:
            # code...
            break;
    }
           // print_r($history);
        echo "<div style= \"background-color: rgb(247,247,247);margin-top: 20px;padding:30px; border-radius: 30px;  \">
            <p>
                订单号：",$history['merchandiseID'],"
            </p>

            <p>
                订单描述：",$history['merchandiseDescription'],"
            </p>

            <p>
               寄件人： ",$history['beginning'],"
            </p>
            <p>
               收件人： ",$history['destination'],"
            </p>
            <p>
               当前状态： 【已签收】",$history['destination'],"已收到您的包裹~
            </p>

        </div>
        ";
        }
        
?>