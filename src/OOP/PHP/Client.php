<?php

namespace App\OOP\PHP;

class Client
{
    private string $source;

    private string $timeout;

    public function __construct(string $source, string  $timeout)
    {
        $this->source = $source;
        $this->timeout = $timeout;
    }

    public  function connect(): string
    {
        return "i am connecting to {$this->source}";
    }

    public function call(string $url): string
    {
        return "i have fetched this data for you in {$this->timeout} seconds ";
    }

    public function terminate(): string
    {

        return "terminated";
    }

    public function welcomeAfterConnect(): string
    {
        return "welcome you are connected successfully to {$this->source}";
    }
}
