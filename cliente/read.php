<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?= $cliente["id"] ?></td>
        <td><?= $cliente["nome"] ?></td>
        <td><?= $cliente["cpf"] ?></td>
        <td><?= $cliente["email"] ?></td>
        <td><?= $cliente["telefone"] ?></td>
        <td>
            <button hx-delete="cliente.php?id=<?= $cliente["id"] ?>" hx-target="table" hx-swap="outerHTML">Deletar</button>
        </td>
    </tr>
    <?php endforeach ?>
</table>