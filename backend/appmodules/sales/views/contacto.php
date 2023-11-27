<?php
    class ProductView {
        
        function add(){
            $fragment = file_get_contents(STATIC_DIR . 'sales/contacto/contacto.html', true);
            $message =  "today is a great day";
            $html = Template($fragment)->render(["MESSAGE"=>$message]);

            $dict =  ["TITLE" => "contacto" , "MESSAGE"=> $message, "CONTENT"=>$html];
            print Template()->show($dict);

        }
        function list($collection = [] ){
            $fragment = file_get_contents(
            STATIC_DIR . "sales/contacto/list.html");
            $html = Template($fragment)->render_regex('LISTADO', $collection);
            $dict =  ["TITLE" => "contacto" , "CONTENT"=>$html];
            
            print Template('Listado de contactos')->show($dict);

        }
        function edit($product =  [] ){
            $fragment = file_get_contents(
                STATIC_DIR . "sales/contacto/edit.html");
            $html = Template($fragment)->render($product);
            $dictTemplate =  ["TITLE" => "contacto" , "CONTENT"=>$html];
            print Template('Editar contacto')->show($dictTemplate);
        }
    }
?>
