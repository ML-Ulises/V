
<?php
    $programminglanguages = [
      1=>"ActionScript",
      2=>"AppleScript",
      3=>"Asp",
      4=>"BASIC",
      5=>"C",
      6=>"C ++",
      7=>"Clojure",
      8=>"COBOL",
      9=>"ColdFusion",
      10=>"Erlang",
      11=>"Fortran",
      12=>"Maravilloso",
      13=>"Haskell",
      14=>"Java",
      15=>"JavaScript",
      16=>"Lisp",
      17=>"Perl",
      18=>"PHP",
      19=>"Python",
      19=>"Ruby",
      20=>"Scala",
      21=>"Esquema"
    ];


    $dataToSearch = $_GET['search'];

    $results = array_filter($programminglanguages, function($it) use ($dataToSearch) {
        return (str_starts_with($it,$dataToSearch));      
    }, ARRAY_FILTER_USE_BOTH);

    header("Content-Type: application/json");
    echo json_encode($results);
?>