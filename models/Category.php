<?php
/**
 * Created by PhpStorm.
 * User: DDas
 * Date: 001 01.09.17
 * Time: 20:06
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getPost()
    {
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }
}