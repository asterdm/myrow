<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Boxes;
use app\models\Clients;

/**
 * Description of MainController
 *
 * @author yugin
 */
class MainController extends Controller {

    public function actionIndex(){
        // получаем данные по боксам и очереди
        
        $boxes = new Boxes;
        $clients = new Clients;
        //var_dump($boxes::find()->asArray()->all()[0]);        die();
        
        $data['boxes']  = $boxes::find()->asArray()->all();
        $data['clients']  = $clients::find()->asArray()->all();
        $data['time'] = date('H:i:s');

    return $this->render('index', $data);
    }
    
    public function actionRefresh() {
        
        // найти свободный бокс
        // найти первого в очереди
        // добавить номер клиента в свободный бокс и поменять статус на ожидание
        //$boxe = new Boxes;        
        $free_box = Boxes::find()
                ->where(['status' => 'free'])
                ->one();
        //var_dump($free_box);die;
        if (!$free_box) {
           return $this->redirect('http://myrow/admin/main');
        }

        //$clients = new Clients;
        $free_client = Clients::find()
                ->where(['status' => 'new'])
                ->orderBy('id')
                ->one();
        
        $free_box->status = 'waiting';
        $free_box->time = date('H:i:s');
        $free_box->user_id = $free_client->user_cod;
        $free_box->update(FALSE);
        
        $free_client->status = 'waiting';
        $free_client->box_id = $free_box->id ;
        $free_client->update(FALSE);
        
        return $this->redirect('http://myrow/admin/main');
        
        
        
    }
    
}
