<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MerchandiseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '包裹运输情况';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<link rel="shortcut icon" href="/images/logo.png"> <!--网站图标--->
</head>
<div class="merchandise-index">

   <!--  <h3><?= Html::encode($this->title) ?></h3> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <!--   <p>
        <?= Html::a('寄送快递', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'summary'=>'', 
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'merchandiseID',
            'merchandiseDescription',
            [
                'label'=>'寄件地址',  
                'attribute' => 'beginning',  
                'value' => function ($model) {
                    $location = [
                        '1' => '天津',
                        '2' => '长春',
                        '3' => '兰州',
                        '4' => '江苏',
                        '5' => '云南',
                    ];
                 return $location[$model->beginning];
                },
            ],
            [
                'label'=>'收件地址',  
                'attribute' => 'destination',  
                'value' => function ($model) {
                    $location = [
                        '1' => '天津',
                        '2' => '长春',
                        '3' => '兰州',
                        '4' => '江苏',
                        '5' => '云南',
                    ];
                 return $location[$model->destination];
                },
            ],
            [
                'label'=>'当前位置',  
                'attribute' => 'nowNode',  
                'value' => function ($model) {
                    $location = [
                        '1' => '天津',
                        '2' => '长春',
                        '3' => '兰州',
                        '4' => '江苏',
                        '5' => '云南',
                    ];
                 return $location[$model->nowNode];
                },
            ],

            [ 
                'class' => 'yii\grid\ActionColumn', 
                'template' => '{view} {delete}' 
            ], 
        ],
    ]); ?>
</div>
