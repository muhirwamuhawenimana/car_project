@extends('layouts.app ')


@section('content')
     <div class="m-auto w-4/5 py-24">
        <div class="text-center">

            @foreach ($cars as $car )

            <div class="text-center">
                <h1 class="text-5xl uppercase bold">
                    Cars
                </h1>
            </div>

            <div class="float-rigth">

                <a 
                    class="border-b-2 pb-2 border-dotted italic text-green-500"
                    href="cars/{{ $car->id }}/edit">
                    Edit &rarr;
                </a>

            </div>

            <div class="pt-10">
                <a 
                    href="cars/create"
                    class="border-b-2 pb-2 border-dotted italic text-gray-500">
                    Add a new car &rarr;
                </a>
            </div>
        
   
        <div class="W-5/6 PY-18">
           <div class="m-auto">
               <span class="Uppercase text-red-500 font-bold text-xs italic">
                   Foundend: {{ $car ->foundend }}
               </span>
   
               <h2 class="text-gray-700 text-5xl">
                 {{ $car ->name }}
               </h2>
   
               <p class="text-lg text-gray-700">
                   
                {{ $car ->description }}
               </p>
   
               <hr class="mt-4 mb-8 py-6">
   
           </div>
                
            @endforeach


     </div>
    </div>

@endsection