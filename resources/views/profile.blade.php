<div>
    <h1>profile page</h1>
    @if(session('user'))
    <h1>welcome , {{session('user')}} </h1>
    <h1>no user found in seesion</h1>
    @endif

    <a href="Logout">Logout</a><a href="login">login</a>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
