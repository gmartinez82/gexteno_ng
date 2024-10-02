<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'index';
$db_nombre_pagina = 'index';

$c = new Criterio();
$c->add(GenWidgetSector::GEN_ATTR_CODIGO, GenWidgetSector::SECTOR_HOME, Criterio::IGUAL);
$c->add(GenWidgetModulo::GEN_ATTR_CODIGO, GenWidgetModulo::MODULO_GENERAL, Criterio::IGUAL);
$c->add(GenWidget::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
$c->addTabla(GenWidget::GEN_TABLA);
$c->addRealJoin(GenWidgetSector::GEN_TABLA, GenWidgetSector::GEN_ATTR_ID, GenWidget::GEN_ATTR_GEN_WIDGET_SECTOR_ID);
$c->addRealJoin(GenWidgetModulo::GEN_TABLA, GenWidgetModulo::GEN_ATTR_ID, GenWidget::GEN_ATTR_GEN_WIDGET_MODULO_ID);
$c->addOrden(GenWidget::GEN_ATTR_ORDEN, Criterio::_ASC);
$c->setCriterios();

//$gen_widgets = GenWidget::getGenWidgets(null, $c);
//Gral::prr($gen_widgets);

$c = new Criterio();
$c->add(GenWidgetModulo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
$c->addTabla(GenWidgetModulo::GEN_TABLA);
$c->addOrden(GenWidgetModulo::GEN_ATTR_ORDEN, Criterio::_ASC);
$c->setCriterios();

$gen_widget_modulos = GenWidgetModulo::getGenWidgetModulos(null, $c);
//Gral::prr($gen_widget_modulos);
?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php'; ?>
    <?php include 'parciales/mensajes.php' ?>

    <script src="../comps/chart/dist/Chart.bundle.js"></script>           
    <script src="../comps/chart/samples/utils.js"></script>

    <style>
        canvas{
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>    

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    <div id='buscador'>
        <?php //include 'parciales/tips/index.php'   ?>
    </div>
    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'>
            <?php Lang::_lang('Inicio') ?> 
            
            <div class="titulo-botonera">
                <?php if (UsCredencial::getEsAcreditado('INDEX_TITULO_BOTONERA_LISTA_PRECIO')) { ?>
                <div class="titulo-boton">
                    <a href="ins_insumo_precios_download.php?hash=<?php echo base64_encode(date('Y-m-d')) ?>" target="_blank" title="Bajar Lista de Precios Actualizada">
                        <img src="imgs/btn_pdf.png" />                        
                    </a>
                </div>            
                <?php } ?>
            </div>
            
        </div>
        <div class='contenedor central'>
            
            <div class="gen_widgets">


                <div class="gen_widgets_tabs">
                    <ul>
                        <?php foreach ($gen_widget_modulos as $gen_widget_modulo) { ?>
                            <?php if (UsCredencial::getEsAcreditado('INDEX_WIDGET_TAB_' . $gen_widget_modulo->getCodigo())) { ?>
                                <li><a href="<?php Gral::_echo(Gral::getPathHttp().'admin/ajax/gen_widget/refresh_gen_widget_tab.php?sector=HOME&codigo='.$gen_widget_modulo->getCodigo()) ?>"><?php Gral::_echo($gen_widget_modulo->getDescripcion()) ?></a></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>

                </div>

                <?php if (UsCredencial::getEsAcreditado('INDEX_WIDGET_AGREGAR')) { ?>
                    <div id='cuerpo_widget' class="cuerpo_widget nuevo">
                        <div class='titulo'><?php Lang::_lang('Nuevo Widget') ?> </div>
                        <div class='contenedor'>
                            <a href="gen_widget_alta.php" class="link-nuevo" title="<?php Lang::_lang('Agregar un Nuevo Widget') ?>"><?php Lang::_lang('+ Nuevo Widget') ?></a>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>


    <div class="div_modal"></div>
    <div class="div_modal_widget"></div>
</body>
</html>
