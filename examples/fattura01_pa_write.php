<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         06/11/2018
 * Time:         12:44
 */

require __DIR__.'/../vendor/autoload.php';

/**********
 *
 * HEADER FATTURA
 *
 **********/

/**
 * imposto i dati per la trasmissione della fattura
 */
$datiTrasmissione = new \FatturaElettronicaXml\Header\DatiTrasmissione();
$datiTrasmissione->setIdTrasmittente(new \FatturaElettronicaXml\Structures\Fiscale('IT', '01234567890'));
$datiTrasmissione->setProgressivoInvio(1);
$datiTrasmissione->setFormatoTrasmissione('FPA12');
$datiTrasmissione->setCodiceDestinatario('AAAAAA');
//$datiTrasmissione->setPECDestinatario('info@pec.pec.it');

/**
 * imposto i dati del soggetto  che emette la fattura
 */
$prestatore = new \FatturaElettronicaXml\Header\CedentePrestatore();
$prestatore
    ->setIdFiscaleIVA(new \FatturaElettronicaXml\Structures\Fiscale('IT','01234567890'))
    ->setCodiceFiscale('TMMMMMMMMMMMMMMMMMMMMMMMM');

$anagraficaCedente = new \FatturaElettronicaXml\Structures\Anagrafica();
$anagraficaCedente->setDenominazione('ALPHA SRL');
$prestatore->setAnagrafica($anagraficaCedente);
$prestatore->setRegimeFiscale('RF19');

$sedePrestatore = new \FatturaElettronicaXml\Structures\Indirizzo();
$sedePrestatore
    ->setIndirizzo('VIALE ROMA 543')
    ->setCAP('07100')
    ->setComune('Sassari')
    ->setProvincia('SS')
    ->setNazione('IT')
;
$prestatore->setSede($sedePrestatore)
    ->setUfficio('SS')
    ->setNumeroREA('00000')
    ->setStatoLiquidazione('LN')
    ->setTelefono('000-00000000')
    ->setEmail('info@alpha.test')
    ->setFax('000-00000000')
;

/**
 * imposto i dati del soggetto che a cui è intestata la fattura
 */
$committente = new \FatturaElettronicaXml\Header\CessionarioCommittente();
$committente->setCodiceFiscale('01234567890');
$anagraficaCommittente = new \FatturaElettronicaXml\Structures\Anagrafica();
$anagraficaCommittente->setDenominazione('Amministrativa BETA');
$committente->setAnagrafica($anagraficaCommittente);
$sedeCommittente = new \FatturaElettronicaXml\Structures\Indirizzo();
$sedeCommittente->setIndirizzo('VIA TORINO 38-B')
    ->setCAP('00145')
    ->setComune('ROMA')
    ->setProvincia('RM')
    ->setNazione('IT')
;
$committente->setSede($sedeCommittente);

/**
 * assegno i dati all'header della fattura
 */
$header = new \FatturaElettronicaXml\Header\FatturaElettronicaHeader();
$header->setDatiTrasmissione($datiTrasmissione);
$header->setCedentePrestatore($prestatore);
$header->setCessionarioCommittente($committente);


/**********
 *
 * BODY FATTURA
 *
 **********/

$body = new \FatturaElettronicaXml\Body\FatturaElettronicaBody();

/**
 * dati generali fattura
 */
$datiGenerali = new \FatturaElettronicaXml\Body\DatiGenerali();

$datiGeneraliDocumento = new \FatturaElettronicaXml\Body\DatiGeneraliDocumento();
$datiGenerali->setDatiGeneraliDocumento($datiGeneraliDocumento);

$datiGeneraliDocumento->setTipoDocumento('TD01')
    ->setDivisa('EUR')
    ->setData('2017-01-18')
    ->setNumero(123)
    ->addCausale('LA FATTURA FA RIFERIMENTO AD UNA OPERAZIONE AAAA BBBBBBBBBBBBBBBBBB CCC DDDDDDDDDDDDDDD E FFFFFFFFFFFFFFFFFFFF GGGGGGGGGG HHHHHHH II LLLLLLLLLLLLLLLLL MMM NNNNN OO PPPPPPPPPPP QQQQ RRRR SSSSSSSSSSSSSS')
    ->addCausale('SEGUE DESCRIZIONE CAUSALE NEL CASO IN CUI NON SIANO STATI SUFFICIENTI 200 CARATTERI AAAAAAAAAAA BBBBBBBBBBBBBBBBB')
//    ->setImportoTotaleDocumento('xx')
//    ->setArt73(true|false)
;
/**
 * dati ordine di acquisto, se presente
 */
$ordineAcquisto = new \FatturaElettronicaXml\Structures\DatiRiferimento();
$datiGenerali->setDatiOrdineAcquisto($ordineAcquisto);
$ordineAcquisto
    ->setRiferimentoNumeroLinea(1)
    ->setNumItem(1)
    ->setCodiceCIG('456def')
    ->setCodiceCUP('123abc')
    ->setIdDocumento('66685');

/**
 * DatiRiepilogo e Righe fattura
 */
$beni = new \FatturaElettronicaXml\Body\DatiBeniServizi();
/**
 * DatiRiepilogo
 */
$beni->setAliquotaIVA(22);
$beni->setImponibileImporto(5);
$beni->setImposta(1.1);
$beni->setEsigibilitaIVA('I');

/**
 * Righe Fattura
 */
$dettaglioLinea = new \FatturaElettronicaXml\Body\DettaglioLinea();
$dettaglioLinea->setNumeroLinea(1)
    ->setDescrizione('DESCRIZIONE DELLA FORNITURA')
    //->setUnitaMisura('Servizio')
    ->setQuantita(5)
    ->setPrezzoUnitario(1)
    ->setPrezzoTotale(5)
    ->setAliquotaIVA(22)
;

$beni->addDettaglioLinea($dettaglioLinea);

/**
 * Dettagli relativi al pagamento
 */
$pagamento = new \FatturaElettronicaXml\Body\DatiPagamento();
$pagamento->setCondizioniPagamento('TP01')
    ->setBeneficiario('Advinser di Andrea Tommasi')
    ->setModalitaPagamento('MP01')
    ->setImportoPagamento(6.1)
    ->setDataScadenzaPagamento('2017-02-18')
    ->setIstitutoFinanziario('Banca xxxxxx')
    ->setIBAN('IT71Vxxxxxxxxxxxxxxxxxxxx');

/**
 * le varie parti vengono aggiunte al body
 */
$body->setDatiBeniServizi($beni);
$body->setDatiPagamento($pagamento);
$body->setDatiGenerali($datiGenerali);

$fattura = new \FatturaElettronicaXml\FatturaElettronica();
$fattura->setHeader($header);
/**
 * le caso di lotti di fatture si può aggiungere più di un body
 */
$fattura->addBody($body);


/**
 * COCLUSIONE
 */
$writer = new \FatturaElettronicaXml\XmlWriter($fattura);
/**
 * display file xml
 */
//echo $writer->encodeXml();
/**
 *
 */
$writer->writeXml(__DIR__ . '/fattura_01_pa_write.xml');