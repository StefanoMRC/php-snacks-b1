<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$alunni=[
   ["nome"=> "Fabio",
    "cognome"=>"Pipolo",
    "voti"=>[
         2,10,6,8,3
        ]
    ],
    ["nome"=> "Giorgio",
    "cognome"=>"Pinco",
    "voti"=> [
         6,10,3,8,5
        ]
    ],
    ["nome"=> "Dino",
    "cognome"=>"Lampa",
    "voti"=>[
         10,10,6,8,9
        ]
    ],
    ["nome"=> "Dina",
    "cognome"=>"Lampa",
    "voti"=> [
         4,2,6,8,3
        ]
    ]
    ];
// var_dump($alunni);
    for ($i=0; $i < count($alunni); $i++) { 
        echo $alunni[$i]['nome'].$alunni[$i]['cognome'];
        
        echo "<p>"."Media Voti".(array_sum($alunni[$i]['voti'])/5)."</p>";
        
    }
    
     
?>