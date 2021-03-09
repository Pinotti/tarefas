<?php

include "config.php";
include "banco.php";

$anexo = buscar_anexo($mysqli, $_GET['id']);
remover_anexo($mysqli, $anexo['id']);
unlink('anexos/' . $anexo['arquivo']);

header('Location: tarefa.php?id=' . $anexo['tarefa_id']);