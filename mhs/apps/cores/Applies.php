<?php

class Applies {

    protected $controller = "home";
    protected $voids = "index";
    protected $parameter = [];

    public function __construct() {
        $url = $this->parseURL();
        if ( file_exists( "../apps/controls/" . $url[0] . ".php" ) ) {
            $this->controller = $url[0];
            unset( $url[0] );
        }
        require_once "../apps/controls/" . $this->controller . ".php";
        $control = new $this->controller;
        if ( isset($url[1]) ) {
            if ( method_exists( $control , $url[1] ) ) {
                $this->voids = $url[1];
                unset( $url[1] );
            }
        }
        if ( !empty($url) ) {
            $this->parameter = array_values( $url );
        }
        call_user_func_array( [$control, $this->voids] , $this->parameter );
    }

    public function parseURL() {
        if ( isset($_GET["url"]) ) {
            $url = rtrim( $_GET["url"] , "/" );
            $url = filter_var( $url , FILTER_SANITIZE_URL );
            $url = explode( "/" , $url );
            return $url;
        }
    }

}

?>