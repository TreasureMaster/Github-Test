<?php
  // Подключаем шаблонизатор
  require_once('template.php');

  // Переменные для вставки в шаблон
  $user = 'Денис';
  $last = '24.02.2007';
  $reg_date = '01.02.2007';
  $messages = 34;
  $personal = 0;

  // Открываем шаблон
  $tpl->get_tpl('templates/welcome.tpl');

  // Устанавливаем переменные шаблона
  $tpl->set_value('USER', $user);
  $tpl->set_value('LAST', $last);
  $tpl->set_value('REG_DATE', $reg_date);
  $tpl->set_value('MESSAGES', $messages);
  $tpl->set_value('PERSONAL', $personal);

  // Запускаем парсинг шаблона
  $tpl->tpl_parse();
  // Выводим HTML
  echo $tpl->html;
?>