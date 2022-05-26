<?php

declare(strict_types=1);

namespace App\Model;

use Nette;

final class ProductFacade 
{

    private Nette\Database\Explorer $database;

    public function __construct(Nette\Database\Explorer $database)
    {
        $this->database = $database;
    }

    public function GetAll(): array
    {
        return $this->database->table('product')->fetchAll();
    }

}

    

