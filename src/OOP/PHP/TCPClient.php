<?php

namespace App\OOP\PHP;

class TCPClient extends Client
{

    public int $portnumber;

    public function __construct(string $source, string $timout, int $portnumber)
    {
        parent::__construct($source,  $timout);
        $this->portnumber = $portnumber;
    }
}
