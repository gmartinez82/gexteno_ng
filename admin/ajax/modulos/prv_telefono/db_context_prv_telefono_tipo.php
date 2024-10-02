<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_telefono_id = Gral::getVars(2, 'prv_telefono_id');
$prv_telefono = PrvTelefono::getOxId($prv_telefono_id);
$prv_telefono_tipo = $prv_telefono->getPrvTelefonoTipo();

?>
<div class="datos" id="<?php Gral::_echo($prv_telefono_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvTelefonoTipo') ?>: 
        <strong><?php Gral::_echo($prv_telefono_tipo->getId()) ?> - <?php Gral::_echo($prv_telefono_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_telefono_tipo_alta.php?id=<?php echo($prv_telefono_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvTelefonoTipo') ?>: <strong><?php Gral::_echo($prv_telefono_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvTelefono::getFiltrosArrGral() ?>&arr=<?php echo $prv_telefono->getFiltrosArrXCampo('PrvTelefonoTipo', 'prv_telefono_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvTelefonos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_telefono_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

