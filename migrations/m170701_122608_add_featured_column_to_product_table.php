<?php

use yii\db\Migration;

/**
 * Handles adding featured to table `product`.
 */
class m170701_122608_add_featured_column_to_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('product', 'featured', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('product', 'featured');
    }
}
