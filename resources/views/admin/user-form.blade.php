<div>
    <h1>user form</h1>
   <!-- @if($errors->any())
   @foreach($errors->all() as $error)
   <div style="color: red;">
    {{$error}}
   </div>
@endforeach
   @endif -->
    <form action="addUser" method="post">

        @csrf
        <!-- <div>
            <h5>Gender</h5>
            <input type="radio" name="gender" value="male"  id="male">
            <label for="male">Male</label>
            <input type="checkbox" name="gender" value="female"  id="female">
            <label for="female">female</label>
        </div>
           <div class="input-wrapper">
      <h5>City</h5>
      <select name="city" required>
        <option value="" disabled selected>-- Select your city --</option>
        <option value="Delhi">Delhi</option>
        <option value="Noida">Noida</option>
        <option value="Gurgaon">Gurgaon</option>
        <option value="Mumbai">Mumbai</option>
      </select> -->
    <!-- </div> -->
<!-- 
        <div>
            <h5>Age</h5>
            <input type="range" name="age" min="19" max="100">
        </div> -->




        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username" value="{{old('username')}}" class="{{$errors->first('username') ? 'input-error':''}}">
            
            <span style="color: red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user email" name="email" value="{{old('email')}}"  class="{{$errors->first('email') ? 'input-error':''}}">
                        <span style="color: red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user city" name="city" value="{{old('city')}}"  class="{{$errors->first('city') ? 'input-error':''}}">
                        <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div>
            <!-- <div>
            <h5>User Skill</h5>
                        <span style="color: red;">@error('skill'){{$message}}@enderror</span>
            <input type="checkbox" name="skill[]" value="php"  id="php">
            <label for="php">Php</label>
            <input type="checkbox" name="skill[]" value="Node"  id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="Java"  id="java">
            <label for="php">java</label>
        </div> -->
        <div class="input-wrapper" id="btn">
            <button>Add new user</button>
         </div>
    </form>
</div>


<style>
 


     input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
     }
     .input-wrapper{
          margin: 10px;

     }

     button {
         border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        cursor: pointer;
     }
</style>
