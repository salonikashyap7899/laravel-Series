
<div>
    <h1>Listed Student</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Operation</td>
        </tr>
        @foreach($student as $students)
          <tr>
            <td>{{ $students->name }}</td>
            <td>{{ $students->email }}</td>
            <td>{{ $students->phone }}</td>
            <td>
                <a href="{{'delete/'.$students->id}}">Delete</a>
                <a href="{{'edit/'.$students->id}}">edit</a>
            </td>
          </tr>
        @endforeach
    </table>
</div>
