<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Ionicons -->
        <?php Yii::app()->clientScript->registerCssFile("////code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css"); ?>
        <!-- Morris chart -->
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/morris/morris.css"); ?>
        <!-- jvectormap -->
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/jvectormap/jquery-jvectormap-1.2.2.css"); ?>
        <!-- Date Picker -->
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/datepicker/datepicker3.css"); ?>
        <!-- Daterange picker -->
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/daterangepicker/daterangepicker-bs3.css"); ?>
        <!-- bootstrap wysihtml5 - text editor -->
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>

        <!-- Bootstrap Style-->
        <?php Yii::app()->clientScript->registerCssFile("//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"); ?>

        <?php Yii::app()->clientScript->registerCssFile("//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"); ?>

        <!-- Theme style -->

        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/AdminLTE.css"); ?>


        <!-- jQuery 2.0.2 -->
        <?php Yii::app()->clientScript->registerScriptFile("http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"); ?>

        <!-- Bootstrap -->
        <?php Yii::app()->clientScript->registerScriptFile("//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"); ?>

        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl ."/js/AdminLTE/shortcut.js"); ?>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
            @media print{
                body * {
                    visibility: hidden;
                }
                .imprimir, .imprimir * {
                    visibility: visible;
                }
                .imprimir {
                    position: absolute;
                    left: 0;
                    top: 0;
                }
            }
        </style>
    </head>
    <body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <?php echo CHtml::encode(Yii::app()->name); ?>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span><?php echo Yii::app()->user->name?><i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="<?php echo Yii::app()->baseUrl; ?>/img/avatar3.png" class="img-circle" alt="User Image" />
                                <p>
                                    <?php echo Yii::app()->user->name?>
                                    <small>Administrador</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo Yii::app()->baseUrl; ?>/img/avatar3.png" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Bienvenido, <?php echo Yii::app()->user->name?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a href="<?php echo Yii::app()->baseUrl; ?>/registro/create">
                            <i class="fa fa-dashboard"></i> <span>Entrada</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/registro/buscar">
                            <i class="fa fa-th"></i> <span>Salida</span> <small class="badge pull-right bg-green"></small>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/registro/admin">
                            <i class="fa fa-list"></i> <span>Consultar</span> <small class="badge pull-right bg-green"></small>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/tipovehiculo/create">
                            <i class="fa fa-money"></i> <span>Tarifas</span> <small class="badge pull-right bg-green"></small>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/plan/create">
                            <i class="fa fa-briefcase"></i> <span>Planes</span> <small class="badge pull-right bg-green"></small>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/facturacion/update/1">
                            <i class="fa fa-file-text"></i> <span>Facturación</span> <small class="badge pull-right bg-green"></small>
                        </a>
                    </li>
                </ul>

                <div class="col-md-2" style="position: fixed; left:0; bottom: 0; z-index: 0;" >
                    <!-- Warning box -->
                    <div class="box box-solid box-danger">
                        <div class="box-header">
                            <h5 class="box-title">Lugares</h5>
                            <div class="box-tools pull-right">
                                <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body" style="display: block; margin-left: 13px;">
                            <h4>
                                <span id="clock">
                                </span>
                            </h4>
                            <h4>
                                Autos: <?= Registro::model()->countByAttributes(array('tipovehiculo_idtipovehiculo'=>'1', 'hora_salida'=>''));?> / <?= Tipovehiculo::model()->findByPk('1')->numero_plazas;?>
                            </h4>
                            <h4>
                                Motos: <?= Registro::model()->countByAttributes(array('tipovehiculo_idtipovehiculo'=>'2', 'hora_salida'=>''));?> / <?= Tipovehiculo::model()->findByPk('1')->numero_plazas;?>
                            </h4>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>

            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>

                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Blank page</li>
                </ol>
            </section>



            <!-- Main content -->
            <section class="content" style="margin-left: 80px; margin-right: 80px;">

                <?php echo $content; ?>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/AdminLTE/app.js"); ?>
    <?php Yii::app()->clientScript->registerScript("reloj","
    function startTime() {
        var today=new Date();
        var h=today.getHours();
        var m=today.getMinutes();
        var s=today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h+':'+m+':'+s;
        var t = setTimeout(function(){startTime()},500);
    }

    function checkTime(i) {
        if (i<10) {i = '0' + i};  // add zero in front of numbers < 10
        return i;
    }

    startTime();

    shortcut.add('Ctrl+F1', function() {
        var el =  $('#Registro_tipovehiculo_idtipovehiculo');
        $(el).focus();
        $(el).css('height', '100px');
        $(el).attr('size', $(el).find('option').length + ' ');
    });
    shortcut.add('Ctrl+F2', function() {
        var el =  $('#Registro_plan_idplan');
        $(el).focus();
        $(el).css('height', '100px');
        $(el).attr('size', $(el).find('option').length + ' ');
    });
    "); ?>

    </body>
</html>
