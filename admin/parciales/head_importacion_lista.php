<!DOCTYPE html>
<html lang="es">  

    <script>
        global_path_http = '<?php echo Gral::getPath('path_http') ?>';
    </script>

    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <title><?php Gral::_echo(Gral::getConfig('gral_title')) ?></title>

        <link rel = "stylesheet" href = "../comps/jquery-ui-1.12.1/jquery-ui.css" />
        <link rel = "stylesheet" href = "../comps/DataTables-1.10.12/media/css/jquery.dataTables.min.css" />

        <script src = "../js/JQuery/jquery-3.1.1.min.js"></script>
        <script src="../comps/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src = "https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
        <script src="../comps/DataTables-1.10.12/media/js/jquery.dataTables.min.js"></script>

        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/general.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/mensajes.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/buscador.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/filtros.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/masinfo.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/gen_widget.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/dashboard_top.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/user.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />

        <?php if (Gral::getConfig('sistema_codigo') && file_exists(Gral::getPathAbs() . "css/admin/" . Gral::getConfig('sistema_codigo') . ".css")) { ?>
            <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/<?php echo Gral::getConfig('sistema_codigo') ?>.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <?php } ?>

        <?php if (Gral::getConfig('conf_proyecto') && file_exists(Gral::getPathAbs() . "css/admin/" . Gral::getConfig('conf_proyecto') . ".css")) { ?>
            <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/<?php echo Gral::getConfig('conf_proyecto') ?>.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />
        <?php } ?>

        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/JQuery/accordion.js'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/JQuery/jquery.maskedinput-1.3.min.js'></script>
        <script type="text/javascript" src="<?php Gral::_echo(Gral::getPath('path_http')) ?>js/JQuery/jquery.price_format.1.8.min.js"></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/JQuery/ui/jquery-ui.js'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/gral.js?<?php echo date('dH') ?>'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/admin/set.js?<?php echo date('dH') ?>'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/admin/adm.js?<?php echo date('dH') ?>'></script>


        <link href='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/jscalendar/calendar-blue.css' rel='stylesheet' type='text/css' />
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/jscalendar/calendar.js'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/jscalendar/lang/calendar-es.js'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/jscalendar/calendar-setup.js'></script>

        <!-- modulo -->
        <?php if(file_exists(Gral::getPathAbs()."css/admin/modulos/".$db_nombre_objeto.".css")){ ?>
        <link rel='stylesheet' type='text/css' href='<?php Gral::_echo(Gral::getPath('path_http')) ?>css/admin/modulos/<?php echo $db_nombre_objeto ?>.css?<?php echo date('dH') ?>' />
        <?php } ?>
        <?php if(file_exists(Gral::getPathAbs()."js/admin/modulos/".$db_nombre_objeto.".js")){ ?>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/admin/modulos/<?php echo $db_nombre_objeto ?>.js?<?php echo date('dH') ?>'></script>
        <?php } ?>

        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/admin/paginador.js?<?php echo date('dH') ?>'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/admin/mensajes.js?<?php echo date('dH') ?>'></script>
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>js/admin/buscador.js?<?php echo date('dH') ?>'></script>


        <!-- dbsuggest -->
        <link rel='stylesheet' type='text/css' href='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/dbsuggest/dbsuggest.css' />
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/dbsuggest/dbsuggest.js'></script>

        <!-- dbcontext -->
        <link rel='stylesheet' type='text/css' href='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/dbcontext/dbcontext.css' />
        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/dbcontext/dbcontext.js'></script>

        <script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/ckeditor/ckeditor.js'></script>

        <!-- Bxslider -->
        <link href="<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <script src="<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/bxslider/jquery.bxslider.js"></script>

        <!-- Lightbox -->
        <link href="<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/lightbox/css/jquery.lightbox.css" rel="stylesheet" />
        <script src="<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/lightbox/js/jquery.lightbox.js"></script>

        <!-- Selectize -->
        <link href="<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/selectize.js-master/dist/css/selectize.default.css" rel="stylesheet" />
        <script src="<?php Gral::_echo(Gral::getPath('path_http')) ?>comps/selectize.js-master/dist/js/standalone/selectize.js"></script>
        
        <link rel="icon" href="<?php Gral::_echo(Gral::getPath('path_http')) ?><?php Gral::_echo(Gral::getPath('path_favicon')) ?>" type="image/x-icon"/>

    </head>
