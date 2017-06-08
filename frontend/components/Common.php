<?php
namespace frontend\component;

use  yii\base\Component;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common
 *
 * @author yugin
 */
class Common extends Component{
    
    public function SendMail() {
        
        Yii::$app->mail->compose()
     ->setFrom(['noreply@example.com' => 'My Example Site'])
     ->setTo([$form->email => $form->name])
     ->setSubject($form->subject)
     ->setTextBody($form->text)
     ->send();
    }
    
}
