<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container ">
<div class="category-index">

    <h2 class="centerBoxHeading h2BoxHeadingab"><?= Html::encode($this->title) ?></h2>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php  ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php  ?></div>
</div>