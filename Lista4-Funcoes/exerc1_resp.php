<?php
function validarData($data) {
 
    list($ano, $mes, $dia) = explode('-', $data);

    return checkdate($mes, $dia, $ano);
}
?>