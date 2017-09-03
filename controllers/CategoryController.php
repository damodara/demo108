<?php

namespace app\controllers;
use app\models\Category;
use app\models\Post;
use Yii;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $hits = Post::find()->where(['']);
        return $this->render('index');
    }

}
