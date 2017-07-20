<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use circulon\widgets\ColumnListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container ">
<div class="category-view">

    <h2 class="centerBoxHeading h2BoxHeadingab"><?= Html::encode($this->title) ?></h2>


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>



    <?php ?>    <?= ColumnListView::widget([
        'dataProvider' => $dataProvider,
        'columns' => 3, // default : 1
        'itemView' => '_item',
        'pager' => [
            'firstPageLabel' => 'first',
            'lastPageLabel' => 'last',
            'prevPageLabel' => 'previous',
            'nextPageLabel' => 'next',
            'maxButtonCount' => 3,
        ],
        'layout' => "\n{items}\n{pager}",

//            'itemView' => function ($model, $key, $index, $widget) {
//                        return Html::a(Html::encode($model->name), ['view', 'id' => $model->id, 'category_id' => $model->category_id]);
//                    },

    ])

    ?>
    <?php  ?>

</div>
</div>