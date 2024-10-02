<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_ruta_gral_dia_id = Gral::getVars(2, 'gral_ruta_gral_dia_id');
$gral_ruta_gral_dia = GralRutaGralDia::getOxId($gral_ruta_gral_dia_id);
$gral_dia = $gral_ruta_gral_dia->getGralDia();

?>
<div class="datos" id="<?php Gral::_echo($gral_dia->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralDia') ?>: 
        <strong><?php Gral::_echo($gral_dia->getId()) ?> - <?php Gral::_echo($gral_dia->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_dia_alta.php?id=<?php echo($gral_dia->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralDia') ?>: <strong><?php Gral::_echo($gral_dia->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralRutaGralDia::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_gral_dia->getFiltrosArrXCampo('GralDia', 'gral_dia_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralRutaGralDias') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_dia->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

