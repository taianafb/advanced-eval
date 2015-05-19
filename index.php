<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>TAIANA FARE-BREDIN DC MASTER</title>
        <meta name="description" content="Evaluation Dev Advanced">
    </head>
    
    <body>
        <h1>EVALUATION DEV ADVANCED</h1>
        <h2>Taiana Fare-Bredin</h2>

        
        <table>
           <tr>
               <th>Numéro d'identifiant unique</th>
               <th>Poids maximum</th>
               <th>Poids réel</th>
               <th>Type de contenu</th>
           </tr>
        
        
            <?php

                $container = array (
                    1 =>  array (
                    'poidsmax' => 8,
                    'poidsreel' => 5,
                    'type' => 'plastique',
                    ),

                    2 =>  array (
                    'poidsmax' => 7,
                    'poidsreel' => 8,
                    'type' => 'aluminium',
                    ),

                    3 =>  array (
                    'poidsmax' => 8,
                    'poidsreel' => 3,
                    'type' => 'verre',
                    ),

                    4 =>  array (
                    'poidsmax' => 7,
                    'poidsreel' => 7,
                    'type' => 'carton',
                    ),

                    5 =>  array (
                    'poidsmax' => 8,
                    'poidsreel' => 5,
                    'type' => 'organique',
                    ),

                    6 =>  array (
                    'poidsmax' => 7,
                    'poidsreel' => 6,
                    'type' => 'organique',
                    ),    
                ); 

                // Afficher mon contenu php
                foreach($container as $cle => $element) {
                    echo '
                    <tr>
                               <td>' . $cle . '</td>
                               <td>' . $element['poidsmax'] . '</td>
                               <td>' . $element['poidsreel'] . '</td>
                               <td>' . $element['type'] . '</td>
                    </tr>';
                }

            ?>
        </table>
        
            <?php /*
            // Afficher en rouge le(s) container(s) dépassant leur poids maximum
                if ($element['poidsreel'] > $element['poidsmax']) {
                    echo "<style='color:red'>";
                    }

            // Afficher le pourcentage
                $pourcentage = ($element['poidsreel'] x 100) / $element['poidsmax']
            */ ?>
    </body>
</html>