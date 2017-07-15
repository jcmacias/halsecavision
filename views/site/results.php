<?php
/**
 * Created by PhpStorm.
 * User: jcmac
 * Date: 7/14/2017
 * Time: 7:59 PM
 */
use yii\helpers\Html;
use circulon\widgets\ColumnListView;
$this->title = Yii::t('app','Search Results');
?>

<div class="container">
    <div class="product-index">

        <h2 class="centerBoxHeading h2BoxHeadingab"><?= Html::encode($this->title) ?></h2>

<?php
echo ColumnListView::widget([
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

]);
