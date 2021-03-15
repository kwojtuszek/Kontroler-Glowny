<?php
require_once dirname (__FILE__).'/../config_credit.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    default :
        include_once $conf -> root_path.'/app/calc/CalcControl.class.php';

        $control = new CalcControl();
        $control -> generateView();
    break;
    case 'calcCalculate' :
        include_once $conf -> root_path.'/app/calc/CalcControl.class.php';
        
        $control = new CalcControl();
        $control -> calculate();
    break;
}