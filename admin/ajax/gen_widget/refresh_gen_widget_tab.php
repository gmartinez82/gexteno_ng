<?php
include "_autoload.php";
include_once '../../control/seguridad_modulo.php';
include_once '../../control/init.php';

$sector = Gral::getVars(Gral::VARS_GET, 'sector', '', Gral::TIPO_STRING);
$codigo = Gral::getVars(Gral::VARS_GET, 'codigo', '', Gral::TIPO_STRING);

$c = new Criterio();
$c->add(GenWidgetSector::GEN_ATTR_CODIGO, $sector, Criterio::IGUAL);
$c->add(GenWidgetModulo::GEN_ATTR_CODIGO, $codigo, Criterio::IGUAL);
$c->add(GenWidget::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
$c->addTabla(GenWidget::GEN_TABLA);
$c->addRealJoin(GenWidgetSector::GEN_TABLA, GenWidgetSector::GEN_ATTR_ID, GenWidget::GEN_ATTR_GEN_WIDGET_SECTOR_ID);
//$c->addRealJoin(GenWidgetModulo::GEN_TABLA, GenWidgetModulo::GEN_ATTR_ID, GenWidget::GEN_ATTR_GEN_WIDGET_MODULO_ID);
$c->addRealJoin(GenWidgetGenWidgetModulo::GEN_TABLA, GenWidgetGenWidgetModulo::GEN_ATTR_GEN_WIDGET_ID, GenWidget::GEN_ATTR_ID);
$c->addRealJoin(GenWidgetModulo::GEN_TABLA, GenWidgetModulo::GEN_ATTR_ID, GenWidgetGenWidgetModulo::GEN_ATTR_GEN_WIDGET_MODULO_ID);
$c->addOrden(GenWidget::GEN_ATTR_ORDEN, Criterio::_ASC);
$c->setCriterios();

$gen_widgets = GenWidget::getGenWidgets(null, $c);
//Gral::prr($gen_widgets);

if(file_exists('buscador/buscador_'.$codigo.'.php')){
    include 'buscador/buscador_'.$codigo.'.php';
}
?>
<?php foreach ($gen_widgets as $gen_widget) { ?>
    <?php if (UsCredencial::getEsAcreditado('INDEX_WIDGET_' . $gen_widget->getCodigo())) { ?>
        <div id='cuerpo_widget_<?php echo $gen_widget->getCodigo() ?>' class="cuerpo_widget" style="width:<?php echo $gen_widget->getAncho() ?>%;">

            <?php if (UsCredencial::getEsAcreditado('INDEX_WIDGET_' . $gen_widget->getCodigo() . '_EDITAR') || true) { ?>
                <div class="acciones">
                    <div class="modificar"><a href="gen_widget_alta.php?id=<?php echo $gen_widget->getId() ?>" class="nuevo" title="<?php Lang::_lang('Modificar Widget') ?>"><img src="imgs/btn_modi.gif"></a></div>
                </div>
            <?php } ?>

            <div class='titulo'><?php echo $gen_widget->getDescripcion() ?> </div>
            <div class='contenedor'>                                        
                <?php
                //$archivo = $gen_widget->getInclude();
                if (file_exists(Gral::getPathAbs() . 'admin/gen_widget/' . $gen_widget->getCodigo() . '/index.php')) {
                    include(Gral::getPathAbs() . 'admin/gen_widget/' . $gen_widget->getCodigo() . '/index.php');
                } else {
                    eval($gen_widget->getObservacion());
                }
                ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>
        