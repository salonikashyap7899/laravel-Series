<!-- <x-layout>
    <x-slot name="title">Login Page</x-slot>
   <x-slot name="main">
     <h1 id="heading" class="heading">User login</h1>
    <input type="text" placeholder="enter name">
    <br>
    <br>
    <input type="text" placeholder="enter pass">
    <br>
    <br>
     <button onclick="changeColur()">Login</button>
   </x-slot>
</x-layout>
 -->


 @extends('layout2')
 @section('title', 'this is login page')

 @section('main')
 <div  class="main">
    <h1>Login PAge</h1>
    <form action="">
        <input type="text" placeholder="enter name">
        <br>
        <br>
        <input type="text" placeholder="enter pass">
        <br>
        <br>
        <button>Login</button>
    </form>
 </div>

 @endsection
