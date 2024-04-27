<?php

namespace Object\Human;

class Student {
  public $name;
  public $age;
  public $grade;

  public function __construct($name, $age, $grade) {
    $this->name = $name;
    $this->age = $age;
    $this->grade = $grade;
  }

  public function get_name() {
    return $this->name;
  }

  public function get_age() {
    return $this->age;
  }

  public function get_grade() {
    return $this->grade;
  }
}
