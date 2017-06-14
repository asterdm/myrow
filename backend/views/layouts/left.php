<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],                    
                    ['label' => 'Main', 'icon' => 'chevron-right', 'url' => ['/main']],
                    [
                        'label' => 'Box',
                        'icon' => 'chevron-right',
                        'url' => ['/box'],
                        'items' => [
                            ['label' => 'Box-1', 'icon' => 'file-code-o', 'url' => ['/box/1'],],
                            ['label' => 'Box-2', 'icon' => 'dashboard', 'url' => ['/box/2'],],
                            ['label' => 'Box-3', 'icon' => 'file-code-o', 'url' => ['/box/3'],],
                            ['label' => 'Box-4', 'icon' => 'dashboard', 'url' => ['/box/4'],],
                            ]
                        ],
                    
                    
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Panel',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Panel-1', 'icon' => 'file-code-o', 'url' => ['/panel/1'],],
                            ['label' => 'Panel-2', 'icon' => 'dashboard', 'url' => ['/panel/2'],],
                            ['label' => 'Panel-3', 'icon' => 'file-code-o', 'url' => ['/panel/3'],],
                            ['label' => 'Panel-4', 'icon' => 'dashboard', 'url' => ['/panel/4'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
