<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use circulon\widgets\ColumnListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app','Products');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="product-index">

        <h2 class="centerBoxHeading h2BoxHeadingab"><?= Html::encode($this->title) ?></h2>
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>

        <?php if(!Yii::$app->user->isGuest){?>
        <p>
            <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php }?>

            <?= ColumnListView::widget([
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
            'layout' => "{items}\n{pager}",

//            'itemView' => function ($model, $key, $index, $widget) {
//                        return Html::a(Html::encode($model->name), ['view', 'id' => $model->id, 'category_id' => $model->category_id]);
//                    },

        ])

        ?>

    </div>
</div>

