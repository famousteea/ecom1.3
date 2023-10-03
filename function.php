<?php
 function namelength_isvalid($name){
    // minimu2 maximum10 caractere
    $length=str(namelength_isvalid);
    $responses=[
        'isvalid'=>true,
        'msg'=>'',
    ];
    if ($length<2) {
        $responses=[
            'isvalid'=>true,
            'msg'=>'trop court',
        ];
    }
    elseif ($length>10) {
        $responses=[
            'isvalid'=>true,
            'msg'=>'trop long',
        ];
 }
 return $responses;
}