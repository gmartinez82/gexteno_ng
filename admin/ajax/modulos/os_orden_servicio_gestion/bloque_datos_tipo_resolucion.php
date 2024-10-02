<?php
/**
 * @creado_por Esteban Martinez
 * @creado 08/11/2016
 * @modificado_por Esteban Martinez
 * @modificado 15/11/2016
 */
include_once '_autoload.php';

$os_tipo_resolucion_id = Gral::getVars(2, "os_tipo_resolucion_id", 0);

if($os_tipo_resolucion_id != 0){
    if($os_tipo_resolucion_id != 0)
    {
        $os_tipo_resolucion = OsTipoResolucion::getOxId($os_tipo_resolucion_id);
        $os_tipo_resolucion_codigo = $os_tipo_resolucion->getCodigo();
    }


    if(!empty($txt_fecha_inicio) && !empty($txt_dias))
    {
        $txt_fecha_fin       = Date::sumarDias($txt_fecha_inicio, $txt_dias);
        $txt_fecha_reintegro = Date::sumarDias($txt_fecha_fin, 1);
    }
    
    $cmb_afecta_haberes = 1;
}

if(Gral::esPost()){
        $txt_fecha_fin       = Date::sumarDias($txt_fecha_inicio, $txt_dias);
        $txt_fecha_reintegro = Date::sumarDias($txt_fecha_fin, 1);    
}else{
    if($os_resolucion){
        $os_tipo_resolucion = $os_resolucion->getOsTipoResolucion();
        $os_tipo_resolucion_codigo = $os_tipo_resolucion->getCodigo();

        if($os_resolucion_suspension){
            $txt_dias = $os_resolucion_suspension->getDiasSuspension();
            $txt_fecha_inicio = $os_resolucion_suspension->getFechaInicio();
            $txt_fecha_fin = $os_resolucion_suspension->getFechaFin();
            $txt_fecha_reintegro = $os_resolucion_suspension->getFechaReintegro();
            $cmb_afecta_haberes = $os_resolucion_suspension->getAfectaHaberes();
        }
    }
}
?>

<?php
if($os_tipo_resolucion_codigo === OsTipoResolucion::TIPO_SUSPENSION):
?>
<div class="par">
    <div class="label">
        <?php Lang::_lang("Dias Suspension") ?>
    </div>
    <div class="dato">
        <input id="txt_dias" name="txt_dias" type="text" class="textbox" value="<?php Gral::_echo($txt_dias) ?>" size="3" />
        <div id="txt_dias_error" class="error label-error"><?php Gral::_echo($txt_dias_error); ?></div>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Inicio") ?>
    </div>
    <div class="dato">
        <input id="txt_fecha_inicio" name="txt_fecha_inicio" type="text" class="textbox" value="<?php echo Gral::getFechaToWEB($txt_fecha_inicio); ?>" size="12" readonly />
        <input id="cal_txt_fecha_inicio" type="button"  value="..." />

        <script type="text/javascript">
            Calendar.setup({
                inputField: "txt_fecha_inicio", ifFormat: "%d/%m/%Y", button: "cal_txt_fecha_inicio", onUpdate: function(){getJsonOsTipoResolucionCalculoFechaFinSuspension()}
            });
        </script>

        <div id="txt_fecha_inicio_error" class="error label-error"><?php Gral::_echo($txt_fecha_inicio_error); ?></div>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Fin") ?>
    </div>
    <div class="label">
        <div class="suspension_fecha_fin">
            &nbsp;<?php echo Gral::getFechaToWEB($txt_fecha_fin); ?>
        </div>
        <!--<input id="txt_fecha_fin" name="txt_fecha_fin" type="text" class="textbox" value="<?php echo Gral::getFechaToWEB($txt_fecha_fin); ?>" size="12" readonly />-->
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Reintegro") ?>
    </div>
    <div class="label">
        <div class="suspension_fecha_reintegro">
            &nbsp;<?php echo Gral::getFechaToWEB($txt_fecha_reintegro); ?>
        </div>
        <!--<input id="txt_fecha_reintegro" name="txt_fecha_reintegro" type="text" class="textbox" value="<?php echo Gral::getFechaToWEB($txt_fecha_reintegro); ?>" size="12" readonly />-->
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Afecta Haberes") ?>
    </div>
    <div class="dato">
        <?php Html::html_dib_select(1, "cmb_afecta_haberes", GralSiNo::getGralSiNosCmb(), $cmb_afecta_haberes, "textbox") ?>
    </div>
</div>

<?php
endif;
?>