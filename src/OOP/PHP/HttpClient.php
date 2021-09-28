<?php

namespace App\OOP\PHP;

class HttpClient extends Client
{

    public function __construct(string $source, string $timout)
    {
        parent::__construct($source,  $timout);
    }
}
