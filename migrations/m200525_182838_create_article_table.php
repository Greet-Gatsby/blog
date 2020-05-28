<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m200525_182838_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(),
            'category' =>$this->string(),
            'description' =>$this->string(),
            'text' =>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article}}');
    }
}
