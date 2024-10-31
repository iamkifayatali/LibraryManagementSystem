@include('head')
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a href="/login/page">
        <button
            class="nav-link active"
            id="home-tab"
            data-bs-toggle="tab"
            data-bs-target="#home"
            type="button"
            role="tab"
            aria-controls="home"
            aria-selected="true"
        >
            Home
        </button> </a>
    </li>
    <li class="nav-item" role="presentation">
        <button
            class="nav-link"
            id="profile-tab"
            data-bs-toggle="tab"
            data-bs-target="#profile"
            type="button"
            role="tab"
            aria-controls="profile"
            aria-selected="false"
        >
            profile
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button
            class="nav-link"
            id="messages-tab"
            data-bs-toggle="tab"
            data-bs-target="#messages"
            type="button"
            role="tab"
            aria-controls="messages"
            aria-selected="false"
        >
            Messages
        </button>
    </li>
</ul>

<!-- Tab panes -->
<div class="d-flex justify-content-center  overflow-hidden">
    

<form class="row g-3 center" action="{{url('/updateBook/' . $book->id)}}">
        @csrf
        
 

  <label for="name" class="col-md-4 control-label" name="name">Book Name*</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"   value="{{ $book->name }}">
                            @error('name')
                        <div class="text-danger  text-center">{{ $message }}</div>
                         @enderror
                        </div>
                        

    <label for="auther_name" class="col-md-4 control-label" name="auther_name">Author Name*</label>

                        <div class="col-md-6">
                            <input id="auther_name" type="text" class="form-control" name="auther_name"  value="{{ $book->auther_name }}">
                            @error('auther_name')
                        <div class="text-danger  text-center">{{ $message }}</div>
                         @enderror
                        </div>
                        
    <label for="Detail" class="col-md-4 control-label" name="Detail">Detail*</label>

                        <div class="col-md-6">
                            <input id="Detail" type="text" class="form-control" name="Detail"  value="{{ $book->Detail }}" >
                            @error('Detail')
                        <div class="text-danger  text-center">{{ $message }}</div>
                         @enderror
                        </div>
                      
    <label for="status" class="col-md-4 control-label switch" name="status">Status</label>
                        <div class="col-md-6">
                        <input type="hidden" name="status" value="0">
                        <input type="checkbox" name="status" value="1" >
                        </div>
    <label for="student" class="col-md-4 control-label switch" name="status">Select the student how book this book:</label>

                <div class="col-md-8 text-center ">
                    <select name="user_id" id="user_id">    
                  @foreach ($users as $user)   
                  
                   <option value="{{$user->id}}" id="user_id">{{$user->name}}</option>
                    @endforeach
                    </select>
                    </div>
                   
<button type="submit" class="btn btn-primary">Save</button>
</form>
</div>