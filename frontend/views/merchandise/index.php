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

         $beginning = null;
         $destination = null;
         $nowNode = null;
    switch ($model->category_id) {
        case '1':
            $category = '学术活动';
            # code...
            break;
        case '2':
            $category = '纪念活动';
            # code...
            break;
        case '3':
            $category = '发展活动';
            # code...
            break;
        case '4':
            $category = '文体活动';
            # code...
            break;
        case '5':
            $category = '校友活动';
            # code...
            break;
        default:
            # code...
            break;
    }
           // print_r($trans);
        echo "<div>
            <p>
                ",$trans['merchandiseID'],"
            </p>

            <p>
                ",$trans['merchandiseDescription'],"
            </p>

            <p>
                ",$trans['beginning'],"
            </p>
            <p>
                ",$trans['destination'],"
            </p>
            <p>
                ",$trans['nowNode'],"
            </p>

        </div>
        ";
        }
        
?>
   
