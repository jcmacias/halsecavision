<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use circulon\widgets\ColumnListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="product-index">

        <h2 class="centerBoxHeading"><?= Html::encode($this->title) ?></h2>
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php Pjax::begin(); ?>    <?= ColumnListView::widget([
            'dataProvider' => $dataProvider,
            'columns' => 3, // default : 1
            'itemView' => '_item',
//            'itemView' => function ($model, $key, $index, $widget) {
//                        return Html::a(Html::encode($model->name), ['view', 'id' => $model->id, 'category_id' => $model->category_id]);
//                    },

        ])

//        ListView::widget([
//            'dataProvider' => $dataProvider,
//            'itemOptions' => ['class' => 'item'],
//            'itemView' => function ($model, $key, $index, $widget) {
//                return Html::a(Html::encode($model->name), ['view', 'id' => $model->id, 'category_id' => $model->category_id]);
//            },
//        ])
        ?>
        <?php Pjax::end(); ?></div>
</div>

