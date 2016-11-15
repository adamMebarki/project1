<?php
/**
 * Created by PhpStorm.
 * User: Adam
 * Date: 15/11/2016
 * Time: 10:58
 */

    function calcNP($nombre){

        $res = $nombre%2;

        if($res == 0){
            echo $nombre.' :  Non premier';

        }else{
            echo $nombre.' : Premier';
        }
    }

?>