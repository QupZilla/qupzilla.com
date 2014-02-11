<?php
$ACCEPT_LANGUAGE = (!isset($_COOKIE["language"]) || $_COOKIE["language"] == "") ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : $_COOKIE["language"];

// Set cookie in case language changes was requested
if (isset($_GET['lang']) && $_GET["lang"] != "") {
    setCookie("language", $_GET["lang"], time()+60*60*24*30*6, "/");
    $ACCEPT_LANGUAGE = $_GET["lang"];
}

$ACCEPT_LANGUAGE = strtolower($ACCEPT_LANGUAGE);

$short_lang = substr($ACCEPT_LANGUAGE, 0, 2);
$long_lang = substr($ACCEPT_LANGUAGE, 0, 5);

// Defaults
require_once('translations/en_US.php');

$lang_id = "en_US";
$lang_direction = "LTR";

switch ($short_lang) {
    case "ar":
        $lang_id = "ar_SA";
        $lang_direction = "RTL";
        break;

    case "bo":
        $lang_id = "bo_CN";
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

    case "gl":
        $lang_id = "gl_ES";
        break;

    case "he":
        $lang_id = "he_IL";
        $lang_direction = "RTL";
        break;

    case "hu":
        $lang_id = "hu_HU";
        break;

    case "id":
        $lang_id = "id_ID";
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

    case "my":
        $lang_id = "my_MM";
        break;

    case "nb":
        $lang_id = "nb_NO";
        break;

    case "nl":
        $lang_id = "nl_NL";
        break;

        // nqo
    case "pl":
        $lang_id = "pl_PL";
        break;

    case "pt":
        $lang_id = "pt_PT";
        break;

    case "ro":
        $lang_id = "ro_RO";
        break;

    case "ru":
        $lang_id = "ru_RU";
        break;

    case "sk":
        $lang_id = "sk_SK";
        break;

    case "sh":
        $lang_id = "sr_RS@latin";
        break;

    case "sr":
        $lang_id = "sr_RS";
        break;

    case "sv":
        $lang_id = "sv_SE";
        break;

    case "uk":
        $lang_id = "uk_UA";
        break;

        // Multiple
    case "zh":
        $lang_id = "zh_CN";
        break;

    case "es":
        $lang_id = "es_ES";
        break;

    case "ru":
        $lang_id = "ru_RU";
        break;

    case "it":
        $lang_id = "it_IT";
        break;

    case "id":
        $lang_id = "id_ID";
        break;

    case "fr":
        $lang_id = "fr_FR";
        break;

    case "ka":
        $lang_id = "ka_GE";
        break;

    case "ja":
        $lang_id = "ja_JP";
        break;

    case "sk":
        $lang_id = "sk_SK";
        break;

    case "uk":
        $lang_id = "uk_UA";
        break;

    case "zh":
        $lang_id = "zh_CN";
        break;

    case "bs":
    case "hr":
        $lang_id = "sr_BA@latin";
        break;

    default:
        break;
}

switch ($long_lang) {
    case "sr-ba":
    case "sr-me":
        $lang_id = "sr_BA";
        break;

    case "sh-ba":
    case "sh-me":
        $lang_id = "sr_BA@latin";
        break;

    case "zh-cn":
        $lang_id = "zh_CN";
        break;

    case "zh-tw":
        $lang_id = "zh_TW";
        break;

    case "es-419":
        $lang_id = "es_419";
        break;

    case "es-ar":
        $lang_id = "es_AR";
        break;

    case "es-es":
        $lang_id = "es_ES";
        break;

    case "es-ve":
        $lang_id = "es_VE";
        break;

    case "pt-pt":
        $lang_id = "pt_PT";
        break;

    case "pt-br":
        $lang_id = "pt_BR";
        break;

    // ??
    case "nqo":
        $lang_id = "nqo";
        break;

    default:
        break;
}

include_once('translations/' . $lang_id . '.php');
?>
