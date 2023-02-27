<?php

class Person {
    private $name;
    private $email;

    function __construct( $name = "No input", $email = "No input" ) {
        $this->name = $name;
        $this->email = $email;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function setName( $name ) {
        $this->name = $name;
    }

    function setEmail( $email ) {
        $this->email = $email;
    }

    function getProperties() {
        return "Name : $this->name<br>Email : $this->email";
    }
}