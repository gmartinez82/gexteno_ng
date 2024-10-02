<?php
include "_autoload.php";

$txt_buscador_productos = Gral::getVars(Gral::VARS_GET, 'txt_buscador_productos', '', Gral::TIPO_STRING);
?>
<div class="buscador productos">

    <div class="buscador-producto">
        <input id="txt_buscador_productos_modal" name="txt_buscador_productos_modal" class="txt_buscador_productos_modal" type="text" size="30" value="<?php Gral::_echo($txt_buscador_productos) ?>" />
    </div>

    <div class="datos">
        <?php include "modal_vta_presupuesto_gestion_buscar_productos_datos.php" ?>          
    </div>

</div>