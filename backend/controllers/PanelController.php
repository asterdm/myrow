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
        
//        $data['id'] = $box->id;
//        $data['user_cod'] = $box->user_cod;
//        $data['status'] = $box->status;
//        $data['time'] = $box->time;
        
        return $this->render('manager',$box->getAttributes());
    }
    
    public function actionNext() {
        // меняем статус бокса на free, если было waiting или work то клиенту done
        $number = Yii::$app->request->post('box_id');
        
        
        $box = Boxes::findOne($number);
        $user_cod = $box->user_cod;
        $box->status = 'free';
        $box->user_cod = '';
        $box->time =  date('H:i:s');
        $box->update(FALSE);
        
        if ($user_cod) {
            $client = Clients::findOne($box->user_id);
            $client->status = 'done';
            $client->update(FALSE);
        }
 
    }
    
    public function actionWork() {
        // меняем статус бокса и клиента на working
        
        $number = Yii::$app->request->post('box_id');
        
        $box = Boxes::findOne($number);
        $box->status = 'working';
        $box->time =  date('H:i:s');
        $box->update(FALSE);
        
        $client = Clients::findOne($box->user_id);
        if ($client) {
            $client->status = 'working';
            $client->update(FALSE);
        }
    }
    
    public function actionDeactiv() {
        // меняем статус бокса на deactiv
        $number = Yii::$app->request->post('box_id');
        
        $box = Boxes::findOne($number);
        $box->status = 'deactiv';
        $box->user_cod = '';
        $box->time =  date('H:i:s');
        $box->update(FALSE);
        
    }
    
    public function actionBoxitems() {
        
        Yii::$app->request->post('box_id');
        
        $box = Boxes::findOne($number);
        
        echo json_encode($box->getAttributes());die;
        
        
    }

}
