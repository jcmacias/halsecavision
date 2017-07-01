<?php

use yii\db\Migration;

/**
 * Handles adding fulldescription to table `product`.
 */
class m170701_151134_add_fulldescription_column_to_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('product', 'fulldescription', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('product', 'fulldescription');
    }
}
