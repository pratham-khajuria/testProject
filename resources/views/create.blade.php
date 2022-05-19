<div>

    <form  action="save" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name"><br>
        <span style="color:red">@error("name"){{$message}}@enderror</span>
        <br>
        <br>
        <input type="email" name="email" placeholder="E-mail"><br>
        <span style="color:red">@error("email"){{$message}}@enderror</span>
        <br>
        <br>
        <input type="number" name="mobile" placeholder="Mobile no."><br>
        <span style="color:red">@error("mobile"){{$message}}@enderror</span>
        <br>
        <br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="password" name="password_c" placeholder="Repeat Password"><br><br>

        <input type="radio" name="role" value="admin">Admin<br>
        <input type="radio" name="role" value="client">Client<br>
        <br>

        <input type="submit" name="store" value="Save">

    </form>
</div>
