<!-- <x-layout>
    <x-slot name="title">
      Home page
    </x-slot>
     <x-slot name="main">
      <div class="content">
    <h1 class="heading">Home Page</h1>
    <h2>Sub heading for about page</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
      Aperiam, quaerat. Lorem ipsum dolor sit amet consectetur 
      adipisicing elit. Quos, officia!
    </p>
  </div>
    </x-slot>
</x-layout> -->


 
 @extends('layout2')
 @section('title', 'this is home page')

  @section('main')
 <div class="main">
    <h1>User Home PAge</h1>
    <h3>Sub heading for home page</h3>
    <p>text for home pae</p>
 
 </div>

 @endsection