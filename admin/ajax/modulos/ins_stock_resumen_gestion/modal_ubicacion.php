<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$id = Gral::getVars(2, 'id', 0);
$ins_stock_resumen = InsStockResumen::getOxId($id);
//Gral::prr($ins_stock_resumen);
$ins_insumo = $ins_stock_resumen->getInsInsumo();
$pan_panol = $ins_stock_resumen->getPanPanol();

$array = array(
	array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
	array('campo' => 'pan_panol_id', 'valor' => $pan_panol->getId()),
);
$ins_insumo_pan_panol = InsInsumoPanPanol::getOxArray($array);
if(!$ins_insumo_pan_panol){
	echo "No inicializado aún para el pañol";
	exit;
}
?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_stock_resumen_gestion/modal_ubicacion.php' >
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_pan_panol'>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>

          <?php Lang::_lang('InsInsumo') ?>

          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_insumo_id">
                <div class="insumo">    
<strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
        </div>
          </td>
          </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
                        <?php Lang::_lang('PanPanol') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

                <div class="panol">    
<strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
        </div>

          </td>
        </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
                        <?php Lang::_lang('Codigo Ubicacion') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

            <div class="ubicacion">    
                <strong><?php Gral::_echo($ins_insumo_pan_panol->getDescripcion()) ?></strong>
            </div>

          </td>
        </tr>
        
        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
                        <?php Lang::_lang('PanUbiPiso') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

            <div class="piso">    
                <strong><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPiso()->getDescripcion()) ?></strong>
            </div>

          </td>
        </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
                <?php Lang::_lang('PanUbiPasillo') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

            <div class="pasillo">    
                <strong><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPasillo()->getDescripcion()) ?></strong>
            </div>

          </td>
        </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
                        <?php Lang::_lang('PanUbiEstante') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

            <div class="estante">    
                <strong><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiEstante()->getDescripcion()) ?></strong>
            </div>

          </td>
        </tr>

        <tr>
          <td width='150' class='adm_carga_datos_titulos'>
                        <?php Lang::_lang('PanUbiAltura') ?>
          </td>
          <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

            <div class="altura">    
                <strong><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiAltura()->getDescripcion()) ?></strong>
            </div>

          </td>
        </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getId(), true) ?>'/>
		  
        </tr>
      </table>
	  
	  
</form>
</body>
</html>
<script>
setInit();
</script>
