@include('head')
<div class="d-flex justify-content-around">
<h3>List of all the users who can assess to  our books in  Library</h3><br>
<a name="" id="" class="btn btn-primary m-auto" href="{{"/login/page"}}" role="button">Back to admin Dashboard</a>


</div>
<hr>
<div class="d-flex align-items-center justify-content-center" style="height: 250px;">
<ul><br><br><br><br><br><br><br><br>
@foreach($users as $user)
<li>
    <h2>{{ $user->name }}</h2>
    <h4>{{$user->email }}</h4>

    @if($user->books->isEmpty())
        <p>No books booked.</p>
    @else
        <ul>
            @foreach($user->books as $book)
                <li>{{ $book->name }}</li>
            @endforeach
        </ul>
    @endif
@endforeach
</li>
</div>