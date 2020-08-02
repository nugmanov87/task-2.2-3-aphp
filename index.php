<?php
declare(strict_types=1);

use Company\Collaborator;

function my_autoload($className)
{
    require_once __DIR__ . '/classes/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register("my_autoload");

$director = new \Company\Director('Федор', 'Иванов', 'Директор', 50);
$programmist1 = new \Company\Programmist('Сергей', 'Петров', 'Программист', 35);
$programmist2 = new \Company\Programmist('Марк', 'Шнуров', 'Программист', 33);
$director->setRole('Может управлять');
$programmist1->setRole('Пишет код');
$programmist2->setRole('Пишет код');
echo $director->getHtml();
echo $programmist1->getHtml();
echo $programmist2->getHtml();
Collaborator::getInfo();