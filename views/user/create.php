<form class="form w-60 mx-auto" action="?controller=user&method=store" method="POST">
    <legend>Crear usuario</legend>
    <label for="name">Name</label>
    <input class="form-control mb-1" type="text" name="name" id="name" required>
    <br>
    <label for="email">Email</label>
    <input class="form-control mb-1" type="email" name="email" id="email" required>
    <br>
    <label for="password">Password</label>
    <input class="form-control mb-1" type="password" name="password" id="password" required>
    <br>
    <label for="rol">Select role &nbsp</label>
    <select class="form-control mb-1" name="role" id="rol">
        <option value="1">Administrator</option>
        <option value="2">Teacher</option>
        <option value="3">Student</option>
    </select>
    <br><br>
    <input class="btn btn-green w-100" type="submit" value="Register">
</form>