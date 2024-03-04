<x-layout> 
    <div class="container">
         <div class="row"> 
            <div class="col-12 my-4">
                 <h1 class="text-center">Cars</h1>
            </div>    
             
            @if(session()->has('success'))
              
            <div class="col-12 alert alert-success"> 
            <p class="m-0">{{session('success')}}</p>
            </div> 

            @endif
             @foreach($cars as $car)
            <div class="col-3 mt-3"> 
                <div class="card">
                    <img src="{{Storage::url($car->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$car->title}}</h5>
                  
                      <p class="card-text">{{$car->price}}</p>  
                       
                      <p class="text-end">{{$car->category->name}}</p> 
                       
                       
                      <div class="my-2"> 
                        @foreach ($car->optionals as $optional)  
                          <a href="">{{$optional->name}}</a>
                        @endforeach
                      </div>
                    
                       <div class="d-flex justify-content-around"> 
                        <a href="{{route ('car.show', compact('car')) }}" class="btn btn-primary">Show more</a>
                        <a href="{{route('car.edit', compact('car'))}}" class="btn btn-warning">Edit</a> 
                        <form action="{{route('car.destroy',compact('car'))}}" method="post">
                         
                         @csrf
                        @method('delete') 
                        <button type="submit" class="btn btn-danger">Delete</button>
                            
                        </form>
                       </div>
                     
                    </div>
                  </div>
            </div> 
            @endforeach
         </div>
    </div>
</x-layout>