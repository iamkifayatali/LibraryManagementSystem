<?php

namespace App\Http\Controllers;
use App\Http\Requests\BookFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function books()
    {
        $books=Book::all();
      
        
        return view('all_books')->with ('books', $books); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Create()
    {    $book = new Book();
        return view('create_books')->with('book', $book);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeBook(BookFormRequest $request)
    {
        $book = new Book();
        $book->name =$request['name'];
        $book->auther_name =$request['auther_name'];
        $book->Detail=$request['Detail'];
        $book->status=$request['status'];
       
        $book->user_id=auth::user()->id;
        $book->save();
        return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users = User::where('role_id', '=', 2)->get();
         $book = Book::find($id);
        return view('update_book', compact('book' , 'users'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateBook(BookFormRequest $request, $id)
    { 
        $book = Book::find(id:  $id);
        if(!$book) {
            return redirect('books')->with('error' , "no book found");
        }
        $book->name = $request->name;
        $book->auther_name = $request->auther_name;
        $book->Detail = $request->Detail;
        $book->status = $request->status;
        $book->user_id=$request->user_id;
    
        $book->update();
        return redirect()->route('books');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function BookDelete($id)
    {
       
        $book = Book::find($id);
        $book->delete();
 
        return redirect()->route('books');
    }

    public function Userbook()
    {
    $books=Book::all();
      
        
        return view('User_books')->with ('books', $books); 
    }


    public function userUpdateBook(request $request, $id)
    { 
        $book = Book::find( $id);
        $book->status = $request->status;
      
    
        $book->update();
        return redirect()->route('User_books');
        
    }
}
