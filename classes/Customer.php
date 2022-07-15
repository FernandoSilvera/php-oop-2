<?php

class Customer {
  private $name;
  private $lastName;
  private $registered = true;

  // CONSTRUCTOR ------------------------------------------------

  function __construct($_name, $_lastName) {
    $this->name = $_name;
    $this->lastName = $_lastName;
  }
  
  // GET AND SET ------------------------------------------------

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of lastName
   */ 
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * Set the value of lastName
   *
   * @return  self
   */ 
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  /**
   * Get the value of registered
   */ 
  public function getRegistered()
  {
    return $this->registered;
  }

  /**
   * Set the value of registered
   *
   * @return  self
   */ 
  public function setRegistered($registered)
  {
    if(!isset($this->name) || !isset($this->lastName)) {
      $registered = false;
    }

    $this->registered = $registered;

    return $this;
  }
}

?>