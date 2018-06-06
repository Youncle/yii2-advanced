<?php

use yii\db\Migration;

/**
 * Class m180529_115550_departments
 */
class m180529_115550_departments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('departments','branches_branch_id','integer');
        $this->addColumn('departments','companies_company_id','integer');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('departments','companies_company_id');
        $this->dropColumn('departments','branches_branch_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180529_115550_departments cannot be reverted.\n";

        return false;
    }
    */
}
