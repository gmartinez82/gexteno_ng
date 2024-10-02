<?php

class Date {

    const PERIODICIDAD_DIARIO = 'DIARIO';
    const PERIODICIDAD_SEMANAL_MES = 'SEMANAL_MES';
    const PERIODICIDAD_SEMANAL_ANIO = 'SEMANAL_ANIO';
    const PERIODICIDAD_MENSUAL = 'MENSUAL';
    const PERIODICIDAD_ANUAL_MENSUAL = 'ANUAL_MENSUAL';
    const PERIODICIDAD_ANUAL = 'ANUAL';
    
    const FECHA_EMPTY = '1900-01-01';

    static function getSep() {
        return $sep = "-";
    }

    /**
     * retorna una matriz de 3 valores (dia, mes, anio) en funci�n a una fecha que recibe por parametro (string)
     *
     * @param unknown_type $str_fecha
     * @return unknown
     */
    static function getArrFecha($str_fecha) {
        $fecha = str_replace("/", "-", $str_fecha);
        $arr_fecha = date_parse($fecha);

        if ($arr_fecha['error_count'] == 0) {
            $f['dia'] = self::addCeros2Cifras($arr_fecha['day']);
            $f['mes'] = self::addCeros2Cifras($arr_fecha['month']);
            $f['anio'] = $arr_fecha['year'];
        } else {
            $arr = explode("/", $str_fecha);
            $f['dia'] = self::addCeros2Cifras($arr[0]);
            $f['mes'] = self::addCeros2Cifras($arr[1]);
            $f['anio'] = $arr[2];
        }

        return $f;
    }

    /**
     * calcula la diferencia de tiempo entre 2 fechas dadas. Puede ser diferencia en d�as, meses o a�os.
     *
     * @param unknown_type $caso - El caso puede ser 
     * 		d - retorna diferencia en d�as
     * 		m - retorna diferencia en meses
     * 		a - retorna diferencia en a�os
     * @param unknown_type $fecha_desde
     * @param unknown_type $fecha_hasta
     * @return unknown
     */
    static function getDiferenciaTiempo($caso, $fecha_desde, $fecha_hasta) {
        //VsFuncionesGlobales::vs_pr($fecha_desde, "desde");
        //VsFuncionesGlobales::vs_pr($fecha_hasta, "hasta");
        $fd = self::getArrFecha($fecha_desde);
        $fh = self::getArrFecha($fecha_hasta);
        switch ($caso) {
            // -----------------------------------------------------------------
            // en dias
            // -----------------------------------------------------------------
            case "d":
                $s1 = mktime(0, 0, 0, $fd['mes'], $fd['dia'], $fd['anio']);
                $s2 = mktime(0, 0, 0, $fh['mes'], $fh['dia'], $fh['anio']);

                //VsFuncionesGlobales::vs_pr($s1,"s1");
                //VsFuncionesGlobales::vs_pr($s2,"s2");
                $dif = $s2 - $s1;
                $cant_dias_transcurridos = floor($dif / 60 / 60 / 24);
                return $cant_dias_transcurridos;
                break;
            // -----------------------------------------------------------------
            // en meses
            // -----------------------------------------------------------------
            case "m": 
                $cant_meses_transcurridos = 0;
                $continua = true;
                $nva_fecha = $fecha_desde;
                while ($continua) {
                    $nva_fecha = self::getUltimaFecha($nva_fecha, 1);

                    if (self::esRangoValido($nva_fecha, self::getFechaActual(false))) {
                        $cant_meses_transcurridos++;
                    } else {
                        $continua = false;
                    }
                }
                return $cant_meses_transcurridos;
                break;
            // -----------------------------------------------------------------
            // en anios
            // -----------------------------------------------------------------
            case "a":
                $cant_anios_transcurridos = 0;
                $meses = self::getDiferenciaTiempo("m", $fecha_desde, $fecha_hasta);

                $cant_anios_transcurridos = $meses / 12;
                return $cant_anios_transcurridos;
                break;
            // -----------------------------------------------------------------
            // en minutos
            // -----------------------------------------------------------------
            case "i":
                $datetime_fecha_desde = new DateTime($fecha_desde);
                $datetime_fecha_hasta = new DateTime($fecha_hasta);

                if (is_string($datetime_fecha_desde))
                    $datetime_fecha_desde = date_create($datetime_fecha_desde);
                if (is_string($datetime_fecha_hasta))
                    $datetime_fecha_hasta = date_create($datetime_fecha_hasta);

                $diff = date_diff($datetime_fecha_desde, $datetime_fecha_hasta, false);

                $total = (($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h) * 60 + $diff->i + $diff->s / 60;

                if ($diff->invert) {
                    return -1 * $total;
                } else {
                    return $total;
                }
                break;
        }
        return 0;
    }

    /**
     * completa ceros a un digito para que siempre sean 2 d�gitos.
     *
     * @param unknown_type $valor
     * @return unknown
     */
    static function addCeros2Cifras($valor) {
        if (strlen($valor) == 1) {
            $valor = "0" . $valor;
        }
        return $valor;
    }

    /**
     * retorna el c�lculo de una fecha a la que se le van incrementando una cierta cantidad de meses
     * Por ej: 
     * 	$fecha = 15/11/2008
     * 	$cant_meses = 5
     * 	retorna 15/03/2009 
     *
     * @param unknown_type $fecha
     * @param unknown_type $cant_meses
     * @return unknown
     */
    static function getUltimaFecha($fecha, $cant_meses) {
        $fecha = self::getArrFecha($fecha);
        $dia = $fecha['dia'];
        $mes = $fecha['mes'];
        $anio = $fecha['anio'];

        $nvo_anio = $anio;
        $nvo_mes = $mes;

        if ($cant_meses >= 0) {
            for ($i = 1; $i <= $cant_meses; $i++) {
                $nvo_mes++;
                if ($nvo_mes > 12) {
                    $nvo_anio++;
                    $nvo_mes = 1;
                }
            }
        } else {
            //VsFuncionesGlobales::vs_pr($cant_meses,"meses");
            //VsFuncionesGlobales::vs_pr($nvo_mes,"mes");
            //VsFuncionesGlobales::vs_pr($nvo_anio,"anio");			
            for ($i = -1; $i >= $cant_meses; $i--) {
                $nvo_mes--;
                if ($nvo_mes == 0) {
                    $nvo_anio--;
                    $nvo_mes = 12;
                }
                //VsFuncionesGlobales::vs_pr("");
                //VsFuncionesGlobales::vs_pr($nvo_mes,"mes");
                //VsFuncionesGlobales::vs_pr($nvo_anio,"a�o");
            }

            //exit();
        }
        return $nvo_anio . "-" . self::addCeros2Cifras($nvo_mes) . "-" . self::addCeros2Cifras($dia);
    }

    /**
     * retorna la fecha en formato dd/mm/aaaa
     *
     * @param unknown_type $fecha
     * @param unknown_type $datetime: indica si la fecha que se pasa por parametro es fecha/hora
     * @return unknown
     */
    static function getFechaVisual($fecha, $datetime = false) {
        $hora = "";
        if ($datetime) {
            $arr = explode(" ", $fecha);
            $fecha = $arr[0];
            $hora = $arr[1];
        }
        if (trim($fecha) == "")
            return $fecha;
        $arr_f = self::getArrFecha($fecha);

        $nva_fecha = $arr_f['dia'] . "/" . $arr_f['mes'] . "/" . $arr_f['anio'];
        if (trim($hora) != "")
            $nva_fecha .= " " . $hora;
        return $nva_fecha;
    }

    /**
     * retorna la fecha actual del sistem
     *
     * @param unknown_type $caso - true: dd/mm/aaaa - false: aaaa-mm-dd
     * @return unknown
     */
    static function getFechaActual($caso = true) {
        switch ($caso) {
            case true:
                return self::getFechaVisual(date("Y-m-d"));
                break;
            case false:
                return date("Y-m-d");
                break;
        }
    }

    /**
     * devuelve a partir de la fecha actual el dia, el mes o el a�o actual
     *
     * @param unknown_type $caso
     * 	d - retorna el d�a actual
     * 	m - retorna el mes actual
     * 	Y - retorna el a�o actual
     * @return unknown
     */
    static function getActual($caso) {
        switch ($caso) {
            case "Y": return date("Y");
                break;
            case "m": return date("m");
                break;
            case "d": return date("d");
                break;
        }
    }

    /**
     * retorna el primer d�a h�bil subsiguiente a la fecha indicada
     * Se considera d�a no h�bil: s�bado, domingo y feriado
     *
     * @param unknown_type $str_fecha
     * @return unknown
     */
    static function getPrimerDiaHabil($str_fecha) {
        while (!self::esDiaHabil($str_fecha)) {
            $str_fecha = self::sumarDias($str_fecha, 1);
        }

        return $str_fecha;
    }

    /**
     * comprueba que una fecha indicada sea o no un d�a h�bil
     *
     * @param unknown_type $str_fecha
     * @return unknown
     */
    static function esDiaHabil($str_fecha) {
        if (self::esFinSemana($str_fecha)) {
            return false;
        }
        if (self::esFeriado($str_fecha)) {
            return false;
        }
        return true;
    }

    /**
     * retorna una nueva fecha que deriva de la suma de d�as a una fecha indicada
     *
     * @param unknown_type $str_fecha - fecha inicial
     * @param unknown_type $cant - cantidad de d�as a sumar
     * @return unknown
     */
    static function sumarDias($str_fecha, $cant) {
        $f = self::getArrFecha($str_fecha);
        $ts = mktime(0, 0, 0, $f['mes'], $f['dia'], $f['anio']);
        $ts_2 = $cant * 24 * 60 * 60;

        $nva = getdate($ts + $ts_2);
        $nva_fecha = $nva['year'] . "-" . self::addCeros2Cifras($nva['mon']) . "-" . self::addCeros2Cifras($nva['mday']);

        return $nva_fecha;
    }

    /**
     * 
     * @param type $str_fecha
     * @param type $cant
     */
    static function sumarMeses($str_anio_mes, $cant){
        
        $nuevafecha = strtotime($cant.' months', strtotime($str_anio_mes));
        $nuevafecha = date('Y-m' , $nuevafecha);
        
        return $nuevafecha; // Y-m
    }

    /**
     * retorna un booleano de acuerdo si una fecha indicada es s�bado o domingo
     *
     * @param unknown_type $str_fecha
     * @return unknown
     */
    static function esFinSemana($str_fecha) {
        $f = self::getArrFecha($str_fecha);

        $ts = mktime(0, 0, 0, $f['mes'], $f['dia'], $f['anio']);
        $datos = getdate($ts);

        $dia_s = $datos['wday'];
        $findesemana = false;
        switch ($dia_s) {
            case 0: $findesemana = true;
                break;
            case 6: $findesemana = true;
                break;
        }
        return $findesemana;
    }

    /**
     * comprueba si una fecha dada es feriado o no (de acuerdo a un padr�n de feriados en Tabla de Tablas - tabla 122)
     *
     * @param unknown_type $str_fecha
     * @param unknown_type $caso - booleano que indica la fecha real en que cae el feriado (pudo haber sido corrida la fecha en caso de no ser inamovible)
     * @return unknown
     */
    static function esFeriado($str_fecha, $caso = false) {
        $f = self::getArrFecha($str_fecha);
        $fecha = $f['dia'] . "/" . $f['mes'];

        $arr_feriados = self::getFeriados($caso);
        $existe = array_search($fecha, $arr_feriados);

        if ($existe > 0)
            return true;

        return false;
    }

    /**
     * retorna un array con los feriados cargados en la Tabla 122
     *
     * @param unknown_type $caso
     * 	true: fecha real del feriado
     * 	false: fecha a la cual fue movido un feriado
     * @return unknown
     */
    static function getFeriados($caso = false) {
        $feriados = VsTablaPeer::getTabla(122);

        foreach ($feriados as $feriado) {
            switch ($caso) {
                case true: $arr_feriados[] = $feriado->getDescripcion();
                    break; // Fecha real del feriado			
                case false: $arr_feriados[] = $feriado->getAlfanumerico();
                    break; // Fecha a la cual fue movido un feriado
            }
        }
        return $arr_feriados;
    }

    /**
     * retorna el mes escrito con letras
     *
     * @param unknown_type $mes
     * @return unknown
     */
    static function getMesLetras($mes) {
        switch ($mes) {
            case '01': return "Enero";
                break;
            case '02': return "Febrero";
                break;
            case '03': return "Marzo";
                break;
            case '04': return "Abril";
                break;
            case '05': return "Mayo";
                break;
            case '06': return "Junio";
                break;
            case '07': return "Julio";
                break;
            case '08': return "Agosto";
                break;
            case '09': return "Septiembre";
                break;
            case '10': return "Octubre";
                break;
            case '11': return "Noviembre";
                break;
            case '12': return "Diciembre";
                break;
        }
    }

    /**
     * retorna el mes escrito con letras
     *
     * @param unknown_type $mes
     * @return unknown
     */
    static function getMesCortoLetras($mes) {
        switch ($mes) {
            case '01': return "Ene";
                break;
            case '02': return "Feb";
                break;
            case '03': return "Mar";
                break;
            case '04': return "Abr";
                break;
            case '05': return "May";
                break;
            case '06': return "Jun";
                break;
            case '07': return "Jul";
                break;
            case '08': return "Ago";
                break;
            case '09': return "Sep";
                break;
            case '10': return "Oct";
                break;
            case '11': return "Nov";
                break;
            case '12': return "Dic";
                break;
        }
    }

    /**
     * retorna el mes escrito con letras
     *
     * @param unknown_type $mes
     * @return unknown
     */
    static function getDiaLetras($str_fecha) {
        $f = self::getArrFecha($str_fecha);
        $ts = mktime(0, 0, 0, $f['mes'], $f['dia'], $f['anio']);

        $dia = date('D', $ts);
        switch ($dia) {
            case 'Mon': return "Lun";
                break;
            case 'Tue': return "Mar";
                break;
            case 'Wed': return "Mie";
                break;
            case 'Thu': return "Jue";
                break;
            case 'Fri': return "Vie";
                break;
            case 'Sat': return "Sab";
                break;
            case 'Sun': return "Dom";
                break;
        }
    }

    /**
     * retorna el mes escrito con letras
     *
     * @param unknown_type $mes
     * @return unknown
     */
    static function getDiaLetrasCorto($str_fecha) {
        $f = self::getArrFecha($str_fecha);
        $ts = mktime(0, 0, 0, $f['mes'], $f['dia'], $f['anio']);

        $dia = date('D', $ts);
        switch ($dia) {
            case 'Mon': return "L";
                break;
            case 'Tue': return "M";
                break;
            case 'Wed': return "X";
                break;
            case 'Thu': return "J";
                break;
            case 'Fri': return "V";
                break;
            case 'Sat': return "S";
                break;
            case 'Sun': return "D";
                break;
        }
    }

    /**
     * retorna la fecha mas antigua entre 2 fechas dadas
     *
     * @param unknown_type $f1
     * @param unknown_type $f2
     * @return unknown
     */
    static function getMenorFecha($f1, $f2) {
        $fd = self::getArrFecha($f1);
        $fh = self::getArrFecha($f2);

        $s1 = mktime(0, 0, 0, $fd['mes'], $fd['dia'], $fd['anio']);
        $s2 = mktime(0, 0, 0, $fh['mes'], $fh['dia'], $fh['anio']);

        if ($s1 < $s2) {
            return $f1;
        } else {
            return $f2;
        }
    }

    /**
     * retorna un booleano donde indica si es un rango v�lido de fechas las que recibo o no.
     *
     * @param unknown_type $f1
     * @param unknown_type $f2
     * @return unknown
     */
    static function esRangoValido($f1, $f2) {
        $fd = self::getArrFecha($f1);
        $fh = self::getArrFecha($f2);

        $s1 = mktime(0, 0, 0, $fd['mes'], $fd['dia'], $fd['anio']);
        $s2 = mktime(0, 0, 0, $fh['mes'], $fh['dia'], $fh['anio']);

        if ($s1 <= $s2) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Actualiza uno de los valores de una fecha, ya sea: a�o, mes o dia
     *
     * @param unknown_type $caso - 'a', 'm' o 'd'
     * @param unknown_type $valor - nuevo valor a setear
     * @param unknown_type $fecha - fecha donde se setea el nuevo valor
     * @return unknown
     */
    static function setNvoValor($caso, $valor, $fecha) {
        $arr_venc = self::getArrFecha($fecha);
        switch ($caso) {
            case "a": $arr_venc['anio'] = $valor;
                break;
            case "m": $arr_venc['mes'] = $valor;
                break;
            case "d": $arr_venc['dia'] = $valor;
                break;
        }
        $nva_fecha = $arr_venc['anio'] . self::getSep() . $arr_venc['mes'] . self::getSep() . $arr_venc['dia'];
        return $nva_fecha;
    }
    
    /**
     * 
     */
    static function getArrAnioMesDesdePeriodo($anio_mes){
        $anio_mes = (string)$anio_mes;
        
        // se espera recibir formato YYYYMM, ej 202212
        $anio = $anio_mes[0].$anio_mes[1].$anio_mes[2].$anio_mes[3];
        $mes = $anio_mes[4].$anio_mes[5];
        
        $arr['anio'] = $anio;
        $arr['mes'] = $mes;
        
        return $arr;
    }

    /**
     * Metodo que retorna un array con fechas consecutivas entre un rango definido
     * @param type $start
     * @param type $end
     * @return type
     */
    static function getArrayFechasXRango($start, $end, $periodicidad = self::PERIODICIDAD_DIARIO) {
        
        $range = array();
        $fechaI = new DateTime($start);
        $fechaF = new DateTime($end);

        // ---------------------------------------------------------------------
        // PERIODICIDAD_DIARIO
        // ---------------------------------------------------------------------
        if ($periodicidad == self::PERIODICIDAD_DIARIO) {
            if (is_string($start) === true) {
                $start = strtotime($start);
            }
            if (is_string($end) === true) {
                $end = strtotime($end);
            }

            if ($start <= $end) {
                do {
                    $range[date('Y-m-d', $start)] = date('Y-m-d', $start);
                    $start = strtotime("+ 1 day", $start);
                } while ($start <= $end);
            } elseif ($start > $end) {
                do {
                    $range[date('Y-m-d', $start)] = date('Y-m-d', $start);
                    $start = strtotime("- 1 day", $start);
                } while ($start >= $end);
            }
        // ---------------------------------------------------------------------
        // PERIODICIDAD_SEMANAL_ANIO
        // ---------------------------------------------------------------------
        } elseif ($periodicidad == self::PERIODICIDAD_SEMANAL_ANIO) {
            $inicio = $fechaI->format("W");
            $fin = $fechaF->format("W");

            for ($i = $inicio; $i <= $fin; $i++) {
                $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                $range[$i] = $i;
            }
        // ---------------------------------------------------------------------
        // PERIODICIDAD_SEMANAL_MES
        // ---------------------------------------------------------------------
        } elseif ($periodicidad == self::PERIODICIDAD_SEMANAL_MES) {
            $inicio = $fechaI->format("W");
            $fin = $fechaF->format("W");

            for ($i = $inicio; $i <= $fin; $i++) {
                $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                $range[$i] = $i;
            }
        // ---------------------------------------------------------------------
        // PERIODICIDAD_MENSUAL
        // ---------------------------------------------------------------------
        } elseif ($periodicidad == self::PERIODICIDAD_MENSUAL) {
            $inicio = $fechaI->format("m");
            $fin = $fechaF->format("m");
            
            for ($i = $inicio; $i <= $fin; $i++) {
                $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                $range[$i] = $i;
            }

        // ---------------------------------------------------------------------
        // PERIODICIDAD_ANUAL_MENSUAL
        // ---------------------------------------------------------------------
        } elseif ($periodicidad == self::PERIODICIDAD_ANUAL_MENSUAL) {
            
            $arr_fechas = self::getArrayFechasXRango($start, $end);
            foreach($arr_fechas as $fecha){
                $arr_fecha = self::getArrFecha($fecha);
                
                $range[$arr_fecha['anio'].$arr_fecha['mes']] = $arr_fecha['anio'].$arr_fecha['mes'];
            }
        // ---------------------------------------------------------------------
        // PERIODICIDAD_ANUAL
        // ---------------------------------------------------------------------
        } elseif ($periodicidad == self::PERIODICIDAD_ANUAL) {
            $inicio = $fechaI->format("Y");
            $fin = $fechaF->format("Y");

            for ($i = $inicio; $i <= $fin; $i++) {
                $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                $range[$i] = $i;
            }
        }

        return $range;
    }

    /**
     * Metodo que calcula la primera fecha del mes vigente
     * Autor: Pablo Rosen
     * Fecha: 20/01/2018
     * @return type
     */
    static function getPrimeraFechaMesVigente() {
        $month = date('m');
        $year = date('Y');
        return date('Y-m-d', mktime(0, 0, 0, $month, 1, $year));
    }

    /**
     * Metodo que calcula la ultima fecha del mes vigente
     * Autor: Pablo Rosen
     * Fecha: 20/01/2018
     * @return type
     */
    static function getUltimaFechaMesVigente() {
        $month = date('m');
        $year = date('Y');
        $day = date("d", mktime(0, 0, 0, $month + 1, 0, $year));

        return date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
    }

    /**
     * Metodo que calcula la primera fecha del mes anterior
     * Autor: Pablo Rosen
     * Fecha: 20/01/2018
     * @return type
     */
    static function getPrimeraFechaMesAnterior() {
        // --------------------------------------------------------------------
        $mes_anterior = mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"));

        // --------------------------------------------------------------------
        if (date("m") == '01') {
            $anio_anterior = mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1);
        } else {
            $anio_anterior = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
        }

        // --------------------------------------------------------------------
        $month = date('m', $mes_anterior);
        $year = date('Y', $anio_anterior);

        return date('Y-m-d', mktime(0, 0, 0, $month, 1, $year));
    }

    /**
     * Metodo que calcula la ultima fecha del mes anterior
     * Autor: Pablo Rosen
     * Fecha: 20/01/2018
     * @return type
     */
    static function getUltimaFechaMesAnterior() {
        // --------------------------------------------------------------------
        $mes_anterior = mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"));

        // --------------------------------------------------------------------
        if (date("m") == '01') {
            $anio_anterior = mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1);
        } else {
            $anio_anterior = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
        }

        // --------------------------------------------------------------------
        $month = date('m', $mes_anterior);
        $year = date('Y', $anio_anterior);

        // --------------------------------------------------------------------
        $day = date("d", mktime(0, 0, 0, $month + 1, 0, $year));

        return date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
    }

    /**
     * Metodo que calcula la primera fecha del mes indicado
     * Autor: Pablo Rosen
     * Fecha: 14/11/2018
     * @return type
     */
    static function getPrimeraFechaDelMes($month, $year) {
        return date('Y-m-d', mktime(0, 0, 0, $month, 1, $year));
    }

    /**
     * Metodo que calcula la ultima fecha del mes indicado
     * Autor: Pablo Rosen
     * Fecha: 14/11/2018
     * @return type
     */
    static function getUltimaFechaDelMes($month, $year) {
        $day = date("d", mktime(0, 0, 0, $month + 1, 0, $year));
        return date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
    }
    
    /**
     * retorna un booleano de acuerdo si una fecha indicada es sabado o domingo
     *
     * @param unknown_type $str_fecha
     * @return unknown
     */
    static function getDiaDeSemana($str_fecha) {
        $f = self::getArrFecha($str_fecha);

        $ts = mktime(0, 0, 0, $f['mes'], $f['dia'], $f['anio']);
        $datos = getdate($ts);

        $dia_s = (string)$datos['wday'];

        return $dia_s;
    }
    
    /**    
     * retorna el mes escrito con letras
     *
     * @param unknown_type $mes
     * @return unknown
     */
    static function getDiaLetrasDesdeFecha($str_fecha) {
        $f = self::getArrFecha($str_fecha);
        $ts = mktime(0, 0, 0, $f['mes'], $f['dia'], $f['anio']);

        $dia = date('D', $ts);
        switch ($dia) {
            case 'Mon': return "Lun";
                break;
            case 'Tue': return "Mar";
                break;
            case 'Wed': return "Mie";
                break;
            case 'Thu': return "Jue";
                break;
            case 'Fri': return "Vie";
                break;
            case 'Sat': return "Sab";
                break;
            case 'Sun': return "Dom";
                break;
        }
    }

}

?>