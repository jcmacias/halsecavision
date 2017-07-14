<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchase".
 *
 * @property integer $id
 * @property integer $qty
 * @property string $customer_name
 * @property string $address
 * @property string $company
 * @property integer $phone
 * @property string $email
 * @property string $purchasecol
 *
 * @property ProductHasPurchase[] $productHasPurchases
 * @property Product[] $products
 */
class Purchase extends \yii\db\ActiveRecord
{
    public $product_code;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'phone','email'], 'required'],
            [['id', 'qty'], 'integer'],
            [['customer_name', 'address', 'company', 'phone'], 'string', 'max' => 45],
            ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'qty' => 'Qty',
            'customer_name' => Yii::t('app','Customer Name'),
            'address' => Yii::t('app','Address'),
            'company' => Yii::t('app','Company'),
            'phone' => Yii::t('app','Phone'),
            'email' => Yii::t('app','Email'),
            'purchasecol' => 'Purchasecol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductHasPurchases()
    {
        return $this->hasMany(ProductHasPurchase::className(), ['purchase_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])->viaTable('product_has_purchase', ['purchase_id' => 'id']);
    }
}
