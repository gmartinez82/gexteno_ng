<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido';

// se inicializan los centros de pedido que el usuario puede gestionar
$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();
//Gral::prr($string_centro_pedido_ids);


$criterio = new Criterio(PdePedido::SES_CRITERIOS);
$criterio->addDistinct(true);

/*
  if(!$user->getAbsoluto()){
  $criterio->add('pde_pedido_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
  $criterio->add('pde_pedido_destinatario.estado', 1, Criterio::IGUAL);
  }
 */
//$criterio->add('pde_pedido.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN);
$criterio->addTabla('pde_pedido');
//$criterio->addRealJoin('pde_estado', 'pde_estado.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
//$criterio->addRealJoin('pde_pedido_destinatario', 'pde_pedido_destinatario.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
$criterio->setCriterios();

$pagina_actual = PdePedido::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_pedidos = PdePedido::getPdePedidos($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>
<script type="text/javascript" src="../js/admin/modulos/pde_pedido.js"></script>
<link href='../css/admin/pde.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdePedidos') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="pde_pedido">
                <?php include 'ajax/modulos/pde_pedido/pde_pedido_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="pde_pedido">
                <?php //include 'ajax/modulos/pde_pedido/pde_pedido_datos.php' ?>
            </div>

            <br />

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>

</body>
</html>
<script type='text/javascript'>
<?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('pde_pedido', <?php echo $pagina_actual ?>);
</script>
