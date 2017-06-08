<?php

/* @var $this yii\web\View */

$this->title = 'Электронная очередь';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow-active"><i class="ion ion-ios-gear-outline">53</i></span>

            <div class="info-box-content">
              <span class="info-box-text">Бокс - 1</span>
              <span class="info-box-text">Ожидание</span>
              <span class="info-box-number">0<small>ч</small>5<small>мин</small></span>
            </div>
            <button type="submit" class="btn btn-yahoo pull-right btn-block btn-sm">Отключить</button>
            <!-- /.info-box-content -->
          </div>
            
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red-active"><i class="ion ion-ios-gear-outline">52</i></span>

            <div class="info-box-content">
              <span class="info-box-text">Бокс - 2</span>
              <span class="info-box-text">Занято</span>
              <span class="info-box-number">0<small>ч</small>25<small>мин</small></span>
            </div>
            <button type="submit" class="btn btn-yahoo pull-right btn-block btn-sm">Отключить</button>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-gray-light"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Бокс - 3</span>
              <span class="info-box-number">760</span>
            </div>
            <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Активировать</button>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-gray-light"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Бокс - 4</span>
              <span class="info-box-number">2,000</span>
            </div>
            <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Активировать</button>
            <!-- /.info-box-content -->
          </div>            
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
        
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

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
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

       

    </div>
</div>
