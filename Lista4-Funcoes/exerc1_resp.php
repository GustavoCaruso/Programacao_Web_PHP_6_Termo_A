<?php
function validarData($data) {
    // Divida a data em ano, mês e dia
    list($ano, $mes, $dia) = explode('-', $data);

    // Verifique se a data é válida usando a função checkdate
    return checkdate($mes, $dia, $ano);
}
?>