<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         05/11/2018
 * Time:         17:26
 */

namespace FatturaElettronicaXml;


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
            if ( empty ($array [$key])){
                unset ($array [$key]);
            }
        }
        return $array;
    }

}