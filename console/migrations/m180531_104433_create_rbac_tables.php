<?php

use yii\db\Migration;

/**
 * Class m180531_104433_create_rbac_tables
 */
class m180531_104433_create_rbac_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180531_104433_create_rbac_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180531_104433_create_rbac_tables cannot be reverted.\n";

        return false;
    }
    */
}
