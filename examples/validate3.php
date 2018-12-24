<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-22
 * Time:         14:26
 */


require __DIR__ . '/../vendor/autoload.php';

$fxml_validate = \Advinser\FatturaElettronicaXml\FatturaElettronicaValidate::validateFromFile(__DIR__.'/fattura01_pa_from_array_full_write_WITHERROR.xml');

foreach ($fxml_validate->getErrors() as $e){
    print_r($e->toArray());
}