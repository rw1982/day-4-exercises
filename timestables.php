<?php
 
for ($i=1; $i<=12; $i++) {
        print '<table style="border: 2px solid brown;">';
        print '<th>' . $i . ' Times Table</th>';
        for ($j=1; $j<=12; $j++) {
                print '<tr>';
                print '<td style="border: 2px solid gray;">' . $i . ' X ' . $j . '</td>';
                print '<td style="border: 2px solid tan;">' . $i * $j . '</td>';
                print '</tr>';                 
        }
        print '</table>';
print '<br />';
}
 
?>
