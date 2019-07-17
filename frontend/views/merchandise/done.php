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
           // print_r($history);
        echo "<div>
            <p>
                ",$history['merchandiseID'],"
            </p>

            <p>
                ",$history['merchandiseDescription'],"
            </p>

            <p>
                ",$history['beginning'],"
            </p>
            <p>
                ",$history['destination'],"
            </p>
            <p>
                ",$history['nowNode'],"
            </p>

        </div>
        ";
        }
        
    ?>
   
