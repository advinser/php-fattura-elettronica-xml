<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-21
 * Time:         17:18
 */

require __DIR__ . '/../vendor/autoload.php';


$fattura = \Advinser\FatturaElettronicaXml\FatturaElettronicaXmlReader::decodeFromFile(__DIR__ . '/fattura01_pa_from_array_full_write_WITHERROR.xml',true);

print_r($fattura->getErrorContainer());