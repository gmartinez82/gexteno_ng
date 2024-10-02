<?php

class Gral {

    const HTML_TITLE = "";
    const VARS_POST = 'POST';
    const VARS_GET = 'GET';
    const VARS_SANEAMIENTO = 'SANEAMIENTO';
    const URL_AFIP_DOMINIO = 'servicios1.afip.gov.ar';
    const URL_AFIP_PUERTO = 443;
    
    const TIPO_STRING = 'string';
    const TIPO_INTEGER = 'integer';
    const TIPO_FLOAT = 'float';
    const TIPO_DECIMAL = 'decimal';
    const TIPO_FLOAT_MASK = 'float-mask';
    const TIPO_MONEDA = 'moneda';  
    const TIPO_USUARIO = 'usuario';
    const TIPO_PASS = 'password';
    const TIPO_EMAIL = 'email';

    const REPORTES_SEPARADOR = ';';    
    const REPORTES_SEPARADOR_STRING_ATM = ',';
    const REPORTES_SEPARADOR_STRING_MUNICIPALIDAD_POSADAS = ',';
    
    /* texto de slogan */

    static function getTextoSlogan() {
        $texto = "";
        return $texto;
    }

    /* Impresion de Variables */

    static function pr($cadena, $previa = "", $return = false) {
        if (trim($previa) != "")
            $cad = '<label style="color:#999;">' . $previa . '</label>: <b>' . $cadena . '</b><br>';
        else
            $cad = $cadena . "<br>";

        if ($return)
            return $cad;
        echo $cad;
    }

    /* Impresion de Arrays */

    static function prr($elemento) {
        echo "<pre>";
        print_r($elemento);
        echo "</pre>";
    }

    static function getVars($caso, $var, $default = "", $tipo_dato = "") {

        $val_var = null;
        switch ($caso) {

            // -----------------------------------------------------------------
            // post
            // -----------------------------------------------------------------
            case 1:
            case self::VARS_POST:
                $val_var = (is_array($_POST[$var])) ? filter_var_array($_POST[$var], FILTER_SANITIZE_SPECIAL_CHARS) : filter_input(INPUT_POST, $var, FILTER_SANITIZE_SPECIAL_CHARS);
                break;

            // -----------------------------------------------------------------
            // get
            // -----------------------------------------------------------------
            case 2:
            case self::VARS_GET:
                $val_var = (is_array($_GET[$var])) ? filter_var_array($_GET[$var], FILTER_SANITIZE_SPECIAL_CHARS) : filter_input(INPUT_GET, $var, FILTER_SANITIZE_SPECIAL_CHARS);
                break;

            // -----------------------------------------------------------------
            // saneamiento
            // -----------------------------------------------------------------
            case 5:
            case self::VARS_SANEAMIENTO:
                $val_var = filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
                break;
        }

        $tipo_dato = strtoupper($tipo_dato);
        switch ($tipo_dato) {
            case strtoupper(self::TIPO_INTEGER):
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_NUMBER_INT) : filter_var($val_var, FILTER_SANITIZE_NUMBER_INT);
                break;

            case strtoupper(self::TIPO_FLOAT):
                //$val_var = str_replace(',', '.', $val_var);
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : filter_var($val_var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                break;

            case strtoupper(self::TIPO_DECIMAL):
                $val_var = str_replace(',', '.', $val_var);
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : filter_var($val_var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                break;
            
            case strtoupper(self::TIPO_FLOAT_MASK):
            case strtoupper(self::TIPO_MONEDA):
                $val_var = str_replace('.', '', $val_var);
                $val_var = str_replace(',', '.', $val_var);
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : filter_var($val_var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                break;
            
            case strtoupper(self::TIPO_STRING):
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_STRING) : filter_var($val_var, FILTER_SANITIZE_STRING);
                break;

            case strtoupper(self::TIPO_USUARIO):
            case strtoupper(self::TIPO_PASS):
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_STRING) : preg_replace( '/[^a-z0-9@._-]/i', '', $val_var);
                break;

            case strtoupper(self::TIPO_EMAIL):
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_EMAIL) : filter_var($val_var, FILTER_SANITIZE_EMAIL);
                break;
            default: 
                $val_var = (is_array($val_var)) ? filter_var_array($val_var, FILTER_SANITIZE_SPECIAL_CHARS) : filter_var($val_var, FILTER_SANITIZE_SPECIAL_CHARS);

        }

        if (is_array($val_var)) {
            foreach ($val_var as $key => $value) {
                // -------------------------------------------------------------
                // se almacena valor por default
                // -------------------------------------------------------------
                if(trim($value) == ''){
                    $value = $default;
                }

                $val_var[$key] = htmlentities($value, ENT_QUOTES);
            }
        }

        if (!is_array($val_var)) {
            if (trim($val_var) == ""){
                $val_var = $default;
            }
        }
        return $val_var;
    }

    // metodo que formatea la impresion
    static function _echo($texto, $conajax = false) {
        $texto = html_entity_decode($texto);
        if ($conajax) {
            $texto = self::str_iso88591_to_utf8($texto);
        } else {
            //$texto = self::str_utf8_to_iso88591($texto);  
            $texto = self::str_iso88591_to_utf8($texto);
        }
        //$texto = str_replace('&#10;', "\n", $texto);

        echo nl2br($texto); // html_entity_decode
    }

// metodo que formatea la impresion
    static function _echoTxt($texto, $conajax = false) {
        $texto = html_entity_decode($texto);
        if ($conajax) {
            $texto = self::str_iso88591_to_utf8($texto);
        } else {
            //$texto = self::str_utf8_to_iso88591($texto);  
            $texto = self::str_iso88591_to_utf8($texto);
        }
        //$texto = str_replace('&#10;', "\n", $texto);

        echo ($texto); // html_entity_decode
    }

    // metodo que formatea la impresion
    static function _echoConBr($texto){
        $texto = html_entity_decode($texto);
        self::_echo ($texto);
    }

    static function _echoInt($numero) {
        $punto_decimal = ',';
        $punto_miles = '.';

        echo number_format((double) $numero, 0, $punto_decimal, $punto_miles);
    }

    static function _echoFloat($numero, $decimales = 0) {
        $punto_decimal = ',';
        $punto_miles = '.';
        
        echo number_format((double) $numero, $decimales, $punto_decimal, $punto_miles);
    }
    
    static function _echoFloatDyn($numero) {
        echo self::_returnFloatDyn($numero);
    }
    
    static function _returnFloatDyn($numero) {
        $punto_decimal = ',';
        $punto_miles = '.';
        
        $numero = (double) $numero;        
        if(is_numeric( $numero ) && floor( $numero ) != $numero){
            return number_format((double) $numero, 2, $punto_decimal, $punto_miles);
        }else{
            return number_format((double) $numero, 0, $punto_decimal, $punto_miles);
        }
    }
    
    static function _echoImp($importe, $gral_moneda = false, $return = false, $simbolo = false, $decimales = 0) {
        $signo = ($simbolo) ? $simbolo : 'Gs';
        if ($gral_moneda) {
            $signo = $gral_moneda->getSimbolo();
        }

        $punto_decimal = ',';
        $punto_miles = '.';

        $texto = $signo . ' ' . number_format($importe, $decimales, $punto_decimal, $punto_miles);
        
        //$arr_texto = explode(',', $texto);
        //$texto = $arr_texto[0]."<label style='font-size: 0.7em; opacity: 0.5; vertical-align: top; margin-top: 5px; '>".$arr_texto[1]."</label>";
        
        if ($return) {
            return $texto;
        } else {
            echo $texto;
        }
    }

    static function _echoImpSinSimbolo($importe) {
        $punto_decimal = ',';
        $punto_miles = '.';

        $texto = number_format($importe, 2, $punto_decimal, $punto_miles);
        if ($return) {
            return $texto;
        } else {
            echo $texto;
        }
    }

    static function str_iso88591_to_utf8($string) {
        $encoding = mb_detect_encoding($string, "UTF-8, ISO-8859-1, GBK");

        if ($encoding == "ISO-8859-1") {
            $string = utf8_encode($string);
        }

        return $string;
    }

    static function str_utf8_to_iso88591($string) {
        $encoding = mb_detect_encoding($string, "UTF-8, ISO-8859-1, GBK");

        if ($encoding == "UTF-8") {
            $string = utf8_decode($string);
        }

        return $string;
    }

    static function _returnSaneado($texto, $conajax = false) {
        $texto = html_entity_decode($texto);
        if ($conajax) {
            $texto = self::str_iso88591_to_utf8($texto);
        } else {
            //$texto = self::str_utf8_to_iso88591($texto);  
            $texto = self::str_iso88591_to_utf8($texto);
        }
        $texto = utf8_decode($texto);
        //$texto = str_replace('&#10;', "\n", $texto);

        return $texto; // html_entity_decode    
    }

    /*
      Autor: Pablo Rosen
      Fecha: 20/07/2012

      Metodo que retorna la IP Publica del Visitante
     */

    static function getIPVisitante() {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    /**
     *
     * @param string $pagina
     * @return boolean 
     */
    static function controlUrl($pagina, $caso) {
        $retorno = false;
        if (!empty($pagina) && !empty($caso)) {
            $retorno = Gral::validarPalabrasProhibidas($pagina, $caso);
        }
        return $retorno;
    }

    /**
     * Valida si en una cadena dada existen ciertas palabras que deben dejarse de lado.<br>
     * Por ejemplo, una URL dada por GET, controlar que no tenga ciertas palabras <br>
     * para evitar que se haga da�o
     * @param string $variable La variable a Controlar
     * @param string $caso El caso a controlar cuando sea post o get
     * @return boolean
     * @author Esteban Martinez
     * @since 24/02/2012
     */
    static function validarPalabrasProhibidas($variable, $caso) {
        $retorno = false;

        switch (strtoupper($caso)) {

            //$-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
            case strtoupper("get") :

                //http://pixelar.me/funcion-util-limpiar-url/
                $tildes = array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�');
                $vocales = array('a', 'e', 'i', 'o', 'u', 'n', 'A', 'E', 'I', 'O', 'U', 'N');
                $variable = str_replace($tildes, $vocales, $variable);

                //Array con las posibles cadenas a utilizar por un hacker
                $palabrasProhibidas = array(
                    "Content-Type:",
                    "MIME-Version:", //evita email injection
                    "Content-Transfer-Encoding:",
                    "Return-path:",
                    "Subject:",
                    "From:",
                    "Envelope-to:",
                    "To:",
                    "bcc:",
                    "cc:",
                    "UNION", // evita sql injection
                    "ALL",
                    "TABLE",
                    "DELETE",
                    "ALTER",
                    "CREATE",
                    "DROP",
                    "FROM",
                    "SELECT",
                    "INSERT",
                    "UPDATE",
                    "CRERATE",
                    "TRUNCATE",
                    "INTO",
                    "DISTINCT",
                    "GROUP BY",
                    "WHERE",
                    "LIKE",
                    "RENAME",
                    "DEFINE",
                    "UNDEFINE",
                    "PROMPT",
                    "ACCEPT",
                    "VIEW",
                    "COUNT",
                    "HAVING",
                    "AND",
                    "OR",
                    "COUNT",
                    "SET",
                    "CONCAT_WS",
                    "CONCAT",
                    "LIMIT",
                    "OFFSET",
                    "GRANT",
                    "REVOKE",
                    "EXEC",
                    "IF",
                    "END",
                    "EXISTS",
                    "'",
                    '"',
                    "{",
                    "}",
                    "[",
                    "]",
                    "(",
                    ")",
                    "%",
                    "@",
                    "$",
                    "*",
                    "-",
                    //"_",
                    //".",
                    "*",
                    "|",
                    "^",
                    "~",
                    "`",
                    ",",
                    ";",
                    " ",
                    "applet",
                    "body",
                    "bgsound",
                    "base",
                    "basefont",
                    "embed",
                    "frame",
                    "frameset",
                    "head",
                    "html",
                    "iframe",
                    "ilayer",
                    "layer",
                    "link",
                    "meta",
                    "name",
                    "object",
                    "script",
                    "style",
                    "title",
                    "xml",
                    "action",
                    "background",
                    "codebase",
                    "dynsrc",
                    "lowsrc",
                    ">",
                    "<",
                    "cmd"
                );
                break;

            case strtoupper("post") :
                //En el caso del POST tiene items el array.
                $palabrasProhibidas = array(
                    "Content-Type:",
                    "MIME-Version:", //evita email injection
                    "Content-Transfer-Encoding:",
                    "Return-path:",
                    "Subject:",
                    "From:",
                    "Envelope-to:",
                    "To:",
                    "bcc:",
                    "cc:",
                    "UNION", // evita sql injection
                    "ALL",
                    "TABLE",
                    "DELETE",
                    "ALTER",
                    "CREATE",
                    "DROP",
                    "FROM",
                    "SELECT",
                    "INSERT",
                    "UPDATE",
                    "CRERATE",
                    "TRUNCATE",
                    "INTO",
                    "DISTINCT",
                    "GROUP BY",
                    "WHERE",
                    "LIKE",
                    "RENAME",
                    "DEFINE",
                    "UNDEFINE",
                    "PROMPT",
                    "ACCEPT",
                    "VIEW",
                    "COUNT",
                    "HAVING",
                    "AND",
                    "OR",
                    "COUNT",
                    "SET",
                    "CONCAT_WS",
                    "CONCAT",
                    "LIMIT",
                    "OFFSET",
                    "GRANT",
                    "REVOKE",
                    "EXEC",
                    "IF",
                    "END",
                    "applet",
                    "body",
                    "bgsound",
                    "base",
                    "basefont",
                    "embed",
                    "frame",
                    "frameset",
                    "head",
                    "html",
                    "iframe",
                    "ilayer",
                    "layer",
                    "link",
                    "meta",
                    "name",
                    "object",
                    "script",
                    "style",
                    "title",
                    "xml",
                    "action",
                    "background",
                    "codebase",
                    "dynsrc",
                    "lowsrc",
                    ">",
                    "<"
                );

                break;
        }

        //Gral::pr("Pagina: ".$variable);            

        foreach ($palabrasProhibidas as $valor) {
            //Gral::pr("Valor: ".strtolower($valor));
            if (strpos(strtolower($variable), strtolower($valor)) !== false) {
                //Gral::pr("PALABRA PROHIBIDA: ".$valor);
                $retorno = true;
                break;
            }
        }
        //exit;
        return $retorno;
    }

    /* M?todo que retorna si es Post */

    static function esPost() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return true;
        return false;
    }

    /**
     * Retorna la URL de la Pagina sobre la cual se esta parado.
     * @return string $pagina
     * @author Esteban Martinez
     * @since 23/02/2012 
     */
    static function getURLPagina() {
        //probando
        $request_uri = $_SERVER["REQUEST_URI"];
        $query_string = $_SERVER["QUERY_STRING"]; //este toma los parametros de la URL
        $script_name = $_SERVER["SCRIPT_NAME"];
        $script_filename = $_SERVER["SCRIPT_FILENAME"];
        //$http_referer = $_SERVER["HTTP_REFERER"];//no se puede confiar en este
        $php_self = $_SERVER['PHP_SELF'];
        $url = "http://" . $_SERVER['HTTP_HOST'] . ":" . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
        $archivo = basename($request_uri);

        //aqui
        $pagina = "";
        $host_url = 'http';
        if ($_SERVER["HTTPS"] == "on") {
            $host_url .= "s";
        }

        $host_url .= "://";
        $server_host = $_SERVER["HTTP_HOST"];
        $request_uri = $_SERVER["REQUEST_URI"];

        $pagina .= $host_url;
        $pagina .= $server_host;
        $pagina .= $request_uri;

        return $pagina;
    }

    /* Reemplaza caracteres especiales por sus correspondientes caracteres HTML */

    static function setCharEsp($texto) {
        //$l_charEsp = array("?", "?", "?", "?", "?", "?", "?", "?", "?", "?", "n", "N");
        $l_charEsp = array(160, 130, 161, 162, 163, 181, 144, 214, 224, 233, 163, 164);
        $l_txtEsp = array("&aacute;", "&eacute;", "&iacute;", "&oacute;", "&uacute;", "&Aacute;", "&Eacute;", "&Iacute;", "&Oacute;", "&Uacute;", "&ntilde;", "&Ntilde;");

        for ($i = 0; $i < 12; $i++) {
            $texto = str_replace(chr($l_charEsp[$i]), $l_txtEsp[$i], $texto);
        }
        return $texto;
    }

    /* M?todo que retorna, a partir de una consulta realizada, una versi?n est?ndar de tal consulta para dibujar un combo (select) */

    static function getArrayCmb($resu, $primero = "") {
        $i = 0;

        if (trim($primero) != "") {
            $arr[$i]['cod'] = 0;
            $arr[$i]['descripcion'] = $primero;
            $i++;
        }

        while ($fila = mysql_fetch_array($resu)) {
            $arr[$i]['cod'] = $fila[0];
            $arr[$i]['descripcion'] = Gral::setCharEsp($fila[1]);
            $i++;
        }
        if ($i > 0) {
            return $arr;
        } else {
            return "";
        }
    }

    static function getSes($index) {
        return $_SESSION[$index];
    }

    static function setSes($index, $valor) {
        $_SESSION[$index] = $valor;
    }
    
    /**
     * 
     */
    static function getFechaHoraDBToSIFEN($fechahora){
        return str_replace(' ', 'T', $fechahora);
    }

    /* Retorna Fecha Hora Visual */

    static function getFechaHoraToWEB($fecha, $full = false) {
        if (trim($fecha) == "")
            return ""; /* Se retorna vacio si es vacio */

        $datetime = explode(" ", $fecha);

        $date = explode("-", $datetime[0]);
        $time = explode(":", $datetime[1]);
        if ($full) {
            return $date[2] . "/" . $date[1] . "/" . $date[0] . " " . $time[0] . ":" . $time[1] . ":" . $time[2];
        } else {
            return $date[2] . "/" . $date[1] . "/" . $date[0] . " " . $time[0] . ":" . $time[1];
        }
    }

    /* Retorna Fecha Visual */

    static function getFechaToWEB($fecha, $formato = '') {
        if (trim($fecha) == "")
            return ""; /* Se retorna vacio si es vacio */
        //if(!Ctrl::esFechaValida(trim($fecha))) return $fecha;
        if ($fecha == '1900-01-01')
            return "";

        $datetime = explode(" ", $fecha);

        $date = explode("-", $datetime[0]);
        $time = explode(":", $datetime[1]);

        $fecha_formateada = $date[2] . "/" . $date[1] . "/" . $date[0];

        // casos excepcionales
        switch ($formato) {
            case 'INCLUIR_DIA_NOMBRE':
                $fecha_formateada = Date::getDiaLetras($fecha) . " " . $date[2] . "/" . $date[1];
                break;
            case 'INCLUIR_NOMBRE_DIA':
                $fecha_formateada = Date::getDiaLetrasDesdeFecha($fecha) . " " . $date[2] . "/" . $date[1];
                break;
            case 'INCLUIR_DIA_NOMBRE_CORTO':
                $fecha_formateada = Date::getDiaLetrasCorto($fecha) . " " . $date[2] . "/" . $date[1];
                break;
        }

        return $fecha_formateada;
    }

    /* Retorna Hora Visual */

    static function getHoraToWEB($fecha) {
        if (trim($fecha) == "")
            return ""; /* Se retorna vacio si es vacio */

        $datetime = explode(" ", $fecha);

        $date = explode("-", $datetime[0]);
        $time = explode(":", $datetime[1]);

        return $time[0] . ":" . $time[1];
    }

    /* Retorna el formato de una fechahora para ingresar a la BD */

    static function getFechaHoraToDB($fecha) {
        return self::getFechaToDB($fecha) . ' ' . self::getHoraToDB($fecha);
    }

    /* Retorna el formato de una fecha para ingresar a la BD. Transforma dd/mm/aaaa -> aaaa-mm-dd */

    static function getFechaToDB($fecha) {
        //if(trim($fecha) == "") return ""; /* Se retorna vacio si es '--'*/
        if ($fecha == "")
            $fecha = '01/01/1900';

        $dia = $fecha[0] . $fecha[1];
        $mes = $fecha[3] . $fecha[4];
        $anio = $fecha[6] . $fecha[7] . $fecha[8] . $fecha[9];

        $f_db = $anio . "-" . $mes . "-" . $dia;
        return $f_db;
    }

    /* Retorna Hora para la BD */

    static function getHoraToDB($fecha) {
        if (trim($fecha) == "")
            return ""; /* Se retorna vacio si es vacio */

        $datetime = explode(" ", $fecha);

        $date = explode("-", $datetime[0]);
        $time = explode(":", $datetime[1]);

        return $time[0] . ":" . $time[1] . ":" . $time[2];
    }

    static function getFechaActual() {
        return date('Y-m-d');
    }

    static function getFechaHoraActual() {
        return date('Y-m-d H:i:s');
    }

    /* metodos para manipular valor a mostrar y cargar en price format */

    static function getImporteDesdePriceFormatToDB($valor) {
        $valor = str_replace('.', '', $valor);
        $valor = str_replace(',', '.', $valor);
        return $valor;
    }

    static function getImporteDesdeDbToPriceFormat($valor, $decimales = 0) {
        $valor = self::rnd($valor, $decimales);
        $valor = str_replace('.', '', $valor);
        return $valor;
    }

    /* agrega item de indistinto para combos de b?squeda */

    static function getCmbFiltro($arr, $texto = "") {
        $primero = "Indistinto";
        if (trim($texto) != "")
            $primero = $texto;
        $arr_ind[0]['cod'] = '';
        $arr_ind[0]['descripcion'] = $primero;

        return array_merge($arr_ind, $arr);
    }

    /* redondear */

    static function rnd($monto, $decimales = 0) {
        return self::completar_decimales(round($monto, $decimales), $decimales);
    }

    /* completar ceros en decimales */

    static function completar_decimales($valor, $cantidad = 0) {
        $decimales = explode(".", $valor);

        for($i=0; $i<$cantidad;$i++){
            if (strlen(trim($decimales[1])) == $i){
            $decimales[1] = $decimales[1] . "0";
            }
        }

        $valor = $decimales[0] . "." . $decimales[1];
        return $valor;
    }

    static function getFechaEscrita($fecha = '') {
        $week_days = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
        $months = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $year_now = date("Y");
        $month_now = date("n");
        $day_now = date("j");
        $week_day_now = date("w");
        $date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;
        return $date;
    }

    static function encontrada($p_buscada, $p_frase) {
        $frase = $p_frase;
        $buscada = utf8_decode($p_buscada);
        $reemplazada = "<span class='encontrada'>" . $buscada . "</span>";
        $frase = str_ireplace($buscada, $reemplazada, $frase);
        return $frase;
    }

    static function getConfig($p_clave) {
        // ---------------------------------------------------------------------
        // Deduccion usando DbConfig
        // ---------------------------------------------------------------------
        $valor = self::getConfigV2($p_clave);
        if ($valor) {
            return $valor;
        }
        
        $ar = fopen(dirname(__FILE__) . "/../config/config.ini.php", "r") or die("Error al leer fichero config.ini");
        while (!feof($ar)) {
            $linea = fgets($ar);
            $arr = explode('=', $linea);

            // -----------------------------------------------------------------
            // se recupera la clave
            // -----------------------------------------------------------------
            if (array_key_exists(0, $arr)) {
                $clave = $arr[0];
                $clave = ltrim($clave);
                $clave = rtrim($clave);
            } else {
                $valor = '';
            }

            // -----------------------------------------------------------------
            // se recupera el valor
            // -----------------------------------------------------------------
            if (array_key_exists(1, $arr)) {
                $valor = $arr[1];
                $valor = ltrim($valor);
                $valor = rtrim($valor);
            } else {
                $valor = '';
            }

            if ($clave == $p_clave) {
                return $valor;
            }
        }
        return '';
        fclose($ar);
    }
    
    static function getConfigV2($p_clave) {
        switch ($p_clave) {
            case 'gral_cliente': return DbConfig::CONFIG_GRAL_CLIENTE;
            case 'gral_cliente_min': return DbConfig::CONFIG_GRAL_CLIENTE_MIN;
            case 'gral_title': return DbConfig::CONFIG_GRAL_TITLE;
            case 'gral_razon_social': return DbConfig::CONFIG_GRAL_RAZON_SOCIAL;
            case 'gral_sitio_web': return DbConfig::CONFIG_GRAL_SITIO_WEB;
            case 'gral_cliente_domicilio': return DbConfig::CONFIG_GRAL_CLIENTE_DOMICILIO;
            case 'gral_cliente_localidad': return DbConfig::CONFIG_GRAL_CLIENTE_LOCALIDAD;
            case 'gral_cliente_telefonos': return DbConfig::CONFIG_GRAL_CLIENTE_TELEFONOS;
            case 'gral_cliente_celulares': return DbConfig::CONFIG_GRAL_CLIENTE_CELULARES;
            case 'gral_cliente_condicion_iva': return DbConfig::CONFIG_GRAL_CLIENTE_CONDICION_IVA;
            case 'gral_cliente_cuit': return DbConfig::CONFIG_GRAL_CLIENTE_CUIT;
            case 'gral_cliente_iibb': return DbConfig::CONFIG_GRAL_CLIENTE_IIBB;
            case 'gral_cliente_fecha_inicio': return DbConfig::CONFIG_GRAL_CLIENTE_FECHA_INICIO;
            case 'bd_servidor': return DbConfig::CONFIG_BD_SERVIDOR;
            case 'bd_usuario': return DbConfig::CONFIG_BD_USUARIO;
            case 'bd_clave': return DbConfig::CONFIG_BD_CLAVE;
            case 'bd_base': return DbConfig::CONFIG_BD_BASE;
            case 'bd_base_historico': return DbConfig::CONFIG_BD_BASE_HISTORICO;
            case 'bd_puerto': return DbConfig::CONFIG_BD_PUERTO;
            case 'conf_proyecto': return DbConfig::CONFIG_CONF_PROYECTO;
            case 'conf_proyecto_min': return DbConfig::CONFIG_CONF_PROYECTO_MIN;
            case 'conf_local': return DbConfig::CONFIG_CONF_LOCAL;
            case 'cont_entorno': return DbConfig::CONFIG_CONF_ENTORNO;
            case 'sistema_nombre': return DbConfig::CONFIG_SISTEMA_NOMBRE;
            case 'sistema_nombre_corto': return DbConfig::CONFIG_SISTEMA_NOMBRE_CORTO;
            case 'sistema_codigo': return DbConfig::CONFIG_SISTEMA_CODIGO;
            case 'sistema_codigo_corto': return DbConfig::CONFIG_SISTEMA_CODIGO_CORTO;
            case 'sistema_descripcion': return DbConfig::CONFIG_SISTEMA_DESCRIPCION;
            default:
                return false;
        }
        return false;
    }
    

    static function getPath($p_clave) {

        // ---------------------------------------------------------------------
        // Deduccion usando DbConfig
        // ---------------------------------------------------------------------
        $valor = self::getPathV2($p_clave);
        if ($valor) {
            return $valor;
        }

        // ---------------------------------------------------------------------
        // excepcion para resolucion de dominios en produccion
        // ---------------------------------------------------------------------
        if ($p_clave == 'path_http') {
            $local = self::getConfig('conf_local');
            $local = eval('return ' . $local . ';');
            if (!$local) {
                $valor = 'http://' . $_SERVER['HTTP_HOST'] . '/';
                return $valor;
            }
        }

        $ar = fopen(dirname(__FILE__) . "/../config/paths.ini.php", "r") or die("Error al leer fichero path.ini");
        while (!feof($ar)) {
            $linea = fgets($ar);
            $arr = explode('=', $linea);

            // -----------------------------------------------------------------
            // se recupera la clave
            // -----------------------------------------------------------------
            if (array_key_exists(0, $arr)) {
                $clave = $arr[0];
                $clave = ltrim($clave);
                $clave = rtrim($clave);
            } else {
                $valor = '';
            }

            // -----------------------------------------------------------------
            // se recupera el valor
            // -----------------------------------------------------------------
            if (array_key_exists(1, $arr)) {
                $valor = $arr[1];
                $valor = ltrim($valor);
                $valor = rtrim($valor);
            } else {
                $valor = '';
            }

            if ($clave == $p_clave) {
                return $valor;
            }
        }
        return '';
        fclose($ar);
    }
    
    static function getPathAbs() {
        return self::getPath('path_absoluto');
    }

    static function getPathHttp() {
        return self::getPath('path_http');
    }


    static function getPathAbsTienda() {
        return DbConfig::PATH_ABSOLUTO_TIENDA;
    }

    static function getPathHttpTienda() {
        return DbConfig::PATH_HTTP_TIENDA;
    }

    
    static function getPathV2($p_clave) {
        switch ($p_clave) {
            case 'path_absoluto': return DbConfig::PATH_ABSOLUTO;
            case 'path_http': return DbConfig::PATH_HTTP;
            case 'path_http_publico': return DbConfig::PATH_HTTP_PUBLICO;
            case 'path_http_publico_ml': return DbConfig::PATH_HTTP_PUBLICO_ML;
            case 'path_logo_proyecto': return DbConfig::PATH_LOGO_PROYECTO;
            case 'path_logo_empresa': return DbConfig::PATH_LOGO_EMPRESA;
            case 'path_logo_empresa_pdf': return DbConfig::PATH_LOGO_EMPRESA_PDF;
            case 'path_logo_empresa_pdf_etiqueta': return DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA;
            case 'path_favicon': return DbConfig::PATH_FAVICON;
            default:
                return false;
        }
        return false;
    }

    static function wLogSql($caso, $texto) {
        $fp = fopen(self::getPathAbs() . "log/sql-" . $caso . "-" . date('Ymd') . "-" . date('H') . "hs.txt", "a");

        fwrite($fp, PHP_EOL);
        fwrite($fp, date("d/m/Y H:i:s") . PHP_EOL);

        $texto = str_replace('FROM', PHP_EOL . 'FROM', $texto);
        $texto = str_replace('AND', PHP_EOL . 'AND', $texto);
        $texto = str_replace('OR', PHP_EOL . 'OR', $texto);
        $texto = str_replace('WHERE', PHP_EOL . 'WHERE', $texto);
        $texto = str_replace('ORDER BY', PHP_EOL . 'ORDER BY', $texto);
        $texto = str_replace('GROUP BY', PHP_EOL . 'GROUP BY', $texto);
        $texto = str_replace('HAVING', PHP_EOL . 'HAVING', $texto);

        fwrite($fp, $texto . PHP_EOL);

        fwrite($fp, PHP_EOL);
        fwrite($fp, "---------------------" . PHP_EOL);
        fclose($fp);
    }

    static function wrArchivoXML($lenguaje, $texto) {
        $fp = fopen(Gral::getPathAbs()."lang/" . $lenguaje . ".xml", "w+");

        // cabecera
        fwrite($fp, '<?xml version="1.0" encoding="utf-8"?>

<!-- ' . $lenguaje . ' language -->
<language>' . PHP_EOL);

        // cuerpo
        fwrite($fp, utf8_encode($texto) . PHP_EOL);

        // pie
        fwrite($fp, '</language>' . PHP_EOL);
        fclose($fp);
    }

    static function getDBTablaDesdeClase($valor) {
        $tabla = "";
        for ($i = 0; $i <= strlen($valor); $i++) {
            $char = substr($valor, $i, 1);
            if (ctype_upper($char)) {
                if ($i > 1) {
                    $char = '_' . strtolower($char);
                } else {
                    $char = strtolower($char);
                }
            }
            $tabla .= $char;
        }
        return $tabla;
    }

    static function getDBClaseDesdeTabla($valor) {
        $guion = false;
        $clase = "";
        for ($i = 0; $i <= strlen($valor); $i++) {
            $char = substr($valor, $i, 1);

            if ($char != "_") {
                if ($guion) {
                    $char = ucwords($char);
                }
                $clase .= $char;
                $guion = false;
            } else {
                $guion = true;
            }
        }
        return ucwords($clase);
    }

    static function getDBEliminarPrefijoTipoElemento($valor) {
        $arr = explode('_', $valor);
        array_shift($arr);

        return implode('_', $arr);
    }

    static function getDBEliminarIndicadorIdEnCampo($valor) {
        $arr = explode('_', $valor);
        array_pop($arr);

        return implode('_', $arr);
    }

    static function get_include_contents($filename, $param = array()) {
        if (is_file($filename)) {
            ob_start();
            include $filename;
            return ob_get_clean();
        }
        return false;
    }

    static function getTipoVisualizacionAdmCmb() {
        $cont = 0;
        $arr = array();
        
        $cont++;
        $arr[$cont]['cod'] = 'LISTA';
        $arr[$cont]['descripcion'] = 'Lista';
        
        $cont++;
        $arr[$cont]['cod'] = 'GRID';
        $arr[$cont]['descripcion'] = 'Grid';

        return $arr;
    }
    
    static function getAniosCmb($cantidad) {
        $anio = date('Y');
        $cont = 0;
        $arr = array();
        for ($i = ($anio - $cantidad); $i <= ($anio + $cantidad); $i++) {
            $cont++;
            $arr[$cont]['cod'] = $i;
            $arr[$cont]['descripcion'] = $i;
        }
        return $arr;
    }

    static function getNumerosCmb($maximo, $minimo = 1, $step = 1) {
        $cont = 0;
        $arr = array();

        for ($i = $minimo; $i <= $maximo; $i+=$step) {
            $cont++;
            $arr[$cont]['cod'] = $i;
            $arr[$cont]['descripcion'] = $i;
        }
        return $arr;
    }

    /* Retorna Camel Case */

    static function getCamelCase($attr, $pre = '') {
        $guion = false;
        $new_attr = "";
        for ($i = 0; $i <= strlen($attr); $i++) {
            $char = substr($attr, $i, 1);

            if ($char != "_") {
                if ($guion) {
                    $char = ucwords($char);
                }
                $new_attr .= $char;
                $guion = false;
            } else {
                $guion = true;
            }
        }
        return $pre . ucwords($new_attr);
    }

    static function wLog($texto) {
        $fp = fopen(Gral::getPathAbs() . "log.txt", "a");

        fwrite($fp, PHP_EOL);
        fwrite($fp, date("d/m/Y H:i:s") . ": " . $texto);

        fclose($fp);
    }
    
    static function wLogSimple($texto) {
        $fp = fopen(Gral::getPathAbs() . "log.txt", "a");
        $milis = substr(round(microtime(true) * 1000), -3);

        fwrite($fp, date("d/m/Y H:i:s").' '.$milis .' - '.$texto. PHP_EOL);
        fclose($fp);
    }

    static function echoLogSimple($texto) {
        $milis = substr(round(microtime(true) * 1000), -3);
        Gral::pr(date("d/m/Y H:i:s").' '.$milis .' - '.$texto);
    }    

    static function getCantidadAparicionesEnArray($value, $array) {
        $count = 0;

        if (is_array($array)) {
            foreach ($array as $k => $v) {
                if ((string) $v == (string) $value) {
                    ++$count;
                }
            }
        }
        return $count;
    }

    static function getStringSaneadoSinCaracteresEspeciales($string) {
        //$string = utf8_decode($string);

        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ü', 'Ü');
        $repl = array('a', 'e', 'i', 'o', 'u', 'n', 'N', 'A', 'E', 'I', 'O', 'U', 'u', 'U');
        $string = str_replace($find, $repl, $string);

        $find = array(' ', '&', '\r\n', '\n', '+');
        $string = str_replace($find, '-', $string);

        $string = strtolower($string);

        $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
        $repl = array('', '-', '');
        $string = preg_replace($find, $repl, $string);

        return $string;
    }

    static function getStringSaneadoSinAcentosEnes($string) {
        //$string = utf8_decode($string);

        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ü', 'Ü');
        $repl = array('a', 'e', 'i', 'o', 'u', 'n', 'N', 'A', 'E', 'I', 'O', 'U', 'u', 'U');
        $string = str_replace($find, $repl, $string);

        return $string;
    }

    static function getLetrasInicialesCmb() {
        $cont = 0;
        $arr = array();
        for ($i = 65; $i <= 90; $i++) {
            $cont++;
            $arr[$cont]['cod'] = chr($i);
            $arr[$cont]['descripcion'] = chr($i);
        }
        return $arr;
    }

    static function setVerErroresPHP() {
        error_reporting(E_ERROR);
        ini_set('display_errors', '1');
    }

    static function echoSqlSentence($sql) {
        include_once Gral::getPathAbs() . 'comps/sql-formatter-master/lib/SqlFormatter.php';
        $sql_formateado =  SqlFormatter::format($sql);
        //$sql_formateado = str_replace(' <span >:</span> <span style="color: orange;">', ':', $sql_formateado);
        $sql_formateado = str_replace(' <span >:</span> <span style="color: orange;">', '<span >:</span><span style="color: orange;">', $sql_formateado);
        echo $sql_formateado;
    }

    static function getExisteConexionInternet($url = false, $port = 80) {
        if ($url) {
            $connected = @fsockopen($url, $port);
        } else {
            $connected = @fsockopen("www.example.com", 80);
        }

        if ($connected) {
            $is_conn = true;
            fclose($connected);
        } else {
            $is_conn = false;
        }
        return $is_conn;
    }

    static function getNumeroEnLetrasCodificadoPorPalabraClave($importe) {
        $arr_numeros = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.');
        $arr_letras = array('Z', 'N', 'U', 'E', 'V', 'A', 'Y', 'O', 'R', 'K', ',');

        $numero_letras_codificado = "";
        $importe = (string) $importe;

        for ($i = 0; $i <= strlen($importe); $i++) {
            $numero = $importe[$i];
            $posicion = array_search($numero, $arr_numeros);
            if ($posicion !== false) {
                $letra = $arr_letras[$posicion];
                $numero_letras_codificado .= $letra;
            } else {
                $numero_letras_codificado .= $numero;
            }
        }
        return $numero_letras_codificado;
    }

    /*
     * Metodo que compara la igualdad de 2 numeros float
     * Se utiliza este metodo por conflictos con PHP y decimales
     */

    static function getCompararIgualdadNumerosFloat($numero1, $numero2) {
        $numero1 = round($numero1, 2);
        $numero2 = round($numero2, 2);

        $numero_restado = $numero1 - $numero2;
        if (intval($numero_restado) == 0) {
            return true;
        }
        return false;
    }
    
    static function setDbCamelizar($input, $separator = '_') {
        return str_replace($separator, '', ucwords($input, $separator));
    }
    
    static function getOrdenarArrayUsort($array, $orden, $cmb_ordenamiento_modo = GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_ASCENDENTE){
        usort($array, function($arr, $arr_2) use ($orden, $cmb_ordenamiento_modo){
            if($cmb_ordenamiento_modo == GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_ASCENDENTE){
                return ($arr[$orden] > $arr_2[$orden]) ? 1 : -1;
            }else{
                return ($arr[$orden] < $arr_2[$orden]) ? 1 : -1;                
            }
        });
        
        return $array;
    }
    
    static function getTextoPluralizado($texto){
        $texto_pluralizado = '';
        
        $arr_palabras = explode(' ', $texto);
        foreach($arr_palabras as $palabra){
            $ultimo_carecter = substr($palabra, -1);
            $ultimo_carecter = strtolower($ultimo_carecter);
            
            if(in_array($ultimo_carecter, array('l'))){
                // -----------------------------------------------------------------
                // se determina si debe agregarse 'es' al final
                // -----------------------------------------------------------------
                $palabra.= 'es';
            }elseif(in_array($ultimo_carecter, array('a', 'e', 'i', 'o', 'u'))){
                // -----------------------------------------------------------------
                // se determina si debe agregarse 's' al final
                // -----------------------------------------------------------------
                $palabra.= 's';
            }
            $texto_pluralizado.= $palabra.' ';
        }
        
        return $texto_pluralizado;
    }
    
    /**
     * 
     * @param type $xcifra
     * @return type
     */
    static function getNumeroEscritoEnLetras($xcifra) {
        $xarray = array(
            0 => "Cero",
            1 => "UN", "DOS", "TRES", "CUATRO", "CINCO", "SEIS", "SIETE", "OCHO", "NUEVE", "DIEZ",
            "ONCE", "DOCE", "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE", "DIECIOCHO", "DIECINUEVE", "VEINTI",
            30 => "TREINTA",
            40 => "CUARENTA",
            50 => "CINCUENTA",
            60 => "SESENTA",
            70 => "SETENTA",
            80 => "OCHENTA",
            90 => "NOVENTA",
            100 => "CIENTO",
            200 => "DOSCIENTOS",
            300 => "TRESCIENTOS",
            400 => "CUATROCIENTOS",
            500 => "QUINIENTOS",
            600 => "SEISCIENTOS",
            700 => "SETECIENTOS",
            800 => "OCHOCIENTOS",
            900 => "NOVECIENTOS"
        );
        
        $xcifra = trim($xcifra);
        $xlength = strlen($xcifra);
        $xpos_punto = strpos($xcifra, ".");
        $xaux_int = $xcifra;
        $xdecimales = "00";
        if (!($xpos_punto === false)) {
            if ($xpos_punto == 0) {
                $xcifra = "0" . $xcifra;
                $xpos_punto = strpos($xcifra, ".");
            }
            $xaux_int = substr($xcifra, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
            $xdecimales = substr($xcifra . "00", $xpos_punto + 1, 2); // obtengo los valores decimales
        }

        $XAUX = str_pad($xaux_int, 18, " ", STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
        $xcadena = "";
        for ($xz = 0; $xz < 3; $xz++) {
            $xaux = substr($XAUX, $xz * 6, 6);
            $xi = 0;
            $xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
            $xexit = true; // bandera para controlar el ciclo del While
            while ($xexit) {
                if ($xi == $xlimite) { // si ya llegó al límite máximo de enteros
                    break; // termina el ciclo
                }

                $x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
                $xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
                for ($xy = 1; $xy < 4; $xy++) { // ciclo para revisar centenas, decenas y unidades, en ese orden
                    switch ($xy) {
                        case 1: // checa las centenas
                            if (substr($xaux, 0, 3) < 100) { // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas
                            } else {
                                $key = (int) substr($xaux, 0, 3);
                                if (TRUE === array_key_exists($key, $xarray)) {  // busco si la centena es número redondo (100, 200, 300, 400, etc..)
                                    $xseek = $xarray[$key];
                                    $xsub = Gral::subfijo($xaux); // devuelve el subfijo correspondiente (Millón, Millones, Mil o nada)
                                    if (substr($xaux, 0, 3) == 100)
                                        $xcadena = " " . $xcadena . " CIEN " . $xsub;
                                    else
                                        $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                    $xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
                                } else { // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
                                    $key = (int) substr($xaux, 0, 1) * 100;
                                    $xseek = $xarray[$key]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
                                    $xcadena = " " . $xcadena . " " . $xseek;
                                } // ENDIF ($xseek)
                            } // ENDIF (substr($xaux, 0, 3) < 100)
                            break;
                        case 2: // checa las decenas (con la misma lógica que las centenas)
                            if (substr($xaux, 1, 2) < 10) {
                                
                            } else {
                                $key = (int) substr($xaux, 1, 2);
                                if (TRUE === array_key_exists($key, $xarray)) {
                                    $xseek = $xarray[$key];
                                    $xsub = Gral::subfijo($xaux);
                                    if (substr($xaux, 1, 2) == 20)
                                        $xcadena = " " . $xcadena . " VEINTE " . $xsub;
                                    else
                                        $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                    $xy = 3;
                                } else {
                                    $key = (int) substr($xaux, 1, 1) * 10;
                                    $xseek = $xarray[$key];
                                    if (20 == substr($xaux, 1, 1) * 10)
                                        $xcadena = " " . $xcadena . " " . $xseek;
                                    else
                                        $xcadena = " " . $xcadena . " " . $xseek . " Y ";
                                } // ENDIF ($xseek)
                            } // ENDIF (substr($xaux, 1, 2) < 10)
                            break;
                        case 3: // checa las unidades
                            if (substr($xaux, 2, 1) < 1) { // si la unidad es cero, ya no hace nada
                            } else {
                                $key = (int) substr($xaux, 2, 1);
                                $xseek = $xarray[$key]; // obtengo directamente el valor de la unidad (del uno al nueve)
                                $xsub = Gral::subfijo($xaux);
                                $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                            } // ENDIF (substr($xaux, 2, 1) < 1)
                            break;
                    } // END SWITCH
                } // END FOR
                $xi = $xi + 3;
            } // ENDDO

            if (substr(trim($xcadena), -5, 5) == "ILLON") // si la cadena obtenida termina en MILLON o BILLON, entonces le agrega al final la conjuncion DE
                $xcadena .= " DE";

            if (substr(trim($xcadena), -7, 7) == "ILLONES") // si la cadena obtenida en MILLONES o BILLONES, entoncea le agrega al final la conjuncion DE
                $xcadena .= " DE";

            // ----------- esta línea la puedes cambiar de acuerdo a tus necesidades o a tu país -------
            if (trim($xaux) != "") {
                switch ($xz) {
                    case 0:
                        if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                            $xcadena .= "UN BILLON ";
                        else
                            $xcadena .= " BILLONES ";
                        break;
                    case 1:
                        if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                            $xcadena .= "UN MILLON ";
                        else
                            $xcadena .= " MILLONES ";
                        break;
                    case 2:
                        if ($xcifra < 1) {
                            //$xcadena = "CERO PESOS $xdecimales/100 M.N.";
                            $xcadena = "cero guaraníes";
                        }
                        if ($xcifra >= 1 && $xcifra < 2) {
                            //$xcadena = "UN PESO CON  $xdecimales CENTAVOS. ";
                            $xcadena = "un guaraní";
                        }
                        if ($xcifra >= 2) {
                            //$xcadena .= " PESOS CON $xdecimales CENTAVOS ";
                            $xcadena .= " guaraníes";
                        }
                        break;
                } // endswitch ($xz)
            } // ENDIF (trim($xaux) != "")
            // ------------------      en este caso, para México se usa esta leyenda     ----------------
            $xcadena = str_replace("VEINTI ", "VEINTI", $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
            $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
            $xcadena = str_replace("UN UN", "UN", $xcadena); // quito la duplicidad
            $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
            $xcadena = str_replace("BILLON DE MILLONES", "BILLON DE", $xcadena); // corrigo la leyenda
            $xcadena = str_replace("BILLONES DE MILLONES", "BILLONES DE", $xcadena); // corrigo la leyenda
            $xcadena = str_replace("DE UN", "UN", $xcadena); // corrigo la leyenda
        } // ENDFOR ($xz)
        
        $xcadena = trim($xcadena);
        $xcadena = strtolower($xcadena);
        $xcadena = ucfirst($xcadena);
        
        return $xcadena;
    }

    /**
     * 
     * @param type $xx
     * @return string
     */
    static function subfijo($xx) { // esta función regresa un subfijo para la cifra
        $xx = trim($xx);
        $xstrlen = strlen($xx);
        if ($xstrlen == 1 || $xstrlen == 2 || $xstrlen == 3)
            $xsub = "";
        //
        if ($xstrlen == 4 || $xstrlen == 5 || $xstrlen == 6)
            $xsub = "MIL";
        //
        return $xsub;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 12/1/2023 13:00
     */
    static function getMediana($array) {
        sort($array);
        $cant_elementos = count($array);
        $valor_medio = floor(($cant_elementos-1)/2);
        if($cant_elementos % 2) {
            $mediana = $array[$valor_medio];
        } else {
            $bajo = $array[$valor_medio];
            $alto = $array[$valor_medio+1];
            $mediana = (($bajo+$alto)/2);
        }
        
        return $mediana;
    }
    
    /**
     * 
     */
    static function _echoHoras($numero_decimal, $tipo = ':') {
        //Gral::pr($numero_decimal);

        $decimal = $numero_decimal - floor($numero_decimal);
        $decimal = ($decimal * 100 * 60) / 100;

        $h_escrita = str_pad(floor($numero_decimal), 2, 0, STR_PAD_LEFT);
        $m_escrito = str_pad((int) $decimal, 2, 0, STR_PAD_LEFT);

        switch ($tipo) {
            case 'hm':
                $h_m_escrito = $h_escrita . 'h ' . $m_escrito . 'm';
                break;
            default:
                $h_m_escrito = $h_escrita . ':' . $m_escrito;
        }

        echo $h_m_escrito;
    }
    
    /**
     * 
     */
    static function getCantidadsCmb($limit = 30) {
        $arr = array();
        for ($i = 1; $i <= $limit; $i++) {
            $arr[$i]['cod'] = $i;
            $arr[$i]['descripcion'] = $i;
        }
        return $arr;
    }
    
    /**
     * 
     * @param type $cuit
     * @return string
     */
    static function formatoCuit($cuit)
    {
        $nuevo_cuit = '';
        $arr_cuit = str_split($cuit);//array con todos los numeros
        
        end( $arr_cuit );//posiciona en el final para con key poder saber el indice del ultimo elemento
        $key_ultima_posicion = key( $arr_cuit );

        foreach($arr_cuit as $key => $val)
        {
            $nuevo_cuit .= $val;
            if($key == 1  || $key == $key_ultima_posicion-1)
            {
                $nuevo_cuit .= '-';
            }
        }
        return $nuevo_cuit;
    }

    /**
     * 
     */
    static function getCompararIgualdadDeNumeros($numero_1, $numero_2, $tolerancia = 0.1){
        $diferencia = $numero_1 - $numero_2;
        $diferencia = abs($diferencia);

        if($diferencia <= $tolerancia){
            return true;
        }
        return false;
    } 

    static function getDigitoVerificadorM11($p_numero, $p_basemax = 11) {
        // CALCULO Digito verificador - RUC
        // AUTOR: Luis Francou.

        $v_numero_al = '';
        $p = 0;
        $v_caracter = '';
        $v_total = 0;
        $v_resto = 0;
        $k = 2;
        $v_digit = 0;
        $i = 0;

        // Filtrar los caracteres del número
        for ($i = 0; $i < strlen($p_numero); $i++) {
            $v_caracter = $p_numero[$i];
            if ($v_caracter >= '0' && $v_caracter <= '9') {
                $v_numero_al .= $v_caracter;
            } else {
                $v_numero_al .= ord($v_caracter);
            }
        }

        $k = 2;
        $v_total = 0;
        $i = strlen($v_numero_al) - 1;
        $p = $i;

        while ($i >= 0) {
            $k = $k > $p_basemax ? 2 : $k;
            $v_numero_aux = ord($v_numero_al[$p--]) - 48;
            $v_total += $v_numero_aux * $k++;
            $i--;
        }

        $v_resto = $v_total % 11;
        $v_digit = $v_resto > 1 ? 11 - $v_resto : 0;

        return $v_digit;
    }
    
    
    /**
     * 
     */
    static function getDigitoVerificadorRUC($ci, $baseMax = 11){
        $resultado = 0;
        $index = 0;
        for ($rucIndex = strlen($ci) - 1; $rucIndex >= 0; $rucIndex--) {
            $resultado += (int) $ci[$rucIndex] * ($index + 2);
            $r = $resultado % $baseMax;
            $index++;
        }
        $verificador = $r > 1 ? $baseMax - $r : 0;

        return $verificador;
    }
}

?>