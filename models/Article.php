<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $category
 * @property string|null $description
 * @property string|null $text
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category', 'description'], 'string', 'max' => 255,],
            [['text'], 'string', 'max' => 5000,],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category' => 'Category',
            'description' => 'Description',
            'text' => 'Text',
        ];
    }
}
