<h1>Users Login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id">
    <input type="password" name="password" placeholder="enter user password">
    <button type="submit">Login</button>
</form>