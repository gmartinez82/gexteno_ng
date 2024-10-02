
<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_VINCULO_PER_PERSONA_GRAL_SUCURSAL')){ ?>
<div class='vinculo per_persona_gral_sucursal' padre='per_persona' hijo='per_persona_gral_sucursal' padre_id='<?php echo $per_persona->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PerPersonaGralSucursals') ?>
        <?php 
        $cantidad_per_persona_gral_sucursals = count($per_persona->getPerPersonaGralSucursals());
        echo ($cantidad_per_persona_gral_sucursals > 0) ? '('.$cantidad_per_persona_gral_sucursals.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='per_persona_gral_sucursal_txt_buscar' id='per_persona_gral_sucursal_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_VINCULO_PER_PERSONA_GRAL_SUCURSAL_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta.php?per_persona_id=<?php Gral::_echo($per_persona->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'per_persona', 'per_persona_gral_sucursal', <?php Gral::_echo($per_persona->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PerPersonaGralSucursal') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

