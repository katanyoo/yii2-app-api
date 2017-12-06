<?php

use yii\db\Migration;

/**
 * Handles the creation of table `country`.
 */
class m171206_041909_create_country_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }
}
