<?php

function getForm($arr){

    $options = 'class="form-control"';
    $action = '';
    $method = 'post';
    
    if(isset($value["action"])){
        $action = $value["action"];
    }
    
    if(isset($value["method"])){
        $method = $value["method"];
    }       

    if (isset($arr["action"])) {
        echo '<form action="'.$action.'" method="'.$method.'">';        
    }

    if (isset($arr["items"])) {

        foreach($arr["items"] as $key => $value) {

            $inputType = 'text';

            if(isset($value["type"])){
                $inputType = $value["type"];
            }  

            echo
                "<div $options>",
                    '<label for="'.strtolower($value['label']).'">'.$value['label']."</label>",
                    '<input type="'.$inputType.'" id="'.strtolower($value['label']).' "'.(isset($value['checked']) && $value['checked'] ? 'checked ' : '').'>',
                "</div>";
        }

    }
    echo
        '<div class="form-control buttons">',
            "<input type='submit'>",
        "</div>";
    
    echo "</form>";
    

  
}

getForm([
    
    "action" => "send.php",
    "method" => "post",

    'items' => [

        [
            'label' => 'Nome'
        ],
        [
            'radio' => 'Email',
            'items => [
                '1'=>'cachorro',
                '2'=>'gato',
                 [
                    'id' => '3',
                  'label' => 'Mensagem',
                  'checked' => true
                 ],
            ],
        ],
        [
            'label' => 'Senha',
            'type'  => 'password'
        ],
        [
            'label' => 'Mensagem',
            'checked' => true
        ],

    ]

]);

?>

<style>
    .form-control{
        margin-bottom: 10px;
    }
    input, label{
        display: block;
    }
</style>