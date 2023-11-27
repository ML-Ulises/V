<?php
    class UserView {
        
        function add(){
            $fragment = file_get_contents(STATIC_DIR . 'users/user/create.html', true);

            $dict =  ["TITLE" => "Agregar Usuario" ,  "CONTENT"=>$fragment];
            print Template()->show($dict);
        }
        function show($data) {
            $fragment = file_get_contents(STATIC_DIR . 'users/user/show.html', true);
            $dict = ["FULLNAME"=>$data['fullname'], "EMAIL"=>$data['email']];

            $html = Template($fragment)->render($dict);

            $dict =  ["TITLE" => "Usuario" ,"CONTENT"=>$html];
            print Template()->show($dict);
        }
    }
?>
