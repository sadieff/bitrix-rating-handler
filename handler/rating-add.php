<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
header("Content-type: application/json; charset=utf-8");

/*
 * Скрипт для добавления отзывов в инфоблок.
 * Скрипт принмает данные с формы, фотографии.
 * Скрипт возвращает ID созданного элемента
 * */

use Bitrix\Main\Loader;
Loader::includeModule("iblock");
Cmodule::IncludeModule("catalog");
$blockElement = new CIBlockElement;

// ID инфоблока для добавления отзыва
const IBLOCK_ID = 46;

// получим данные
$dataRequest = array(
    'NAME' => $_POST['name'],
    'DOGOVOR' => $_POST['num'],
    'MODEL' => $_POST['model'],
    'RATING_MAIN' => $_POST['main-rating'],
    'RATING_COUNSELING' => $_POST['consultation-rating'],
    'RATING_SERVICES' => $_POST['dogovor'],
    'RATING_DELIVERY' => $_POST['delivery'],
    'RATING_MOUNTING' => $_POST['mounting'],
    'TEXT' => $_POST['msg'],
);
// получим файлы и сохраним их
$arrFiles = $_FILES["images"];
$arrUploadFiles = [];
foreach ($arrFiles['name'] as $key => $file){
    if(empty($file)) continue;

    $fields = array(
        "name" => $file,
        "size" => $arrFiles['size'][$key],
        "tmp_name" => $arrFiles['tmp_name'][$key],
        "type" => $arrFiles['type'][$key],
        "old_file" => "",
        "del" => "",
        "MODULE_ID" => "iblock",
        "description" => ""
    );

    $fileId = CFile::SaveFile($fields, "rating");
    if (intval($fileId) > 0) $arrUploadFiles[] = intval($fileId);

}

/* создадим новый элемент */
$arLoadProductArray = Array(
    "ACTIVE" => "Y",
    "IBLOCK_ID" => IBLOCK_ID,
    "NAME" => $dataRequest['NAME'].' - '.date("m.d.y H:i"),
    "PREVIEW_TEXT" => $dataRequest['TEXT'],
    "PROPERTY_VALUES" => array(
        "NAME" => $dataRequest['NAME'],
        "DOGOVOR" => $dataRequest['DOGOVOR'],
        "MODEL" => $dataRequest['MODEL'],
        "RATING_MAIN" => $dataRequest['RATING_MAIN'],
        "RATING_COUNSELING" => $dataRequest['RATING_COUNSELING'],
        "RATING_SERVICES" => $dataRequest['RATING_SERVICES'],
        "RATING_DELIVERY" => $dataRequest['RATING_DELIVERY'],
        "RATING_MOUNTING" => $dataRequest['RATING_MOUNTING'],
        "PHOTOS" => $arrUploadFiles,
    )
);

$idElement = $blockElement->Add($arLoadProductArray);
$output = [];
if($idElement === false) {
    $output["id"] = 0;
    $output["error"] = $idElement->LAST_ERROR;
}
else {
    $output["success"] = "succes";
    $output["id"] = $idElement;
}

echo json_encode($output);