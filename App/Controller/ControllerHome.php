<?php

namespace Controller;

class ControllerHome extends Controller {

    public function searchFile():void{
        header('Content-Type: application/json');
        $searchTerm = $_GET["recherche"] ?? "";
        $array = $this->getModel()->setName($searchTerm)->findByName();
        echo json_encode($array);
        exit;
    }
    
}