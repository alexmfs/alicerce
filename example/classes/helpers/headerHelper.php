<?php

function getHeader($arr){

    $itemTag = 'li';
    $options = '';


    if (!isset($arr["type"]) || $arr["type"] == 'basico') {

        if (isset($arr["brand"])) {
            echo "<h1>".$arr["brand"]."</h1>\n";
        }

        if (isset($arr["items"])) {

            if (isset($arr["itemsOptions"])) {

                foreach($arr["itemsOptions"] as $key => $value) {


                    if(isset($value["tag"])){
                        $itemTag = $value["tag"];
                    }

                    if(isset($value["$options"])){
                        $itemOptions = $value["options"];
                    }

                }


            }

            echo "<ul>\n";

            foreach($arr["items"] as $key => $value) {

                echo "<$itemTag $options><a href=".$value['url'].">". $value['label']."</a></$itemTag>\n";

            }

            echo "</ul>\n";

        }

    }

    if (!isset($arr["type"]) || $arr["type"] == 'teste') {
      echo "teste";
    }

}

// getHeader([
//
//         "type" => "basico",
//
//         "brand" => "boideia",
//
//         'items' => [
//
//             [
//                 'label' => 'Home',
//                 'url' => '/home'
//             ],
//             [
//                 'label' => 'About',
//                 'url' => '/about'
//             ],
//             [
//                 'label' => 'Blog',
//                 'url' => '/blog'
//             ],
//             [
//                 'label' => 'Contact',
//                 'url' => '/contact'
//             ],
//
//         ],
//
//         'itemsOptions' => [
//             [
//
//                 'tag' => 'li',
//                 'options'=> 'class="item"'
//             ],
//         ],
//
//     ]);

?>
