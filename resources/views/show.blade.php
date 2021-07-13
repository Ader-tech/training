@extends('Layouts.master')

@section('title', 'Ader-Tech | Show-Post ')

@section('content')
  
  <div style="margin-top: 100px;" >
    
    <div class="container">

      <div class="row mb-4">

        {{-- Start of First Column --}}
       <div class="col-md-8 mb-3">
         <ul class="list-group">
           <li class="list-group-item">
             <div class="row">

                 <h4 class="text-center">
                 Lorem ipsum dolor sit amet consectetur adipiscing elit
                 </h4>
                 <hr> 
                 <img src="{{asset('post.jpg')}}"  width="500" height="300"><br>

                 <small>Created By- Ronke</small>
                 <hr>
                 <p> 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                 </p>
              
             </div>
           </li>

         </ul>
       </div>
       {{-- End of First Column --}}


       {{-- Start of Second Column --}}
       <div class="col-md-4 mb-5">
         <div class="card">
           <div class="card-header">
             <h5>Trending Stories</h5>
           </div>

           <div class="card-body">
             <ul class="list-group">
                <li class="list-group-item">
                  <a href="" style="text-decoration: none;" class="text-dark">
                    Lorem ipsum dolor sit amet consectetur
                  </a>
               </li>
                <li class="list-group-item">
                  <a href="" style="text-decoration: none;" class="text-dark">
                    Lorem ipsum dolor sit amet consectetur
                  </a>
               </li>
                <li class="list-group-item">
                  <a href="" style="text-decoration: none;" class="text-dark">
                    Lorem ipsum dolor sit amet consectetur
                  </a>
               </li>
             </ul>
           </div>
         </div>
       </div>
       {{-- End of Second Column --}}

      </div>
    </div>

  </div>
@endsection