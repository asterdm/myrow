<?php



namespace backend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Boxes;

/**
 * Description of newPHPClass
 *
 * @author yugin
 */
class BoxController extends Controller {
    
    //public $layout;
    
    public function actionIndex(){
        
        $box_number = Yii::$app->request->get('number');
        if (empty($box_number )) {
            $box_number = 1;
        }
        $boxe = new Boxes;
        
        //var_dump($boxes::find()->asArray()->all()[0]);        die();
        
        $data['boxe']  = $boxe::find()->where(['id' => $box_number])->asArray()->one();
        
        
        $this->layout = 'window';

    return $this->render('box',$data);
    
    }
    
    public function actionRefresh(){
        
     
    
    }
}
