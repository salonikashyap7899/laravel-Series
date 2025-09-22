<div>

    <h1>all users list</h1>

   <table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>password</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
   </table>
    <!-- Let al  l your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
