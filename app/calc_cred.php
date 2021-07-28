<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.


//pobranie parametrów
function getParams(&$value, &$years, &$percent){
    $value = isset($_REQUEST ['value']) ? $_REQUEST['value'] : null;
    $years = isset($_REQUEST ['years']) ? $_REQUEST['years'] : null;
    $percent = isset($_REQUEST ['percent']) ? $_REQUEST['percent'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$value, &$years, &$percent, &$messages){
    // sprawdzenie, czy parametry zostały przekazane
    if ( ! (isset($value) && isset($years) && isset($percent))) {    
        return false;
    }

    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ( $value == "") {
	$messages [] = 'Nie podano kwoty';
    }
    if ( $years == "") {
	$messages [] = 'Nie podano okresu spłaty';
    }
    if ( $percent == "") {
	$messages [] = 'Nie podano oprocentowania';
    }


    if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $value )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $years )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! ((is_numeric( $percent )) &($percent>=0))) {
		$messages [] = 'Trzecia wartość nie jest liczbą';
	}
        if (count ( $messages ) != 0) return false;
	else return true;
        
    }

function process(&$value, &$years, &$percent, &$messages, &$result){
    
    $value = intval($value);
    $years = intval($years);
    $percent = floatval($percent); 
    $result=(1+$percent/100)*($value/($years*12));
    
}

$value = null;
$years = null;
$percent = null;
$result = null;
$messages = array();

getParams($value, $years, $percent);
if(validate($value, $years, $percent, $messages)){
    process($value, $years, $percent, $messages, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Obliczanie raty kredytu nigdy nie było tak proste!');
$smarty->assign('page_header','Szablony Smarty');


//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('value',$value);
$smarty->assign('years',$years);
$smarty->assign('percent',$percent);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc_cred.tpl');