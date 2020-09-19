<form class="form w-60 mx-auto" action="?controller=user&method=update" method="POST">
    <legend>Crear usuario</legend>
    <input class="form-control" type="hidden" name="id" value="<?= $user->id ?>">
    <label for="name">Name</label>
    <input class="form-control mb-1" type="text" name="name" id="name" required value="<?= $user->name ?>">
    <br>
    <label for="email">Email</label>
    <input class="form-control mb-1" type="email" name="email" id="email" required value="<?= $user->email ?>">
    <br>
    <input class="btn btn-green w-100" type="submit" value="Update">
</form>