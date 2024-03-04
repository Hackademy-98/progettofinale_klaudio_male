<x-layout> 
    <div class="container">
         <div class="row">
             <div class="col-12 my-4"> 
                <h1 class="text-center">
                     {{$car->title}}
                </h1></div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{Storage::url($car->img)}}" alt="" class="img-fluid">
                </div>
                  
                <div class="col-12 col-md-6 d-flex flex-column justify-content-evenly">
                    <p>{{$car->description}}</p>
                     <p>{{$car->price}}</p>
                </div> 
         </div>
    </div>
</x-layout>