<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php
    $form = ActiveForm::begin([
    'action' => 'site/about',   
    'id' => 'start-ochered',
    'options' => ['class' => 'form-vertical'],
]) ?>
    <?= $form->field($model, 'servises')->radioList($model->servises) ?>
    
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Взять номер очереди', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>
</div>
