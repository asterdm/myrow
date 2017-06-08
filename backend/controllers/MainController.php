<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Boxes;
use \app\models\Clients;

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

    return $this->render('index', $data);
    }
    
    public function actionWindow() {
        
       
        
        return $this->render('window');
        
    }
    
}
