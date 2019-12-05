<?php defined('_JEXEC') or die;
// перебирает массив модуля
 foreach ($list as $i => &$item) {
 // выводит адрес и название пункта меню
 	echo '<a href="/'.$item->alias.'">'.$item->title.'</a>';
 }
