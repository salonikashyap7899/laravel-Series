
<div>
    <h1>Listed Student</h1>
    <form action="search" method="get">
        <input type="text" name="search"  placeholder="Search with name " value="{{@$search}}">
        <button>Search</button>
    </form>
    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>
    <table border="1">
        <tr>
            <td>Section</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Operation</td>
        </tr>
        @foreach($student as $students)
          <tr>
            <td><input type="checkbox" name="ids[]" value="{{$students->id}}" ></td>
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
</form>
<br>
<br>
    {{$student->links()}}
</div>

<style>
    .w-5.h-3{
        width: 20px;
    }
</style>
