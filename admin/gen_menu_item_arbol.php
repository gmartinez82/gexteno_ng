<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');

$gen_arbol = GenArbol::getOxId($id);
$gen_menu_item = new GenMenuItem();

?>
<?php include 'parciales/head.php' ?>
<link href='../css/admin/arbol.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='../js/admin/arbol.js'></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>
    
    <form id='formu' name='formu' method='post' action=''>

        <div id='cuerpo'>
            <div class='adm_cuerpo_titulo'><?php Lang::_lang('GenMenuItem') ?> </div>
            <div class='contenedor central'>

              <div class='arbol-gestion gen_menu_item-item'>
                  <?php GenMenuItem::listarArbol($gen_arbol->getCodigo(), 'GESTION') ?>
              </div>

            </div>

        </div>
        <div id='pie'><?php include 'parciales/pie.php' ?></div>
        <div id="div_contextual"></div>
        
        <div class="div_modal"></div>
        <div class="div_modal_modal"></div>

    </form>
</body>
</html>

