<h1>Lista de usuarios</h1>

<a style="border: 2px solid #999999; border-radius: 5px; padding: 10px" href="?controller=user&method=create">Crear</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>Role</th>
        <th>Options</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->nameRole ?></td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                    <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

