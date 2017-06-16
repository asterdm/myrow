<?php
/* @var $this yii\web\View */
?>
<h1>Управление очередью окна № <?= $id ?></h1>



<div style="text-align: center" class="small-box bg-aqua">
            <div class="inner">
                <h3 id="user_cod"><?= $user_cod ?></h3>

              <p id="user_status"><?= $status ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>

<div class="btn-group btn-group-justified">
  <div class="btn-group">
    
      <button type="button" class="btn btn-default" onclick="clickNext(<?= $id ?>)">Следующий клиент</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default" onclick="clickWork(<?= $id ?>)">В работу</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default" onclick="clickDeactiv(<?= $id ?>)">Деактивировать</button>
  </div>
</div>


<script>
function clickNext(boxNumber){
    $.post("<?= \yii\helpers\Url::toRoute(['panel/next','number' => $id]) ?>",{box_id: boxNumber});
    
    
//    $.ajax({
//    url: "<?= \yii\helpers\Url::toRoute(['panel/next','number' => $id]) ?>",
//     data: boxNumber,
//    success: function (result) {
//        //output = result; 
//        
//        //var obj = jQuery.parseJSON(result);
//        alert(jQuery.parseJSON(result).status)
//        //$("user_cod").innerHtml(obj.user_cod);
//        //$("user_status").innerHtml(obj.status);
//        
//    }/*,
//    error: function failCallBk(XMLHttpRequest, textStatus, errorThrown) {
//        alert("An error occurred while processing your request. Please try again.");
//    }*/
//});
    
    
    
    
    
}    
function clickWork(boxNumber){
    $.post("<?= \yii\helpers\Url::toRoute(['panel/work','number' => $id]) ?>",{box_id: boxNumber});
}  
function clickDeactiv(boxNumber){
    $.post("<?= \yii\helpers\Url::toRoute(['panel/deactiv','number' => $id]) ?>",{box_id: boxNumber});
}      
    
    
</script>