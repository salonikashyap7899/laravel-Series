<!-- @include('common.header') -->

<x-msg-banner msg="user login successffulyy" class="success"/>
<x-msg-banner msg="user sign successffulyy" class="success"/>
<br/>
<br/>
<br/>
<br/>

<x-msg-banner msg="password not correct please try again latter" class="error"/>
<x-msg-banner msg="password not correct please try again latter" class="warning"/>


<h1>home page</h1>

<style>
    .success {
        background-color:blue;
        color: white;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .error {
        background-color: red;
        color: white;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .warning {
        background-color: skyblue;
        color: white;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>

<!-- @include('common.inner', ['page'=> "this is home page"]) -->
