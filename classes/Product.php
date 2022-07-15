<?php

class Product {
  private $price;
  private $id;

  // CONSTRUCTOR ---------------------------------------------
  function __construct($_price, $_id) {
    if (is_nan($_id) || is_nan($_price)) {
      throw new Exception("You must enter a number");
    }

    $this->id = $_id;
    $this->price = $_price;
  }

  // GETTER AND SETTER ---------------------------------------
  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  { 
    $this->id = $id;

    return $this;
  }
}

?>