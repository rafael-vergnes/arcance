<?php

namespace Model;

use PDO;
use EXCEPTION;

class ModelFile extends Model{
    private ?int $id;
    private ?string $name;
    private ?string $extension;
    private ?int $size;
    private ?string $url;
    private ?string $created_at;
    private ?int $id_user;
    private ?int $id_folder;

    public function findAll():?array{
        try{
            $request = "SELECT f.id, f.name, f.extension, f.size, f.url, f.created_at FROM `file` f";
            $req = $this->getDb()->prepare($request);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }
}