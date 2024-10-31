@include('head')
<div class="d-flex justify-content-around">
<h3>List of all the books in our Library</h3><br>
<a name="" id="" class="btn btn-primary m-auto" href="{{url('createBook')}}" role="button">Added more books</a>
<a name="" id="" class="btn btn-primary m-auto" href="{{"/login/page"}}" role="button">Back to admin dashboard</a>


</div>
<hr>
<div class="d-flex align-items-left justify-content-left">
<ul>
@if(Session::has('success'))

<div class="alert alert-success">

    {{ Session::get('success') }}

</div>


@foreach ($books as $book )
    
   
        <li> <label class="" style="font-size:18px">Book_Name:</label> 
        <a href="#" class="fw-bolder">{{$book->name}}</a><br>
        <label style="font-size:18px">Auhor Name:</label>
       <a href="#" class="fw-bolder">{{$book->auther_name}}</a><br>
       <label style="font-size:18px" >Detail:</label><br>
        <a href="#" class="fw-bolder">{{$book->Detail}}</a></li><br>
        <label style="font-size:18px" >Status:</label>
        <a href="#" class="fw-bolder">{{$book->status ? 'Booked' : 'Not Booked'}}</a>

</li><br>


      
       
        <a name="" id="" class="btn btn-primary m-auto" href="updateBookform/{{$book->id}}" role="button">Edit</a>
        <a name="" id="" class="btn btn-danger m-auto" href="BookDelete/{{$book->id}}" role="button">Delete</a>
    


        @endforeach
</ul>
  
</div>