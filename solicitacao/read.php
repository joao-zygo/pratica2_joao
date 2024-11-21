<?php
$status = ["Pendente", "Em andamento", "Finalizado"];
$criticidade = ["Baixa", "Média", "Alta"];
?>

<table>
    <tr>
        <th>ID</th>
        <th>Clinete ID</th>
        <th>Descrição</th>
        <th>Urgencia</th>
        <th>Status</th>
        <th>Data de abertura</th>
        <th>Colaborador Responsavel ID</th>
    </tr>
    <?php foreach ($solicitacaos as $solicitacao): ?>
    <tr>
        <td><?= $solicitacao["id"] ?></td>
        <td><?= $solicitacao["id_cliente"] ?></td>
        <td><?= $solicitacao["descricao"] ?></td>
        <td><?= $urgencia[$solicitacao["urgencia"] - 1] ?></td>
        <td><?= $status[$solicitacao["status"] - 1] ?></td>
        <td><?= $solicitacao["data_abertura"] ?></td>
        <td><?= $solicitacao["id_colaborador"] ?></td>
        <td>
            <button hx-delete="solicitacaos.php?id=<?= $solicitacao["id"] ?>" hx-target="table" hx-swap="outerHTML">Deletar</button>
        </td>
    </tr>
    <?php endforeach ?>
</table>