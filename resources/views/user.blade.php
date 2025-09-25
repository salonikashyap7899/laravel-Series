<!-- <div>
    <h1>user form </h1>
    <form action="/user" method="post">
        <input type="hidden" name="_method" value="DELETE">
       @csrf 
    <input type="text" name='name' placeholder="enter name">
    <br>
    <br>
    <input type="password" name='password' placeholder="enter password">

    <br>
    <br>
    <button>Sumbit</button>
</form>
</div> -->





<div>
    @if(session('message'))
    <span class="message">{{session('message')}}</span>
    @endif
    @if(session('name'))
    <span class="message">{{session('name')}}</span>
    @endif
    {{session()->keep(['name')}}
    {{session()->reflash()}}
    <h1> Add New User</h1>
     <form action="/add" method="post">
       @csrf 
    <input type="text" name='name' placeholder="enter name">
    <br>
    <br>
    <input type="text" name='email' placeholder="enter email">
    <br>
    <br>
    <input type="password" name='password' placeholder="enter password">

    <br>
    <br>
    <button> Add New User</button>
</form>
</div>
<style>
    .message{
        background-color: lightgreen;
        border-radius: 2px;
        padding: 2px 20px;
        margin-bottom: 10px;
    }
</style>

