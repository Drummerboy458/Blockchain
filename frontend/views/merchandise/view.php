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
        ],
    ]) ?>

</div>
