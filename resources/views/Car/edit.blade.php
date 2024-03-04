<x-layout title=" Create car"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-12 my-4"> 
               <h1 class="text-center">Aggiorna Auto</h1> 
               </div> 
               @if(session()->has('success'))
                <div class="col-12 alert alert-success">
                <p>{{session("success")}}</p>    
                 
                </div>   
                
               @endif
               <div class="col-12">
                <form method="POST" action="{{ route('car.update' , compact('car'))}} " enctype="multipart/form-data"> 

                     @csrf
                     @method('put')

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input name="title" type="text" class="form-control" id="title" value="{{$car->title}}"> 
                      @error ('title')  
                       <p class="text-danger">{{$message}}</p>
                       @enderror
                    </div>
                    <div class="mb-3">
                      <label for="year" class="form-label">Year</label>
                      <input name="year" type="number" class="form-control" id="year" value="{{$car->year}}"> 
                      @error ('year')  
                      <p class="text-danger">{{$message}}</p>
                       @enderror
                    </div>       
                    <div class="mb-3">
                      <label for="description" class="form-label">description</label>
                      <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$car->description}}</textarea>
                      @error ('description')  
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div> 
                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <input name ="price" type="number" class="form-control" id="price" value="{{$car->price}}">
                      @error ('price')  
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div> 
                    <div class="mb-3"> 
                      <input class="form-control"  type="file" name="img"> 
                      @error ('img')  
                      <p class="text-danger">{{$message}}</p>
                       @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>