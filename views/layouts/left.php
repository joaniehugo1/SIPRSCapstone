<aside class="main-sidebar control-sidebar-light" style="background-color: #773423">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel" style="background-color: #808000">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar10.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>SIPRS</p>

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
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu ', 'options' => ['class' => 'header']],
                    ['label' => 'Persons', 'icon' => 'user', 'url' => ['/persons']],
                    ['label' => 'Baptism', 'icon' => 'child', 'url' => ['/baptism']],
                    ['label' => 'Confirmation', 'icon' => 'check', 'url' => ['/confirmation']],
                    ['label' => 'Death', 'icon' => 'bed', 'url' => ['/death']],
                    ['label' => 'Marriage', 'icon' => 'envelope', 'url' => ['/marriage']],
                    ['label' => 'Priest', 'icon' => 'user', 'url' => ['/priest']],
                    ['label' => 'Cemetery', 'icon' => 'bed','url' => ['/cemetery']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
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
