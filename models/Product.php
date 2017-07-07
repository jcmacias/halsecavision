<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $image
 * @property integer $qty_store
 * @property integer $featured
 * @property integer $fulldescription
 * @property double $price
 * @property integer $category_id
 *
 * @property Category $category
 * @property ProductHasPurchase[] $productHasPurchases
 * @property Purchase[] $purchases
 */
class Product extends \yii\db\ActiveRecord
{

    public $upload_file;
    public $upload_pdf;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'description', 'category_id'], 'required'],
            [['id', 'qty_store', 'category_id'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['code'], 'string', 'max' => 45],
            [['name', 'image'], 'string', 'max' => 255],
            [['code'], 'unique'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['upload_file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['upload_pdf'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
            'featured'=>'Featured',
            'upload_file' => 'Upload File',
            'fulldescription'=>'Full description',
            'upload_pdf'=>'Full description PDF',
            'qty_store' => 'Qty Store',
            'price' => 'Price',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductHasPurchases()
    {
        return $this->hasMany(ProductHasPurchase::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchases()
    {
        return $this->hasMany(Purchase::className(), ['id' => 'purchase_id'])->viaTable('product_has_purchase', ['product_id' => 'id']);
    }

    public function uploadFile() {
        // get the uploaded file instance
        $image = UploadedFile::getInstance($this, 'upload_file');

        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }

        // generate random name for the file
        $this->image = time(). '.' . $image->extension;

        // the uploaded image instance
        return $image;
    }

//    public function uploadUpdateFile() {
//        // get the uploaded file instance
//        $image = UploadedFile::getInstance($this, 'upload_file');
//
//        // if no image was uploaded abort the upload
//        if (empty($image)) {
//            return $this->image;
//        }
//
//        // generate random name for the file
//        $this->image = time(). '.' . $image->extension;
//
//        // the uploaded image instance
//        return $image;
//    }

    public function getUploadedFile() {
        // return a default image placeholder if your source avatar is not found
        $pic = isset($this->image) ? $this->image : 'default.png';
        return Yii::$app->params['fileUploadUrl'] . $pic;
    }

    public function uploadPDF() {
        $pdf = UploadedFile::getInstance($this, 'upload_pdf');

        if (empty($pdf)) {
            return false;
        }

        $this->fulldescription = time().'.'.$pdf->extension;

        return $pdf;
    }

//    public function uploadUpdatePDF() {
//        $pdf = UploadedFile::getInstance($this, 'upload_pdf');
//
//        if (empty($pdf)) {
//
//            return $this->fulldescription;
//        }
//
//        $this->fulldescription = time().'.'.$pdf->extension;
//
//        return $pdf;
//    }

    public function getUploadPDF () {
        $file = isset($this->fulldescription) ? $this->fulldescription : 'none';
        return Yii::$app->params['pdfUploadUrl'] . $file;
    }

     public function getRelated($cat) {

         $query = $this->find()->where(['category_id' => $cat]);

         $provider = new ActiveDataProvider([

             'query' => $query,
             'pagination' => [
                 'pageSize' => 6,
             ],


         ]);

         return $provider;
     }

     public function getFeatured () {
         $query = $this->find()->where(['featured' => 1]);

         $provider = new ActiveDataProvider([
             'query'=> $query,
             'pagination' => [
                 'pageSize' => 8
             ],
         ]);

         return $provider;
     }

}
