
<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_VINCULO_PER_PERSONA_GRAL_ENTORNO')){ ?>
<div class='vinculo per_persona_gral_entorno' padre='per_persona' hijo='per_persona_gral_entorno' padre_id='<?php echo $per_persona->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PerPersonaGralEntornos') ?>
		 <?php 
		 $cantidad_per_persona_gral_entornos = count($per_persona->getPerPersonaGralEntornos());
		 echo ($cantidad_per_persona_gral_entornos > 0) ? '('.$cantidad_per_persona_gral_entornos.')' : '' ;
		 ?>			 
    </div>

    <div class='buscador'>
        <input name='per_persona_gral_entorno_txt_buscar' id='per_persona_gral_entorno_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

		<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_VINCULO_PER_PERSONA_GRAL_ENTORNO_ACCIONES')){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/per_persona_gral_entorno/per_persona_gral_entorno_alta.php?per_persona_id=<?php Gral::_echo($per_persona->getId()) ?>" contenedor="div_modal" ancho="600" alto="500" tipo="formulario" post="buscarVinculoResultados(1, '', 'per_persona', 'per_persona_gral_entorno', <?php Gral::_echo($per_persona->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PerPersonaGralEntorno') ?>'>
        	<img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
		</div>
		<?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

