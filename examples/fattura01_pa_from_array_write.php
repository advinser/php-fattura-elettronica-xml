<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         06/11/2018
 * Time:         12:44
 */

require __DIR__ . '/../vendor/autoload.php';

/**********
 *
 * HEADER FATTURA
 *
 **********/

/**
 * imposto i dati per la trasmissione della fattura
 */

$datiTrasmissione = \Advinser\FatturaElettronicaXml\Header\DatiTrasmissione::fromArray([
    'IdTrasmittente' => [
        'IdPaese' => 'IT',
        'IdCodice' => '01234567890',
    ],
    'ProgressivoInvio' => 1,
    'FormatoTrasmissione' => 'FPA12',
    'CodiceDestinatario' => 'AAAAAA',
]);
/**
 * imposto i dati del soggetto  che emette la fattura
 */

$prestatore = \Advinser\FatturaElettronicaXml\Header\CedentePrestatore::fromArray([
    'DatiAnagrafici' => [
        'IdFiscaleIVA' => [
            'IdPaese' => 'IT',
            'IdCodice' => '01234567890',
        ],
        'Anagrafica' => [
            'Denominazione' => 'ALPHA SRL',
        ],
        'RegimeFiscale' => 'RF19',
    ],
    'Sede' => [
        'Indirizzo' => 'VIALE ROMA 543',
        'CAP' => '07100',
        'Comune' => 'Sassari',
        'Provincia' => 'SS',
        'Nazione' => 'IT'
    ],
    'IscrizioneREA' => [
        'Ufficio' => 'SS',
        'NumeroREA' => '00000',
        'StatoLiquidazione' => 'LN',
        'Telefono' => '000-00000000',
        'Email' => 'info@alpha.test',
        'Fax' => '000-00000000',
    ]
]);

/**
 * imposto i dati del soggetto che a cui è intestata la fattura
 */

$committente = \Advinser\FatturaElettronicaXml\Header\CessionarioCommittente::fromArray([
    'DatiAnagrafici' => [
        'CodiceFiscale' => '01234567890',
        'Anagrafica' => [
            'Denominazione' => 'Amministrativa BETA'
        ],
    ],
    'Sede' => [
        'Indirizzo' => 'VIA TORINO',
        'NumeroCivico' => '543',
        'CAP' => '00145',
        'Comune' => 'ROMA',
        'Provincia' => 'RM',
        'Nazione' => 'IT'
    ]
]);

/**
 * assegno i dati all'header della fattura
 */
$header = new \Advinser\FatturaElettronicaXml\Header\FatturaElettronicaHeader();
$header->setDatiTrasmissione($datiTrasmissione);
$header->setCedentePrestatore($prestatore);
$header->setCessionarioCommittente($committente);


/**********
 *
 * BODY FATTURA
 *
 **********/

$body = new \Advinser\FatturaElettronicaXml\Body\FatturaElettronicaBody();

/**
 * dati generali fattura
 */
$datiGenerali = \Advinser\FatturaElettronicaXml\Body\DatiGenerali::fromArray([
    'DatiGeneraliDocumento' => [
        'TipoDocumento' => 'TD01',
        'Divisa' => 'EUR',
        'Data' => '2017-01-18',
        'Numero' => 123,
        'Causale' => [
            'LA FATTURA FA RIFERIMENTO AD UNA OPERAZIONE AAAA BBBBBBBBBBBBBBBBBB CCC DDDDDDDDDDDDDDD E FFFFFFFFFFFFFFFFFFFF GGGGGGGGGG HHHHHHH II LLLLLLLLLLLLLLLLL MMM NNNNN OO PPPPPPPPPPP QQQQ RRRR SSSSSSSSSSSSSS',
            'SEGUE DESCRIZIONE CAUSALE NEL CASO IN CUI NON SIANO STATI SUFFICIENTI 200 CARATTERI AAAAAAAAAAA BBBBBBBBBBBBBBBBB'
        ]
    ]
]);

/**
 * dati ordine di acquisto, se presente
 */
$ordineAcquisto = \Advinser\FatturaElettronicaXml\Structures\DatiRiferimento::fromArray([
    'RiferimentoNumeroLinea' => 1,
    'IdDocumento' => '66685',
    'NumItem' => 2,
    'CodiceCUP' => '123abc',
    'CodiceCIG' => '456def'
]);
/**
 * DatiRiepilogo e Righe fattura
 */
$beni = \Advinser\FatturaElettronicaXml\Body\DatiBeniServizi::fromArray([
    'DettaglioLinee' => [
        [
            'NumeroLinea' => 1,
            'Descrizione' => 'DESCRIZIONE DELLA FORNITURA',
            'Quantita' => 5,
//            'UnitaMisura' => 'SERVIZIO',
            'PrezzoUnitario' => 1,
            'PrezzoTotale' => 5,
            'AliquotaIVA' => 22,
        ]
    ],
    'DatiRiepilogo' => [
        'AliquotaIVA' => 22,
        'ImponibileImporto' => 5,
        'Imposta' => 1.1,
        'EsigibilitaIVA' => 'I',
    ]
]);

/**
 * Dettagli relativi al pagamento
 */
$pagamento = \Advinser\FatturaElettronicaXml\Body\DatiPagamento::fromArray([
    'CondizioniPagamento' => 'TP01',
    'DettaglioPagamento' => [
        'Beneficiario' => 'Advinser di Andrea Tommasi',
        'ModalitaPagamento' => 'MP01',
        'DataScadenzaPagamento' => '2017-02-18',
        'ImportoPagamento' => 6.1,
        'IstitutoFinanziario' => 'Banca xxxxxx',
        'IBAN' => 'IT71Vxxxxxxxxxxxxxxxxxxxx',
    ]
]);

/**
 * le varie parti vengono aggiunte al body
 */
$body->setDatiBeniServizi($beni);
$body->setDatiPagamento($pagamento);
$body->setDatiGenerali($datiGenerali);

$fattura = new \Advinser\FatturaElettronicaXml\FatturaElettronica();
$fattura->setHeader($header);
/**
 * le caso di lotti di fatture si può aggiungere più di un body
 */
$fattura->addBody($body);


/**
 * COCLUSIONE
 */
$writer = new \Advinser\FatturaElettronicaXml\XmlWriter($fattura);
/**
 * display file xml
 */
//echo $writer->encodeXml();
/**
 *
 */
$writer->writeXml(__DIR__ . '/fattura01_pa_from_array_write.xml');