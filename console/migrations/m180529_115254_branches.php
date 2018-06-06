<?php

use yii\db\Migration;

/**
 * Class m180529_115254_branches
 */
class m180529_115254_branches extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('branches','companies_company_id','integer');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('branches','companies_company_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180529_115254_branches cannot be reverted.\n";

        return false;
    }
    */
}
