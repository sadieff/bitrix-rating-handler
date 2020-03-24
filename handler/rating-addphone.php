<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
header("Content-type: application/json; charset=utf-8");

/**
 * Скрипт для добавления номера телефона
 * в уже готовый элемент инфоблока
 * */

use Bitrix\Main\Loader;
Loader::includeModule("iblock");
$blockElement = new CIBlockElement;

// ID инфоблока для добавления отзыва
const IBLOCK_ID = 46;

$property = array(
    "PHONE" => $_POST['phone']
);
$blockElement->SetPropertyValuesEx($_POST['element'], IBLOCK_ID, $property);

$output = [];
$output["status"] = true;
$output["message"] = "Спасибо! Наш менеджер обработает вашу заявку в ближайшее время";
$output["responseType"] = "form";

echo json_encode($output);