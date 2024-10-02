<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$per_persona_id = Gral::getVars(2, 'per_persona_id');
$per_persona = PerPersona::getOxId($per_persona_id);
$gral_sector = $per_persona->getGralSector();

?>
<div class="datos" id="<?php Gral::_echo($gral_sector->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralSector') ?>: 
        <strong><?php Gral::_echo($gral_sector->getId()) ?> - <?php Gral::_echo($gral_sector->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_sector_alta.php?id=<?php echo($gral_sector->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSector') ?>: <strong><?php Gral::_echo($gral_sector->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PerPersona::getFiltrosArrGral() ?>&arr=<?php echo $per_persona->getFiltrosArrXCampo('GralSector', 'gral_sector_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PerPersonas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_sector->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

