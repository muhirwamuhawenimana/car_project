@extends('layouts.app ')


@section('content')
     <div class="m-outo w4/8 py-24">
         <div class="text-center">
             <h1 class="text-5xl uppercase bold">
                Update the car
             </h1>      
        </div>    
     </div>

     <div class="flex justify-center pt-20">
         <form action="/cars" method="post">
            @csrf
             <div class="block">
                 <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="name"
                    placeholder="Bland name...">

                    <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="founded"
                    placeholder="Founded">

                    <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="discription"
                    placeholder="Discription">

                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80">
                        Submit
                    </button>

             </div>
         </form>
     </div>
@endsection