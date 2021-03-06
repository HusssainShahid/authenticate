<?php

namespace Services\JwtAuthentication;

use Firebase\JWT\JWT;

class JwtEncode
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function jwtEncode()
    {
        $jwtKey = new JwtKey();
        $jwtToken = JWT::encode($this->value, $jwtKey->getKey());
        return $jwtToken;
    }
}

?>