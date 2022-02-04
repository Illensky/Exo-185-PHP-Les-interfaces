<?php

interface UserInterface
{
    // Une interface peut définir des constantes, ce sont les seules valeurs pouvant être définie dans une interface

    const MAX_INSTANCES = 5;

    /**
     * @param array $request
     * @return mixed
     */
    public function getRequest(array $request);

    /**
     * @return mixed
     */
    public function parseRequest();


}