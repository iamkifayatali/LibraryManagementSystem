@include('head')

<h1>welocme to admin dashboard</h1>


<a href="{{url('books')}}"> <button style="color:Blue">books</button></a>

<a href="{{url('users')}}"> <button style="color:Green">Users</button></a>

<a href="{{url('logout')}}"> <button style="color:red">Logout</button></a>