<div>
    <h1>Dsiplay imges</h1>
   @foreach($img as imgs)
   <img style="width: 200px" src="{{url('storage/'.$imgs->path)}}" alt="">
   @endforeach
   <a href="/imge" >Upload</a>
</div>
