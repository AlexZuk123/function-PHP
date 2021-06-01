<?php
    function Menu($menu){
        foreach($menu as $key => $value){
            $result .='<li>'.$value.$key.'<a/></li>';
        }
    
        echo $result;
    }
?>