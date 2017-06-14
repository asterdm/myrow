<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Boxes;
use app\models\Clients;

class PanelController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $number = Yii::$app->request->get('number');
        
        $box = Boxes::findOne($number);
        //var_dump($box);die;
        
        $data['id'] = $box->id;
        $data['user_id'] = $box->user_id;
        $data['status'] = $box->status;
        $data['time'] = $box->time;
        return $this->render('manager',$data);
    }

}
