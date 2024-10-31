@include('head')

<style>
    /* Style the button that is used to open and close the collapsible content */
    .collapsible-custom {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 50%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active,
    .collapsible-custom:hover {
        background-color: #ccc;
    }

    /* Style the collapsible content. Note: hidden by default */
    .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
</style>

<!-- <button type="button" class="collapsible-custom">Open Collapsible</button> -->

<div class="text-center fw-bolder">
    @foreach ($books as $book)
<form class="center" action="{{url('/userUpdateBook/' . $book->id)}}">

            <button type="button" class="collapsible-custom mb-2">{{$book->name}}</button>
            
            <div class="content text-center">
               
                <label style="font-size:18px">Auhor Name:</label>
                <a href="#" class="fw-bolder">{{$book->auther_name}}</a><br>
                <label style="font-size:18px">Detail:</label><br>
                <a href="#" class="fw-bolder">{{$book->Detail}}</a><br>
                <label style="font-size:18px">Status:</label>
                <a href="#" class="fw-bolder">{{$book->status ? 'Booked' : 'Not Booked'}}</a><br>
                <input type="hidden" name="status" value="0">
                <input type="checkbox" name="status" value="1" >

                <button type="submit" class="btn text-center">Want this book</button>

            </div>


</form>
    @endforeach
    </div>
    


    <script>
        var coll = document.getElementsByClassName("collapsible-custom");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>