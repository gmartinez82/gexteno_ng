<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_de_id = Gral::getVars(2, 'eku_de_id');
$eku_de = EkuDe::getOxId($eku_de_id);
$eku_de_ope_tipo_estado = $eku_de->getEkuDeOpeTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($eku_de_ope_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuDeOpeTipoEstado') ?>: 
        <strong><?php Gral::_echo($eku_de_ope_tipo_estado->getId()) ?> - <?php Gral::_echo($eku_de_ope_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_de_ope_tipo_estado_alta.php?id=<?php echo($eku_de_ope_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeOpeTipoEstado') ?>: <strong><?php Gral::_echo($eku_de_ope_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuDe::getFiltrosArrGral() ?>&arr=<?php echo $eku_de->getFiltrosArrXCampo('EkuDeOpeTipoEstado', 'eku_de_ope_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuDes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_de_ope_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

