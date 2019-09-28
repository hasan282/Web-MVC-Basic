<?php

class Controller {

    protected function pageView( $view , $data = [] ) {
        require_once "../apps/viewer/" . $view . ".php";
    }

    protected function model( $model ) {
        require_once "../apps/models/" . $model . ".php";
        return new $model;
    }

}

?>