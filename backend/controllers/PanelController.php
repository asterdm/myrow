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
        $data['user_cod'] = $box->user_cod;
        $data['status'] = $box->status;
        $data['time'] = $box->time;
        return $this->render('manager',$data);
    }
    
    public function actionNext() {
        // меняем статус бокса на free, если было waiting или work то клиенту done
        $number = Yii::$app->request->post('box_id');
        
        $box = Boxes::findOne($number);
        $box->status = 'free';
        $box->update(FALSE);
        
        $client = Clients::findOne($box->user_id);
        if ($client) {
            $client->status = 'done';
            $client->update(FALSE);
        }
        
        
    }
    
    public function actionWork($box_id) {
        // меняем статус бокса и клиента на working
        
    }
    
    public function actionDeactiv($box_id) {
        // меняем статус бокса на deactiv
        
    }

}
