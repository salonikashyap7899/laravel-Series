<div>
    <h1>All students list</h1>
     <table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Batch</td>
    </tr>
    @foreach($data as $stdData)
    <tr>
        <td>{{$stdData->name}}</td>
        <td>{{$stdData->email}}</td>
        <td>{{$stdData->batch}}</td>
    </tr>
    @endforeach
   </table>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
