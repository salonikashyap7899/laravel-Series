<div>
    <h1>user form </h1>
    <form action="/user" method="post">
        <input type="hidden" name="_method" value="DELETE">
       @csrf 
    <input type="text" name='user' placeholder="enter name">
    <br>
    <br>
    <br>
    <input type="password" name='password' placeholder="enter password">
      <br>
    <br>
    <br>
    <button>Sumbit</button>
</form>

    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
