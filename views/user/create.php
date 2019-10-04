<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>

<form action="?controller=user&method=store" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <br>
    <label for="rol">Select role &nbsp</label>
    <select name="role" id="rol">
        <option value="1">Administrator</option>
        <option value="2">Teacher</option>
        <option value="3">Student</option>
    </select>
    <br><br>
    <input class="btn btn-green" type="submit" value="Register">
</form>