@extends('Layouts.master')

@section('title', 'Ader-Tech | Home ')

@section('content')
  
  <div style="margin-top: 100px;" >
    
    <div class="container">

      <div class="row mb-4">

        {{-- Start of First Column --}}
       <div class="col-md-8 mb-3">
         <ul class="list-group">
           <li class="list-group-item">
             <div class="row">
               <div class="col-md-3">
                 <img src="{{asset('post.jpg')}}" class="img-fluid" width="150"><br>
                 <small>Created By- Ronke</small>
               </div>
               <div class="col-md-9">

                 <h5>
                 Lorem ipsum dolor sit amet consectetur adipiscing elit odododododododoififififififififi
                 </h5>

                 <p> 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....<br><a href="" class="text-info">Continue reading</a>
                 </p>
               </div>
             </div>
           </li>


            <li class="list-group-item">
             <div class="row">
               <div class="col-md-3">
                 <img src="{{asset('post.jpg')}}" class="img-fluid" width="150"><br>
                 <small>Created By- Ronke</small>
               </div>
               <div class="col-md-9">

                 <h5>
                 Lorem ipsum dolor sit amet consectetur adipiscing elit
                 </h5>

                 <p> 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....<br><a href="" class="text-info">Continue reading</a>
                 </p>
               </div>
             </div>
           </li>



            <li class="list-group-item">
             <div class="row">
               <div class="col-md-3">
                 <img src="{{asset('post.jpg')}}" class="img-fluid" width="150"><br>
                 <small>Created By- Ronke</small>
               </div>
               <div class="col-md-9">

                 <h5>
                 Lorem ipsum dolor sit amet consectetur adipiscing elit
                 </h5>

                 <p> 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....<a href="" class="text-info"><br>Continue reading</a>
                 </p>
               </div>
             </div>
           </li>


            <li class="list-group-item">
             <div class="row">
               <div class="col-md-3">
                 <img src="{{asset('post.jpg')}}" class="img-fluid" width="150"><br>
                 <small>Created By- Ronke</small>
               </div>
               <div class="col-md-9">

                 <h5>
                 Lorem ipsum dolor sit amet consectetur adipiscing elits
                 </h5>

                 <p> 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....<br><a href="" class="text-info">Continue reading</a>
                 </p>
               </div>
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