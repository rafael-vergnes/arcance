<?php

namespace Model;

use PDO;
use EXCEPTION;
use Utils\Utils;

class ModelFile extends Model{
    private ?int $id;
    private ?string $name;
    private ?string $extension;
    private ?int $size;
    private ?string $url;
    private ?string $created_at;
    private ?int $id_user;
    private ?int $id_folder;

    // GETTER & SETTER
    public function getName():string{
        return $this->name;
    }
    public function setName(string $newName):self{
        $this->name = $newName;
        return $this;
    }

    public function findAll():array{
        try{
            $req = $this->getDb()->prepare("SELECT f.id, f.name, f.extension, f.size, f.url, f.created_at FROM `file` f");
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }

    public function findByName():array{
        try{
            $req = $this->getDb()->prepare("SELECT f.id, f.name, f.extension, f.size, f.url, f.created_at FROM `file` f WHERE f.name LIKE ?");
            $cleanName = Utils::sanitize($this->name);
            $searchTerm = '%' .$cleanName . '%';
            $req->bindParam(1, $searchTerm, PDO::PARAM_STR);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }
}