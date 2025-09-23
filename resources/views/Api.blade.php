<div>
    <h1>user data</h1>
    <!-- <ul>
        <li>
            <span>Name:</span>
            <span><b>{{$data->name}}</b></span>
        </li>
        <li>
            <span>User:</span>
            <span><b>{{$data->username}}</b></span>
        </li>
        <li>
            <span>Email:</span>
            <span><b>{{$data->email}}</b></span>
        </li>
        <li>
            <span>website:</span>
            <span><b>{{$data->website}}</b></span>
        </li>
        <li>
            <span>Phone:</span>
            <span><b>{{$data->phone}}</b></span>
        </li>
    </ul> -->



    <table>
        <tr>
            <td>name</td>
            <td>email</td>
            <td>password</td>
        </tr>
        @foreach($users as $user)
        <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
        @endforeach
    </table>
</div>