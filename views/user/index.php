<div class="d-flex">
    <h1>Lista de usuarios</h1>
    <a class="btn btn-secondary ml-auto" href="?controller=admin&method=createUser">Crear</a>
</div>
<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>Role</th>
        <th>Options</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->nameRole ?></td>
            <td width="200" class="table__options">
                <a href="?controller=admin&method=editUser&id=<?= $user->id ?>">
                    <button class="btn btn-green">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                    <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>