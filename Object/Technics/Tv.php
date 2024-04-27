<?

namespace Object\Technics;

class Tv {
  public $marka;
  public $model;
  public $year;

  public function __construct($marka, $model, $year) {
    $this->marka = $marka;
    $this->model = $model;
    $this->year = $year;
  }

  public function get_marka() {
    return $this->marka;
  }

  public function get_model() {
    return $this->model;
  }

  public function get_year() {
    return $this->year;
  }
}