<?php

/* @var $this yii\web\View */

$this->title = 'Электронная очередь';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
        <?php if (isset($boxes)) : ?> 
        <?php foreach ($boxes as $box) : ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow-active"><i class="ion ion-ios-gear-outline"><?= $box[user_id] ?></i></span>
           

            <div class="info-box-content">
              <span class="info-box-text">Бокс - <?= $box[id] ?></span>
              <span class="info-box-text"><?= $box[status] ?></span>
              <span class="info-box-number"><?= $box[time] ?><small>мин</small></span>
            </div>
            <button type="submit" class="btn btn-yahoo pull-right btn-block btn-sm">Отключить</button>
            <!-- /.info-box-content -->
          </div>
            
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
            <?php endforeach;?>
            <?php else :
     echo 'У вас нет подключенных окон зайдите в настройки';
              ?>
            <?php endif;?>
        
        
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Очередь</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>User_cod</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                 <?php foreach ($clients as $client) : ?>
                <tr>                   
                  <td><?= $client[id] ?></td>
                  <td><?= $client[user_cod] ?></td>
                  <td><?= $client[get_time] ?></td>
                  <td><span class="label label-success"><?= $client[status] ?></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <?php endforeach;?>                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

       

    </div>
</div>
