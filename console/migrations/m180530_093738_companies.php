<?php

use yii\db\Migration;

/**
 * Class m180530_093738_companies
 */
class m180530_093738_companies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('companies','company_start_date','date');
        $this->addColumn('companies','logo','varchar(200)');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('companies','logo');
        $this->dropColumn('companies','company_start_date');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180530_093738_companies cannot be reverted.\n";

        return false;
    }
    */
}
