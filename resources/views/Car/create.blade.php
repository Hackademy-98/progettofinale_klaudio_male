<x-layout title=" Create car">   
  
    <div class="container"> 
        <div class="row"> 
            <div class="col-12 my-4"> 
               <h1 class="text-center"> Add Car</h1> 
               </div> 
               @if(session()->has('success'))
                <div class="col-12 alert alert-success">
                <p>{{session("success")}}</p>    
                 
                </div>   
                
               @endif
               <div class="col-12">
                <form method="POST" action="{{ route('car.store')}} " enctype="multipart/form-data"> 

                     @csrf

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input name="title" type="text" class="form-control" id="title" value="{{old ('title')}}"> 
                      @error ('title')  
                       <p class="text-danger">{{$message}}</p>
                       @enderror
                    </div>
                    <div class="mb-3">
                      <label for="year" class="form-label">Year</label>
                      <input name="year" type="number" class="form-control" id="year" value="{{old ('year')}}"> 
                      @error ('year')  
                      <p class="text-danger">{{$message}}</p>
                       @enderror
                    </div>       
                    <div class="mb-3">
                      <label for="description" class="form-label">description</label>
                      <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{old ('description')}}</textarea>
                      @error ('description')  
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>  
                     
                    <div class="mb-3">
                      <label for="category" class="form-label">Brand</label> 
                      <select class="form-select" id="category" name="category">
                        <option selected>Select Brand</option> 
                         
                        @foreach ($categories as $category) 
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                        
                    </div>   
                       
                    <div class="row  my-4"> 
                       <div class="col-12">
                         <h5  class="text-center">Optionals</h3>
                       </div>
                     @foreach ($optionals as $optional)
                     <div class="col-6 col-md-3 col-lg-2 form-check">
                      <input class="form-check-input" type="checkbox" value="{{$optional->id}}" id="flexCheckDefault" name="optional[]">
                      <label class="form-check-label" for="flexCheckDefault">
                       {{$optional->name}}
                      </label>
                    </div> 
                     @endforeach
                      </div>

                    
                   


                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <input name ="price" type="number" class="form-control" id="price" value="{{old ('price')}}">
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