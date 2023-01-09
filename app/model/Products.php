<?php

abstract class Products extends Model
{
  protected $raw;
  protected $type;
  private $set;
  private $sku;
  private $name;
  private $price;
  protected $value;
  public $product_errors = NULL;

  function __construct($data)
  {

    $this->raw = $data;
    $this->type = $this->raw['option'];
    $this->validate();
  }



  public function setData()
  {
    $this->set = [
      'sku' => $this->sku,
      'name' => $this->name,
      'price' => $this->price,
      'type' => $this->type,
      'attributes' => $this->value

    ];
    $this->insert($this->set);
  }

  function validate()
  {
    $this->validateSku()->validateName()->validatePrice()->validateValue();


  }

  private function validateSku()
  {
    $this->sku = str_replace(' ', '', $this->raw['sku']);

    if (!empty($this->sku) && $a = Model::initiate()->getSku(['sku' => $this->sku])) {
      $this->product_errors[] = "Sku already exists";
      $this->sku = '';
      return $this;

    }

    return $this;
  }


  private function validateName()
  {
    $this->name = trim($this->raw['name']);
    if (!empty($this->name)) {
      return $this;
    }
    $this->product_errors[] = "Name Not given";
    $this->name = '';
    return $this;

  }


  private function validatePrice()
  {
    if (!empty($this->raw['price']) && preg_match("/^[0-9]+(\.[0-9]+)?$/", $this->raw['price'])) {
      $this->price = $this->raw['price'] . " $";
      return $this;
    }


    $this->product_errors[] = "Not a valid price";
    return $this;
  }

  abstract public function validateValue();

}