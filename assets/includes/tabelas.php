<?php
foreach ($data->locais as $local) {
    $localName = str_replace(' ', '_', $local->nome);
    
    echo'

        <div class="local '.$localName.' '.$local->ativo.'">
            <h1>'.$local->nome.' - '.$local->local.'</h1>            
            <p class=""><strong>Datas:</strong> '.$local->horarios->datas.'</p>
            <p class=""><strong>Dias de exibição:</strong> '.$local->horarios->diashorarios.'</p>
            
            <table>
                <tr>';

                    if (isset($local->tabela->dia1)) {
                        echo '<td class="first">' . $local->tabela->dia1->dia . '</td>';
                    }
                    if (isset($local->tabela->dia2)) {
                        echo '<td class="first">' . $local->tabela->dia2->dia . '</td>';
                    }
                    if (isset($local->tabela->dia3)) {
                        echo '<td class="first">' . $local->tabela->dia3->dia . '</td>';
                    }

                echo '</tr>

                <tr>';

                    if (isset($local->tabela->dia1)) {
                        echo '<td>' . $local->tabela->dia1->hora . '</td>';
                    }
                    if (isset($local->tabela->dia2)) {
                        echo '<td>' . $local->tabela->dia2->hora . '</td>';
                    }
                    if (isset($local->tabela->dia3)) {
                        echo '<td>' . $local->tabela->dia3->hora . '</td>';
                    }

                echo '</tr>
                
            </table>
        </div>
        
    ';
    
}
?>