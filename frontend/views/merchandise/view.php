<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Merchandise */

$this->title = $model->merchandiseID;
$this->params['breadcrumbs'][] = ['label' => 'Merchandises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchandise-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'merchandiseID',
            'merchandiseDescription',
            [
                'label'=>'收件人',  
                'attribute' => 'destination',  
                'value' => function ($model) {
                    $person = [
                        '18' => '汶汶',
                        '19' => '峰峰',
                        '20' => '阳阳',
                        '21' => '飞飞',
                    ];
                 return $person[$model->destination];
                },
            ],
            [
                'label'=>'当前状态',  
                'attribute' => 'nowNode',  
                'value' => function ($model) {
                    $location = [
                        '1' => '【已揽件】【收件员xxx】已收件',
                        '2' => '【运输中】由【中转站甲】送往【中转站乙】',
                        '3' => '【运输中】由【中转站乙】送往【中转站丙】',
                        '4' => '【运输中】正在等待投递',
                        '5' => '【派送中】正在派送',
                    ];
                 return $location[$model->nowNode];
                },
            ],
        ],
    ]) ?>

</div>
