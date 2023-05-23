<?php

namespace app\controllers;
use app\models\Obat075;
use yii\data\ActiveDataProvider;

class Obat075Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => obat075::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
?>