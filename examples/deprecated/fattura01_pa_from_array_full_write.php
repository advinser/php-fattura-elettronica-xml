<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         06/11/2018
 * Time:         12:44
 */

require __DIR__ . '/../vendor/autoload.php';

//$fatturaxml = \Advinser\FatturaElettronicaXml\XmlReader::decodeFromFile(__DIR__.'/../doc_es/IT01234567890_FPA01.xml');
//var_export($fatturaxml->toArray());


$fattura_array = [
    'FatturaElettronicaHeader' =>
        [
            'DatiTrasmissione' =>
                [
                    'IdTrasmittente' =>
                        [
                            'IdPaese' => 'IT',
                            'IdCodice' => '01234567890',
                        ],
                    'ProgressivoInvio' => '0000000001',
                    'FormatoTrasmissione' => 'FPR12',
                    'CodiceDestinatario' => 'AAAAAA',
                    'ContattiTrasmittente' => NULL,
                ],
            'CedentePrestatore' =>
                [
                    'DatiAnagrafici' =>
                        [
                            'IdFiscaleIVA' =>
                                [
                                    'IdPaese' => 'IT',
                                    'IdCodice' => '01234567890',
                                ],
                            'Anagrafica' =>
                                [
                                    'Denominazione' => 'ALPHA SRL',
                                ],
                            'RegimeFiscale' => 'RF19',
                        ],
                    'Sede' =>
                        [
                            'Indirizzo' => 'VIALE ROMA 543',
                            'CAP' => '07100',
                            'Comune' => 'SASSARI',
                            'Provincia' => 'SS',
                            'Nazione' => 'IT',
                        ],
                ],
            'CessionarioCommittente' =>
                [
                    'DatiAnagrafici' =>
                        [
                            'CodiceFiscale' => '09876543210',
                            'Anagrafica' =>
                                [
                                    'Denominazione' => 'AMMINISTRAZIONE BETA',
                                ],
                        ],
                    'Sede' =>
                        [
                            'Indirizzo' => 'VIA TORINO 38-B',
                            'CAP' => '00145',
                            'Comune' => 'ROMA',
                            'Provincia' => 'RM',
                            'Nazione' => 'IT',
                        ],
                ],
        ],
    'FatturaElettronicaBody' =>
        [
            'DatiGenerali' =>
                [
                    'DatiGeneraliDocumento' =>
                        [
                            'TipoDocumento' => 'TD01',
                            'Divisa' => 'EUR',
                            'Data' => '2017-01-18',
                            'Numero' => '123',
                            'Causale' =>
                                [
                                    0 => 'LA FATTURA FA RIFERIMENTO AD UNA OPERAZIONE AAAA BBBBBBBBBBBBBBBBBB CCC DDDDDDDDDDDDDDD E FFFFFFFFFFFFFFFFFFFF GGGGGGGGGG HHHHHHH II LLLLLLLLLLLLLLLLL MMM NNNNN OO PPPPPPPPPPP QQQQ RRRR SSSSSSSSSSSSSS',
                                    1 => 'SEGUE DESCRIZIONE CAUSALE NEL CASO IN CUI NON SIANO STATI SUFFICIENTI 200 CARATTERI AAAAAAAAAAA BBBBBBBBBBBBBBBBB',
                                ],
                        ],
                    'DatiOrdineAcquisto' =>
                        [
                            'RiferimentoNumeroLinea' => '1',
                            'IdDocumento' => '66685',
                            'NumItem' => '1',
                            'CodiceCUP' => '123abc',
                            'CodiceCIG' => '456def',
                        ],
                    'DatiContratto' =>
                        [
                            'RiferimentoNumeroLinea' => '1',
                            'IdDocumento' => '123',
                            'Data' => '2016-09-01',
                            'NumItem' => '5',
                            'CodiceCUP' => '123abc',
                            'CodiceCIG' => '456def',
                        ],
                    'DatiConvenzione' =>
                        [
                            'RiferimentoNumeroLinea' => '1',
                            'IdDocumento' => '456',
                            'NumItem' => '5',
                            'CodiceCUP' => '123abc',
                            'CodiceCIG' => '456def',
                        ],
                    'DatiRicezione' =>
                        [
                            'RiferimentoNumeroLinea' => '1',
                            'IdDocumento' => '789',
                            'NumItem' => '5',
                            'CodiceCUP' => '123abc',
                            'CodiceCIG' => '456def',
                        ],
                    'DatiTrasporto' =>
                        [
                            'DatiAnagraficiVettore' =>
                                [
                                    'IdFiscaleIVA' =>
                                        [
                                            'IdPaese' => 'IT',
                                            'IdCodice' => '24681012141',
                                        ],
                                    'Anagrafica' =>
                                        [
                                            'Denominazione' => 'Trasporto spa',
                                        ],
                                ],
                            'DataOraConsegna' => '2017-01-10T16:46:12.000+02:00',
                        ],
                ],
            'DatiBeniServizi' =>
                [
                    'DettaglioLinee' =>
                        [
                            'NumeroLinea' => '1',
                            'Descrizione' => 'DESCRIZIONE DELLA FORNITURA',
                            'Quantita' => '5.00',
                            'PrezzoUnitario' => '1.00',
                            'PrezzoTotale' => '5.00',
                            'AliquotaIVA' => '22.00',
                        ],
                    'DatiRiepilogo' => [
                        [
                            'AliquotaIVA' => '22.00',
                            'ImponibileImporto' => '5.00',
                            'Imposta' => '1.10',
                            'EsigibilitaIVA' => 'I',
                        ],
                        [
                            'AliquotaIVA' => '10.00',
                            'ImponibileImporto' => '5.00',
                            'Imposta' => '0.50',
                            'EsigibilitaIVA' => 'I',
                        ]
                    ],
                ],
            'DatiPagamento' =>
                [
                    'CondizioniPagamento' => 'TP01',
                    'DettaglioPagamento' => [
                        [
                            'ModalitaPagamento' => 'MP01',
                            'DataScadenzaPagamento' => '2017-02-18',
                            'ImportoPagamento' => '6.10',
                        ],
                        [
                            'ModalitaPagamento' => 'MP15',
                            'DataScadenzaPagamento' => '2017-02-19',
                            'ImportoPagamento' => '6.60',
                        ],
                    ]
                ],
        ],
];

$fattura = \Advinser\FatturaElettronicaXml\FatturaElettronica::fromArray($fattura_array);

/**
 * COCLUSIONE
 */
$writer = new \Advinser\FatturaElettronicaXml\FatturaElettronicaXmlWriter($fattura);
/**
 * display file xml
 */
//echo $writer->encodeXml();
/**
 *
 */
$writer->writeXml(__DIR__ . '/fattura01_pa_from_array_full_write.xml');