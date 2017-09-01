<?php
/**
 * Created by PhpStorm.
 * User: DDas
 * Date: 031 31.08.17
 * Time: 23:50
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function actionIndex()
    {
        $model = Post::find()->all();
        return $this->render('index', ['model' => $model]);
    }
}