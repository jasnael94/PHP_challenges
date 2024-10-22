<?php
$movies=[
    "Treasure Island"=>["Gemma Jones","Arthur Darvill","Patsy Ferran"],
    "Kidnapped"=>["Michael Caine","Lawrence Douglas","Jack Hawkins"],
    "The Wrong Box"=>["John Mills","Michael Caine","Ralph Richardson"] ];



foreach ($movies as $name => $actors ){	
echo "Dans le film "." ". "\"$name \"," ." "."les principaux acteurs sont : " . "\n" ;
foreach ($actors as $actor) echo "-$actor"."\n";
echo "\n";
}

 ?>