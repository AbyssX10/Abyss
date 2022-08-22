<?php

    class Es extends BaseController {

        public function __construct()
        {
            parent::__construct();

            error_log("Es | Inicio de Es");
        }

        function render(){
            $this->view->render("Es/Home/index");

            error_log("Es | Carga el index de Home");
        }

    }

?>