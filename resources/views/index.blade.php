<h1>User Login</h1>
<form action="login"  method="POST">
    @csrf

    <input type="text" name="email"  placeholder="enter user id" /><br>
    <span style="color:red">@error("email"){{$message}}@enderror</span>
    <br><br>
    <input type="password" name="password" placeholder="enter user password" /><br>
    <span style="color:red">@error("password"){{$message}}@enderror</span>
    <br><br>

    <button type="submit"> Login</a> </button>

</form>

<button> <a href="/create">SignUp</a> </button>
