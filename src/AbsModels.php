<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         05/11/2018
 * Time:         18:26
 */

namespace Advinser\FatturaElettronicaXml;


abstract class AbsModels
{

    /**
     * @param array $array
     * @return array
     */
    public function clean_array(array $array): array
    {
        foreach ($array as $key => $item) {
            is_array($item) && $array [$key] = $this->clean_array($item);
            if ( $key!=='ContattiTrasmittente' && empty ($array [$key])){
                unset ($array [$key]);
            }
        }
        return $array;
    }

}