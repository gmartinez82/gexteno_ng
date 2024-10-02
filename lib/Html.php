<?php

class Html {

    static function html_dib_textbox($caso, $id, $value, $class, $ancho = "") {
        switch ($caso) {
            case 0:
                $html = "<span class='" . $class . "'>&nbsp;" . $value . "</span>";
                break;

            default:
                $html = "<input name='" . $id . "' type='text' class='" . $class . "' id='" . $id . "' value='" . $value . "' size='" . $ancho . "' />";
        }

        echo $html;
    }

    static function html_get_textbox($caso, $id, $value, $class, $ancho = "") {
        switch ($caso) {
            case 0:
                $html = "<span class='" . $class . "'>&nbsp;" . $value . "</span>";
                break;

            default:
                $html = "<input name='" . $id . "' type='text' class='" . $class . "' id='" . $id . "' value='" . $value . "' size='" . $ancho . "' />";
        }

        return $html;
    }

    static function html_dib_select($caso, $id, $arr_datos, $value, $class, $ancho = "", $eventos = "", $name = false) {
        if (!$name) {
            $name = $id;
        }
        switch ($caso) {
            case 0:
                $html = "<span class='" . $class . "'>&nbsp;" . $value . "</span>";
                break;

            default:
                $html = "<select name='" . $name . "' id='" . $id . "' class='" . $class . "' " . $eventos . " >";
                foreach ($arr_datos as $dato) {
                    $sel = "";
                    if (trim($dato['cod']) == trim($value))
                        $sel = "selected = 'selected'";

                    $html.= "  <option " . $sel . " value='" . $dato['cod'] . "'>" . $dato['descripcion'] . "</option>";
                }
                $html.= "</select>";
        }
        Gral::_echo($html);
    }

    static function html_get_select($caso, $id, $arr_datos, $value, $class, $ancho = "", $eventos = "") {
        switch ($caso) {
            case 0:
                $html = "<span class='" . $class . "'>&nbsp;" . $value . "</span>";
                break;

            default:
                $html = "<select name='" . $id . "' id='" . $id . "' class='" . $class . "' " . $eventos . " >";
                foreach ($arr_datos as $dato) {
                    $sel = "";
                    if (trim($dato['cod']) == trim($value))
                        $sel = "selected = 'selected'";

                    $html.= "  <option " . $sel . " value='" . $dato['cod'] . "'>" . $dato['descripcion'] . "</option>";
                }
                $html.= "</select>";
        }
        //echo $html;
        return $html;
    }

    static function html_dib_select_div($id, $tabla, $campo, $value, $value_desc, $texto_nosel = 'Indistinto', $url_ajax, $class = '') {
        switch ($caso) {
            default:
                $html = "
                  <div class='comp_select' id='comp_select_" . $campo . "'>";

                if ($value != 'null') {
                    $html.="
					<label class='label'></label>
					<label class='dato'>" . $value_desc . "</label>";
                } else {
                    $html.="
                  	<label class='label'>" . $texto_nosel . "</label>
					<label class='dato'></label>";
                }

                $html.="
                    <label class='ver'><img src='imgs/btn_select_flecha.gif'></label>
				  </div>
                  
                  <div class='comp_select_div' id='comp_select_" . $tabla . "_div'></div>
			  	  
				  <input name='" . $id . "' type='hidden' class='textbox' id='" . $id . "' value='" . $value . "' size='5' />
				  
				  <script type='text/javascript'>
					  $(function($) {
						  $('#comp_select_" . $campo . " .ver').click(function(){
							
							var id = $('#txt_" . $campo . "').val();
							$.ajax({
								type: 'POST',
								url: '" . $url_ajax . "',
								data: 'id=' + id,
								dataType: 'html',
								beforeSend: function(objeto){
								},
								success: function(data) {			
									$('#comp_select_" . $tabla . "_div').html(data);
									$('#comp_select_" . $tabla . "_div').show();
									
									setClick" . Gral::getCamelCase($campo) . "Uno();
									setClick" . Gral::getCamelCase($campo) . "Fuera();
									
									try{ 
										$('#comp_select_" . $tabla . "_div').scrollTo('#div_" . $tabla . "_'+id, 800, {over:-1.5});
									}catch(e){}
								},
								error: function(objeto, quepaso, otroobj){
									alert('errorx '+ objeto);
								}
							});					
						  });					  
					  });
					  
					  function setClick" . Gral::getCamelCase($campo) . "Uno(){
						  $('#comp_select_" . $tabla . "_div .datos .uno').unbind('click');
						  $('#comp_select_" . $tabla . "_div .datos .uno').click(function(){
								
								var " . $tabla . "_id = $(this).attr('" . $tabla . "_id');
								var " . $tabla . "_desc = $(this).attr('" . $tabla . "_desc');
								$('#" . $id . "').val(" . $tabla . "_id);
								$('#comp_select_" . $campo . " .dato').html(" . $tabla . "_desc);
								$('#comp_select_" . $campo . " .label').hide();
								
								
								$('#comp_select_" . $tabla . "_div').hide();
						  });
				
					  }
					  
					  function setClick" . Gral::getCamelCase($campo) . "Fuera(){
						  $('body').unbind('click');
						  $('body').click(function(){				
								$('#comp_select_" . $tabla . "_div').hide();
						  });
				
					  }	  
				  </script>                  
				
				";
        }
        echo $html;
    }

    static function html_get_dbsuggest($caso, $id, $archivo, $contenedor_resultados, $seleccionable, $post, $texto = false, $seleccionado_id = false, $seleccionado_desc = false, $size = 25, $agrupador= "", $class = "") {
        if (!$texto)
            $texto = 'Ingrese palabra a buscar';
        if (!$seleccionado_id)
            $seleccionado_id = '';
        if (!$seleccionado_desc)
            $seleccionado_desc = '';

        $seleccionado_ok = "";
        if ($seleccionado_id) {
            $seleccionado_ok = "seleccionado-ok";
        }
        $div_contenedor = "div_" . $id;
        $es_externo = '';
        if ($contenedor_resultados) {
            $div_contenedor = $contenedor_resultados;
            $es_externo = 'externo';
        }

        $es_seleccionable = "seleccionable";
        if (!$seleccionable) {
            $es_seleccionable = "";
        }

        switch ($caso) {
            case 0:
                $html = "<span class='" . $class . "'>&nbsp;" . $value . "</span>";
                break;

            default:
                $html = "
                        <div id=\"dbsuggest_" . $id . "\" class=\"dbsuggest-contenedor " . $es_externo . "" . $class . "\" archivo=\"" . $archivo . "\" post=\"" . $post . "\" contenedor=\"" . $div_contenedor . "\" seleccionable=\"" . $es_seleccionable . "\">
                            <input id=\"" . $id . "\" size=\"".$size."\" type=\"text\" class=\"dbsuggest " . $seleccionado_ok . " textbox\" value=\"" . $seleccionado_desc . "\" autocomplete=\"off\" />
               		";
                if (!$contenedor_resultados) {
                    $html.= "<div class=\"dbsuggest-boton\" title=\"Desplegar\">&nbsp;&nbsp;&nbsp;</div>";
                }

                $html.= "
                        </div>
				
                <input name=\"" . $id . "_id\" id=\"" . $id . "_id\" type=\"hidden\" size=\"2\" value=\"" . $seleccionado_id . "\" class=\"dbsuggest-id-hidden ".$agrupador."\" />";

                if (!$contenedor_resultados) { // si no se indica contenerdor de resultado se crea div contenedor
                    $html.="
                <div id=\"" . $div_contenedor . "\" class=\"div_dbsuggest_resultados\">" . $texto . "</div>";
                }
        }
        //echo $html;
        return $html;
    }

}

?>