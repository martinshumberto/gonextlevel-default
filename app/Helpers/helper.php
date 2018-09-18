<?php

if (!function_exists('human_file_size')) {
    /**
     * Returns a human readable file size
     *
     * @param integer $bytes
     * Bytes contains the size of the bytes to convert
     *
     * @param integer $decimals
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function human_file_size($bytes, $decimals = 2)
    {
        $sz = 'BKMGTPE';
        $factor = (int)floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $sz[$factor];

    }
}

if (!function_exists('in_arrayi')) {

    /**
     * Checks if a value exists in an array in a case-insensitive manner
     *
     * @param mixed $needle
     * The searched value
     *
     * @param $haystack
     * The array
     *
     * @param bool $strict [optional]
     * If set to true type of needle will also be matched
     *
     * @return bool true if needle is found in the array,
     * false otherwise
     */
    function in_arrayi($needle, $haystack, $strict = false)
    {
        return in_array(strtolower($needle), array_map('strtolower', $haystack), $strict);
    }
}

if(!function_exists('extractDate')){

    function extractDate($dateTime) {

        if (isset($dateTime)) {

            date_default_timezone_set("America/Sao_Paulo");

            $dataNow = substr($dateTime, 0, 10);
            $data = explode('-', $dataNow);
            $data = $data[2] . '/' . $data[1] . '/' . $data[0];
            return $data;
        } else {
            return false;
        }
    }
}

if(!function_exists('extrateHour')){


    function extrateHour($dateTime, $secunts = false) {
        date_default_timezone_set("America/Sao_Paulo");

        $hora = substr($dateTime, 11, 8);
        return $hora;
    }

}

if(!function_exists('stringTo')){


    function stringTo($string) {


        $string = preg_replace(
            array(
        //Maiúsculos
                '/\xc3[\x80-\x85]/',
                '/\xc3\x87/',
                '/\xc3[\x88-\x8b]/',
                '/\xc3[\x8c-\x8f]/',
                '/\xc3([\x92-\x96]|\x98)/',
                '/\xc3[\x99-\x9c]/',
        //Minúsculos
                '/\xc3[\xa0-\xa5]/',
                '/\xc3\xa7/',
                '/\xc3[\xa8-\xab]/',
                '/\xc3[\xac-\xaf]/',
                '/\xc3([\xb2-\xb6]|\xb8)/',
                '/\xc3[\xb9-\xbc]/',
            ), str_split('ACEIOUaceiou', 1), is_utf8($string) ? $string : utf8_encode($string)
        );
        $string = strtolower($string);

        $what = array('(', ')', ',', ';', ':', '|', '!', '"', '#', '$', '%', '&', '/', '=', '?', '>', '<', 'ª', 'º', '“', '”');
        $by = array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

        $string = str_replace($what, $by, $string);

        $string = str_replace(" ", "-", $string);

        return $string;
    }
}

if(!function_exists('criptBySystem')){
    function criptBySystem( $string, $action = 'e' ) {


	#EMPRCPT
	//$encrypted = criptBySystem( 'Hello World!', 'e' );
	#DECRIPT
	//$decrypted = criptBySystem( 'RTlOMytOZStXdjdHbDZtamNDWFpGdz09', 'd' );

    // you may change these values to your own
        $secret_key = 'IOF-1441';
        $secret_iv = '-EDONIH';

        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

        if( $action == 'e' ) {
            $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'd' ){
            $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }

        return $output;
    }
}

function dateGetExtencer($date){

    $days = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
    $daysnumber = date('w', strtotime($date));
    $date = explode('-', $date);
    $year = $date[0];
    $month = $date[1];
    $day = $date[2];

    switch ($month){
        case 1: $month = "Janeiro"; break;
        case 2: $month = "Fevereiro"; break;
        case 3: $month = "Março"; break;
        case 4: $month = "Abril"; break;
        case 5: $month = "Maio"; break;
        case 6: $month = "Junho"; break;
        case 7: $month = "Julho"; break;
        case 8: $month = "Agosto"; break;
        case 9: $month = "Setembro"; break;
        case 10: $month = "Outubro"; break;
        case 11: $month = "Novembro"; break;
        case 12: $month = "Dezembro"; break;
    }

    return $days[$daysnumber].", dia " . $day . " de ". $month;
}

function getTimeLast($time){
    $now = strtotime(date('m/d/Y H:i:s'));
    $time = strtotime($time);
    $diff = $now - $time;

    $seconds = $diff;
    $minutes = round($diff / 60);
    $hours = round($diff / 3600);
    $days = round($diff / 86400);
    $weeks = round($diff / 604800);
    $months = round($diff / 2419200);
    $years = round($diff / 29030400);

    if ($seconds <= 60) return"1 min";
    else if ($minutes <= 60) return $minutes==1 ?'1 min':$minutes.' min';
    else if ($hours <= 24) return $hours==1 ?'1 hora':$hours.' horas';
    else if ($days <= 7) return $days==1 ?'1 dia':$days.' dias';
    else if ($weeks <= 4) return $weeks==1 ?'1 semana':$weeks.' semanas';
    else if ($months <= 12) return $months == 1 ?'1 mês':$months.' meses';
    else return $years == 1 ? 'um ano':$years.' anos';
}


function percentage($result, $count)
{
    $problem = (($result / $count) * 100);
    return  $problem;
}

if (!function_exists('policiesAgent')) {

    function policiesAgent($modulo, $modules)
    {
        $modules = explode(':', $modules);

        foreach ($modules as $key => $value) {
            if($value == $modulo){
                return true;
            }
        }

    }

}

if(!function_exists('getMonth')){
    function getMonth($data){

        switch ($data){
            case "01": $month = "Janeiro"; break;
            case "02": $month = "Fevereiro"; break;
            case "03": $month = "Março"; break;
            case "04": $month = "Abril"; break;
            case "05": $month = "Maio"; break;
            case "06": $month = "Junho"; break;
            case "07": $month = "Julho"; break;
            case "08": $month = "Agosto"; break;
            case "09": $month = "Setembro"; break;
            case "10": $month = "Outubro"; break;
            case "11": $month = "Novembro"; break;
            case "12": $month = "Dezembro"; break;
        }

        return $month;
    }
}


if(!function_exists('getName')){
    function getName($string){
        $reabitt = explode(' ', $string);
        return array_shift($reabitt);
    }
}