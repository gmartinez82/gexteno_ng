<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pln_jornada_id = Gral::getVars(2, 'pln_jornada_id');
$pln_jornada = PlnJornada::getOxId($pln_jornada_id);
$gral_novedad = $pln_jornada->getGralNovedad();

?>
<div class="datos" id="<?php Gral::_echo($gral_novedad->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralNovedad') ?>: 
        <strong><?php Gral::_echo($gral_novedad->getId()) ?> - <?php Gral::_echo($gral_novedad->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_novedad_alta.php?id=<?php echo($gral_novedad->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralNovedad') ?>: <strong><?php Gral::_echo($gral_novedad->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PlnJornada::getFiltrosArrGral() ?>&arr=<?php echo $pln_jornada->getFiltrosArrXCampo('GralNovedad', 'gral_novedad_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PlnJornadas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_novedad->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

