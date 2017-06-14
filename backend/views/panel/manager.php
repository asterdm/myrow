<?php
/* @var $this yii\web\View */
?>
<h1>Управление очередью окна № <?= $id ?></h1>



<div style="text-align: center" class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $user_id ?></h3>

              <p><?= $status ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>

<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-default">Следующий клиент</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default">В работу</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default">Деактивировать</button>
  </div>
</div>