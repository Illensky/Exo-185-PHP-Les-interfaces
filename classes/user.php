<?php

require('interfaces/UserInterface.php');

class user implements UserInterface
{

    private array $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }

    /**
     * @param array $request
     * @return void
     */
    public function getRequest(array $request):void
    {
        $this->request = $request;
    }

    /**
     * @return void
     */
    public function parseRequest():void
    {
        var_dump($this->request);
    }
}