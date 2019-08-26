<?php
// класс шаблона
class MyTemplate {
  private $values = array(); // Свйоства шаблона
  public $html;

  // Метод загрузки шаблона
  function get_tpl($tpl_name) {
    if (empty($tpl_name) || !file_exists($tpl_name)) {
      return false;
    } else {
      $this->html = file_get_contents($tpl_name);
    }
  }

  // Метод для установки значений
  function set_value($key, $var) {
    $key = '{' . $key . '}';
    $this->values[$key] = $var;
  }

  // Парсинг шаблона
  function tpl_parse() {
    foreach($this->values as $find => $replace) {
      $this->html = str_replace($find, $replace, $this->html);
    }
  }
}

  // Экземпляр класса - объект
  $tpl = new MyTemplate;
?>
