<aside class="main-sidebar" style="background-color: rgba(99,0,45,0.26);">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/1.gif" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
               <p><?= yii::$app->user->identity->username; ?></p>

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
       <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                     [
                        'label' => '快递服务',
                        'icon' => ' fa-gift',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '寄送快递', 'icon' => '  fa-map-signs', 'url' => ['/merchandise/create']],
                            ['label' => '运输中', 'icon' => '   fa-truck', 'url' => ['/merchandise/index']],
                            ['label' => '已送达', 'icon' => ' fa-check-circle', 'url' => ['/merchandise/done']],
                            ['label' => '已签收', 'icon' => ' fa-check-circle', 'url' => ['/merchandise/my-pocket']],
                            // ['label' => '运输中', 'icon' => ' fa-check-circle', 'url' => ['']],
                            // ['label' => '历史签收', 'icon' => ' fa-check-circle', 'url' => ['']],
                        ],
                    ],

                     [
                        'label' => '我的消息',
                        'icon' => ' fa-commenting-o',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '确认收货', 'icon' => ' fa-check-circle', 'url' => ['/merchandise/confirm']],
                        ],
                    ],        
                    
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => '系统工具',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        ) ?>



    </section>

</aside>
