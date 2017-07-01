<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination = ['defaultPageSize' => 8];



        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @param integer $category_id
     * @return mixed
     */
    public function actionView($id, $category_id)
    {
        $product = new Product();
        $related = $product->getRelated($category_id);
        return $this->render('view', [
            'model' => $this->findModel($id, $category_id),
            'related'=> $related
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post())) {
            $form=Yii::$app->request->post();
            $model->featured=(int)$form['Product']['featured'];
            $upload_pdf = $model->uploadPDF();
            $upload_file = $model->uploadFile();

            var_dump($model->validate());
            if ($model->validate()) {
                if($model->save()) {

                    if ($upload_file !== false) {
                        $path = $model->getUploadedFile();
                        $upload_file->saveAs($path);
                    }
                    if ($upload_pdf !== false) {
                        $path1 = $model->getUploadPDF();
                        $upload_pdf->saveAs($path1);
                    }

                    return $this->redirect(['view', 'id' => $model->id, 'category_id' => $model->category_id]);
                }

            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $category_id
     * @return mixed
     */
    public function actionUpdate($id, $category_id)
    {
        $model = $this->findModel($id, $category_id);

        if ($model->load(Yii::$app->request->post())) {
            $form=Yii::$app->request->post();
            $model->featured=(int)$form['Product']['featured'];
            if($model->save()){

                return $this->redirect(['view', 'id' => $model->id, 'category_id' => $model->category_id]);
            }


        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $category_id
     * @return mixed
     */
    public function actionDelete($id, $category_id)
    {
        $this->findModel($id, $category_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $category_id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $category_id)
    {
        if (($model = Product::findOne(['id' => $id, 'category_id' => $category_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
