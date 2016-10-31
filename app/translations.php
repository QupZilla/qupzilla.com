<?php
$ACCEPT_LANGUAGE = "";

// Check AcceptLanguge header
if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $ACCEPT_LANGUAGE = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

// Check cookie
if (isset($_COOKIE["language"]) && $_COOKIE["language"] != "")
    $ACCEPT_LANGUAGE = $_COOKIE["language"];

// Set cookie in case language changes was requested
if (isset($_GET['lang']) && $_GET["lang"] != "") {
    setCookie("language", $_GET["lang"], time()+60*60*24*30*6, "/");
    $ACCEPT_LANGUAGE = $_GET["lang"];
}

$ACCEPT_LANGUAGE = strtolower($ACCEPT_LANGUAGE);

$short_lang = substr($ACCEPT_LANGUAGE, 0, 2);
$long_lang = substr($ACCEPT_LANGUAGE, 0, 5);

// Default language
require_once('translations/en_US.php');

$lang_id = "en_US";
$lang_direction = "LTR";

switch ($short_lang) {
    case "ar":
        $lang_id = "ar_SA";
        $lang_direction = "RTL";
        break;

    case "bg":
        $lang_id = "bg_BG";
        break;

    case "ca":
        $lang_id = "ca_ES";
        break;

    case "cs":
        $lang_id = "cs_CZ";
        break;

    case "da":
        $lang_id = "da_DK";
        break;

    case "de":
        $lang_id = "de_DE";
        break;

    case "el":
        $lang_id = "el_GR";
        break;

    case "en":
        $lang_id = "en_US";
        break;

    case "es":
        $lang_id = "es_ES";
        break;

    case "eu":
        $lang_id = "eu_ES";
        break;

    case "fa":
        $lang_id = "fa_IR";
        $lang_direction = "RTL";
        break;

    case "fr":
        $lang_id = "fr_FR";
        break;

    case "fi":
        $lang_id = "fi_FI";
        break;

    case "gl":
        $lang_id = "gl_ES";
        break;

    case "he":
        $lang_id = "he_IL";
        $lang_direction = "RTL";
        break;

    case "hr":
        $lang_id = "hr_HR";
        break;

    case "id":
        $lang_id = "id_ID";
        break;

    case "is":
        $lang_id = "is";
        break;

    case "it":
        $lang_id = "it_IT";
        break;

    case "ja":
        $lang_id = "ja_JP";
        break;

    case "ka":
        $lang_id = "ka_GE";
        break;

    case "ko":
        $lang_id = "ko_KR";
        break;

    case "lt":
        $lang_id = "lt";
        break;

    case "lv":
        $lang_id = "lv_LV";
        break;

    case "nl":
        $lang_id = "nl_NL";
        break;

    case "pl":
        $lang_id = "pl_PL";
        break;

    case "pt":
        $lang_id = "pt_PT";
        break;

    case "ru":
        $lang_id = "ru_RU";
        break;

    case "sk":
        $lang_id = "sk_SK";
        break;

    case "tr":
        $lang_id = "tr_TR";
        break;

    case "bs":
        $lang_id = "sr@ijekavianlatin";
        break;

    case "sh":
        $lang_id = "sr@latin";
        break;

    case "sr":
        $lang_id = "sr";
        break;

    case "uk":
        $lang_id = "uk_UA";
        break;

    case "zh":
        $lang_id = "zh_CN";
        break;

    default:
        break;
}

switch ($long_lang) {
    case "es-419":
        $lang_id = "es_419";
        break;

    case "es-es":
        $lang_id = "es_ES";
        break;

    case "es-mx":
        $lang_id = "es_MX";
        break;

    case "nqo":
        $lang_id = "nqo";
        $lang_direction = "RTL";
        break;

    case "pt-br":
        $lang_id = "pt_BR";
        break;

    case "pt-pt":
        $lang_id = "pt_PT";
        break;

    case "sr-ba":
    case "sr-me":
        $lang_id = "sr@ijekavian";
        break;

    case "sh-ba":
    case "sh-me":
        $lang_id = "sr@ijekavianlatin";
        break;

    case "zh-cn":
    case "zh-sg":
        $lang_id = "zh_CN";
        break;

    case "yue":
    case "zh-hk":
    case "zh-mo":
        $lang_id = "zh_HK";
        break;

    case "zh-tw":
        $lang_id = "zh_TW";
        break;

    default:
        break;
}

include_once('translations/' . $lang_id . '.php');
?>
