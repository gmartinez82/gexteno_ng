<?php

class MlGeneral {
    
    /* -------------------------------------------------------------------------
     * Metodo que obtiene las categorias sugeridas por ML en funcion de la 
     * descripcion indicada
     */
    static function getMlCategoriasSugeridasGet($descripcion) {
        
        // ---------------------------------------------------------------------
        // se inicializa objeto meli sin TOKEN
        // ---------------------------------------------------------------------
        $meli = new MlMeli(MlConfig::CONFIG_APP_ID, MlConfig::CONFIG_SECRET_KEY);

        $descripcion = urlencode($descripcion);

        $url = '/sites/' . MlConfig::CONFIG_SITE_ID . '/category_predictor/predict';

        $params = array(
            'title' => $descripcion
        );

        $result = $meli->get($url, $params);
        //Gral::prr($result);

        return $result;
    }

    /* -------------------------------------------------------------------------
     * Metodo que genera cmb de categorias sugeridas para un producto
     */
    static function getMlCategoriasSugeridasGetCmb($descripcion) {

        $col = self::getMlCategoriasSugeridasGet($descripcion);

        $cont = 0;
        $cantidad = count($col['body']->path_from_root);
        $full_category = '';
        foreach ($col['body']->path_from_root as $o) {
            $cont++;
            $full_category .= $o->name;

            if ($cont < $cantidad) {
                $full_category .= ' > ';
            }
        }

        $cmb_codigo = $col['body']->id;
        $cmb_prediction_probability = $col['body']->prediction_probability;
        $cmb_descripcion = $full_category;
        //Gral::prr($col['body']);
        //self::setRegistrarMlCategoria($cmb_codigo, $cmb_descripcion);

        $arr[1]['cod'] = $cmb_codigo;
        $arr[1]['descripcion'] = $cmb_codigo.' - '.$cmb_descripcion . ' ('.round(($cmb_prediction_probability*100), 2).'%)';

        return $arr;
    }

    /* -------------------------------------------------------------------------
     * Metodo que se utiliza para obtener el token por primera vez
     * la llamada curl desde terminal no funciona, da error de cantidad de parametros
     */
    static function getAccessToken() {
        
        // ---------------------------------------------------------------------
        // se inicializa objeto meli sin TOKEN
        // ---------------------------------------------------------------------
        $meli = new MlMeli(MlConfig::CONFIG_APP_ID, MlConfig::CONFIG_SECRET_KEY);

        $params = array(
            'grant_type' => 'authorization_code',
            'client_id' => MlConfig::CONFIG_APP_ID,
            'client_secret' => MlConfig::CONFIG_SECRET_KEY,
            'code' => MlConfig::CONFIG_AUTHORIZATION_CODE,
            'redirect_uri' => MlConfig::CONFIG_REDIRECT_URI,
        );
        //Gral::prr($params);

        $result = $meli->post('/oauth/token', $params);
        //Gral::prr($result);

        return $result;
    }

    /* -------------------------------------------------------------------------
     * Metodo que publica un item en ML
     */
    static function setPublicar($ins_insumo, $ins_venta_ml_info) {

        // ---------------------------------------------------------------------
        // se inicializa objeto meli con TOKEN
        // ---------------------------------------------------------------------
        $meli = MlAutorization::setInicializarObjMeliConToken();

        $ins_insumo_imagens_mercadolibre = $ins_insumo->getInsInsumoImagensMercadolibre();
        $ins_venta_ml_info_ml_attributes = $ins_venta_ml_info->getInsVentaMlInfoMlAttributes(null, null, true);

        // ---------------------------------------------------------------------
        // se carga array de imagenes
        // ---------------------------------------------------------------------
        foreach ($ins_insumo_imagens_mercadolibre as $ins_insumo_imagen_mercadolibre) {
            $arr_imagenes[] = array(
                //'source' => $ins_insumo_imagen_mercadolibre->getPathImagen(),
                'source' => Gral::getPath('path_http_publico_ml').'archivos/imagenes/ins_insumo_imagen/'.$ins_insumo_imagen_mercadolibre->getArchivo(),
            );
        }

        // ---------------------------------------------------------------------
        // se carga array de atributos
        // ---------------------------------------------------------------------
        foreach ($ins_venta_ml_info_ml_attributes as $ins_venta_ml_info_ml_attribute) {
            $ml_attribute = $ins_venta_ml_info_ml_attribute->getMlAttribute();
            $ml_value = $ins_venta_ml_info_ml_attribute->getMlValue();
            if ($ml_value->getId() != 'null') {
                $arr_atributos[] = array(
                    'id' => $ml_attribute->getCodigoMl(),
                    'value_id' => $ml_value->getCodigoMl(),
                );                
            } else {
                $arr_atributos[] = array(
                    'id' => $ml_attribute->getCodigoMl(),
                    'value_name' => $ins_venta_ml_info_ml_attribute->getMlValueValor(),
                );
            }
        }
        
        $arr_shipping = array(
            'mode' => $ins_venta_ml_info->getMlShippingMode()->getCodigoMl(),
            'local_pick_up' => $ins_venta_ml_info->getMlLocalPickup(),
            'free_shipping' => $ins_venta_ml_info->getMlFreeshipping(),
        );

        $params = array(
            'site_id' => MlConfig::CONFIG_SITE_ID,
            'title' => $ins_venta_ml_info->getDescripcion(),
            //'seller_id'=> 1111, // averiguar
            //'official_store_id'=> 1111, // para tiendas oficiales
            'category_id' => $ins_venta_ml_info->getMlCategoryCod(),
            'price' => $ins_venta_ml_info->getImporte(),
            'currency_id' => 'ARS',
            'available_quantity' => $ins_venta_ml_info->getCantidad(),
            'buying_mode' => 'buy_it_now',
            'listing_type_id' => $ins_venta_ml_info->getMlListingType()->getCodigoMl(),
            'description' => array(
                "plain_text" => $ins_venta_ml_info->getDescripcionFullParaML()
            ),
            'pictures' => $arr_imagenes,
            'condition' => $ins_venta_ml_info->getMlCondition()->getCodigoMl(),
            'attributes' => $arr_atributos,
            'shipping' => $arr_shipping,
        );
        //Gral::prr($params);
        //exit;
        
        $result = $meli->post('/items', $params, array('access_token' => $meli->getAccessToken()));
        //Gral::prr($result);

        return $result;
    }
    
    /* -------------------------------------------------------------------------
     * Metodo que actualiza los datos de una publicacion en ML
     */
    static function setActualizar($ins_insumo, $ins_venta_ml_info) {

        // ---------------------------------------------------------------------
        // se inicializa objeto meli con TOKEN
        // ---------------------------------------------------------------------
        $meli = MlAutorization::setInicializarObjMeliConToken();
        
        $ins_insumo_imagens_mercadolibre = $ins_insumo->getInsInsumoImagensMercadolibre();
        $ins_venta_ml_info_ml_attributes = $ins_venta_ml_info->getInsVentaMlInfoMlAttributes(null, null, true);
        
        // ---------------------------------------------------------------------
        // se recupera ID de publicacion
        // ---------------------------------------------------------------------
        $ml_identificador = $ins_venta_ml_info->getMlIdentificador();
        
        // ---------------------------------------------------------------------
        // se carga array de imagenes
        // ---------------------------------------------------------------------
        foreach ($ins_insumo_imagens_mercadolibre as $ins_insumo_imagen_mercadolibre) {
            $arr_imagenes[] = array(
                //'source' => $ins_insumo_imagen_mercadolibre->getPathImagen(),
                'source' => Gral::getPath('path_http_publico_ml').'archivos/imagenes/ins_insumo_imagen/'.$ins_insumo_imagen_mercadolibre->getArchivo(),
            );
        }
        
        // ---------------------------------------------------------------------
        // se carga array de atributos
        // ---------------------------------------------------------------------
        foreach ($ins_venta_ml_info_ml_attributes as $ins_venta_ml_info_ml_attribute) {
            $ml_attribute = $ins_venta_ml_info_ml_attribute->getMlAttribute();
            $ml_value = $ins_venta_ml_info_ml_attribute->getMlValue();
            if ($ml_value->getId() != 'null') {
                $arr_atributos[] = array(
                    'id' => $ml_attribute->getCodigoMl(),
                    'value_id' => $ml_value->getCodigoMl(),
                );                
            } else {
                $arr_atributos[] = array(
                    'id' => $ml_attribute->getCodigoMl(),
                    'value_name' => $ins_venta_ml_info_ml_attribute->getMlValueValor(),
                );
            }
        }
        
        $arr_shipping = array(
            'mode' => $ins_venta_ml_info->getMlShippingMode()->getCodigoMl(),
            'local_pick_up' => $ins_venta_ml_info->getMlLocalPickup(),
            'free_shipping' => $ins_venta_ml_info->getMlFreeshipping(),
        );
        
        $params = array(
            "plain_text" => $ins_venta_ml_info->getDescripcionFullParaML()
        );

        $result = $meli->put('/items/'.$ml_identificador.'/description', $params, array('access_token' => $meli->getAccessToken()));
        //Gral::prr($result);
        
        $params = array(
            'title' => $ins_venta_ml_info->getDescripcion(),
            //'category_id' => $ins_venta_ml_info->getMlCategoryCod(),
            'price' => $ins_venta_ml_info->getImporte(),
            //'available_quantity' => $ins_venta_ml_info->getCantidad(),
            'pictures' => $arr_imagenes,
            'attributes' => $arr_atributos,
            'shipping' => $arr_shipping,
        );
        //Gral::prr($params);

        $result = $meli->put('/items/'.$ml_identificador, $params, array('access_token' => $meli->getAccessToken()));
        //Gral::prr($result);

        return $result;
    }    
    

    /* -------------------------------------------------------------------------
     * Metodo que permite pausar una publicacion en ML
     */
    static function setPausar($ins_insumo, $ins_venta_ml_info) {

        // ---------------------------------------------------------------------
        // se inicializa objeto meli con TOKEN
        // ---------------------------------------------------------------------
        $meli = MlAutorization::setInicializarObjMeliConToken();

        $ml_identificador = $ins_venta_ml_info->getMlIdentificador();
        
        $params = array(
            'status' => 'paused',
        );

        $result = $meli->put('/items/'.$ml_identificador, $params, array('access_token' => $meli->getAccessToken()));
        //Gral::prr($result);

        return $result;
    }    

    /* -------------------------------------------------------------------------
     * Metodo que reactiva una publicacion pausada en ML
     */
    static function setReactivar($ins_insumo, $ins_venta_ml_info) {

        // ---------------------------------------------------------------------
        // se inicializa objeto meli con TOKEN
        // ---------------------------------------------------------------------
        $meli = MlAutorization::setInicializarObjMeliConToken();

        $ml_identificador = $ins_venta_ml_info->getMlIdentificador();
        
        $params = array(
            'status' => 'active',
        );

        $result = $meli->put('/items/'.$ml_identificador, $params, array('access_token' => $meli->getAccessToken()));
        //Gral::prr($result);

        return $result;
    }    
    
    /* -------------------------------------------------------------------------
     * Metodo que elimina una publicacion de ML
     * Para eliminar la publicacion primero hay que marcarla como 'closed'
     */
    static function setDespublicar($ins_insumo, $ins_venta_ml_info) {

        // ---------------------------------------------------------------------
        // se inicializa objeto meli con TOKEN
        // ---------------------------------------------------------------------
        $meli = MlAutorization::setInicializarObjMeliConToken();

        $ml_identificador = $ins_venta_ml_info->getMlIdentificador();
        
        $params = array(
            'status' => 'closed',
        );

        $result = $meli->put('/items/'.$ml_identificador, $params, array('access_token' => $meli->getAccessToken()));

        $params = array(
            'deleted' => 'true',
        );
        
        $result = $meli->put('/items/'.$ml_identificador, $params, array('access_token' => $meli->getAccessToken()));
        //Gral::prr($result);

        return $result;
    }
    
    /* -------------------------------------------------------------------------
     * Metodo que retorna una publicacion en ML
     */
    static function getPublicacion($ins_venta_ml_info) {
        // ---------------------------------------------------------------------
        // se inicializa objeto meli sin TOKEN
        // ---------------------------------------------------------------------
        $meli = new MlMeli(MlConfig::CONFIG_APP_ID, MlConfig::CONFIG_SECRET_KEY);

        $params = array(
            'id' => $ins_venta_ml_info->getMlIdentificador(),
        );
        //Gral::prr($params);

        $result = $meli->get('/items', $params);
        //Gral::prr($result);

        return $result;
    }

    static function getCategoria($codigo) {
        // https://api.mercadolibre.com/categories/MLA9455
        // ---------------------------------------------------------------------
        // se inicializa objeto meli sin TOKEN
        // ---------------------------------------------------------------------
        $meli = new MlMeli(MlConfig::CONFIG_APP_ID, MlConfig::CONFIG_SECRET_KEY);

        $result = $meli->get('/categories/' . $codigo);
        //Gral::prr($result);

        return $result;
    }
    
    static function getAtributosXCategoria($codigo) {
        // https://api.mercadolibre.com/categories/MLA9455/attributes
        // ---------------------------------------------------------------------
        // se inicializa objeto meli sin TOKEN
        // ---------------------------------------------------------------------
        $meli = new MlMeli(MlConfig::CONFIG_APP_ID, MlConfig::CONFIG_SECRET_KEY);

        $result = $meli->get('/categories/' . $codigo . '/attributes');
        //Gral::prr($result);

        return $result;
    }

    static function getEspecificacionesTecnicasXCategoria() {
        // https://api.mercadolibre.com/categories/MLA9455/technical_specs/input
    }

}

?>