<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Merchandise */

$this->title = '寄送快递';
$this->params['breadcrumbs'][] = ['label' => 'Merchandises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchandise-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
