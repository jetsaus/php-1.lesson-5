<?php
require_once '../config/config.php';
// Функция вывода шаблона
function render($file, $variables = [])
{
	if (!is_file($file)) {
		echo 'Файл шаблона "' . $file . '" не найден';
		exit();
	}
	if (filesize($file) === 0) {
		echo 'Файл шаблона "' . $file . '" пуст';
		exit();
	}
	
	$templateContent = file_get_contents($file);
	
	if (empty($variables)) {
	    return $templateContent;
    }
    // Просмотрим все переменные, переданные в шаблон
	foreach ($variables as $varName => $varValue) {
		if (is_array($varValue)) {
			continue;
		}
		$varName = '{{' . strtoupper($varName) . '}}';
		$templateContent = str_replace($varName, $varValue, $templateContent);
	}
	return $templateContent;
}
    