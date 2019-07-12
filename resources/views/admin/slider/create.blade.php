@extends('layouts.app')

@section('title','slider')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">    
@endpush

@section('content')
<section class="banner-area relative" id="home">	
  <div class="overlay overlay-bg"></div>
  <div class="container">	
      <section class="post-area section-gap">
          <div class="container">
              <div class="row justify-content-center d-flex">
                  <div class="col-lg-8 post-list">
                          
                          <div class="content">
                                 <div class="container-fluid">
                                   <div class="row">
                                     <div class="col-md-12">
                                       <div class="card">
                                         <div class="card-header card-header-primary">
                                           <h4 class="card-title ">Registeration Gradaution Project Form</h4> 
                                         </div>
                                         <div class="card-body table-responsive">
                                             <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
                                                 @csrf
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                         <div class="form-group">
                                                             <label class="bmd-label-floating">Department </label>
                                                             <select type="text" class="form-control" name="depart" >
                                                                  <option value="0">...</option>
                                                                  <option value="is">IS</option>
                                                                  <option value="cs">CS</option>
                                                                  <option value="it ">IT</option>
                                                              </select>
                                                             <br>
                                                         </div>        
                                                     </div>
                                                 </div>
                                                 <div class="row">
                                                         <div class="col-md-4">
                                                             <div class="form-group">
                                                                 <label class="bmd-label-floating">Graduation year</label>
                                                                 <input type="text" class="form-control" name="year" placeholder="Enter the graduate year"required ="required">
                                                              </div>
                                                         </div>
                                                 </div>
                                                 <div class="row">
                                                   <div class="col-md-4">
                                                       <div class="form-group">
                                                           <label class="bmd-label-floating">Project Name</label>
                                                           <input type="text" class="form-control" name="pname" placeholder="Enter Your Project Name" required ="required">
                                                          </div>
                                                   </div>
                                                 </div>
                                                 <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label class="bmd-label-floating">Supervisor</label>
                                                          <input type="text" class="form-control" name="supname" placeholder="Enter Your Supervisor Name" required ="required">
                                                         </div>
                                                  </div>
                                                </div>
                                                 <div class="row">
                                                   <div class="col-md-5">
                                                       <div class="form-group">
                                                           <label class="bmd-label-floating">Name OF Team </label>
                                                           <input type="text" class="form-control" name="name1" placeholder="Enter Team Leader Name" required ="required">
                                                           <input type="text" class="form-control" name="name2" placeholder="Enter THe Socend Person"required ="required">
                                                           <br>
                                                       </div>        
                                                   </div>
                                               </div>
                                                 <div class="row">
                                                   <div class="col-md-6">
                                                       <div class="form-group">
                                                           <label class="bmd-label-floating">Email</label>
                                                           <input type="email" class="form-control" name="email1" placeholder="Enter Team Leader Email" required ="required">
                                                           <input type="email" class="form-control" name="email2" placeholder="Enter THe Socend Person Email" required ="required" >
                                                       </div>
                                                   </div>
                                                 </div>
                                                 <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label class="bmd-label-floating">Phone</label>
                                                          <input type="text" class="form-control" name="phone" placeholder="Enter Team Leader Phone" required ="required">
                                                          <input type="text" class="form-control" name="phone2" placeholder="Enter THe Socend Person Phone" required ="required"> 
                                                      </div>
                                                  </div>
                                                </div>
                                                 <div class="row">
                                                         <div class="col-md-8">
                                                             <label class="bmd-label-floating"> Descripe Your Project</label>
                                                             <input type="text" class="form-control" name="desc">
                                                         </div>
                                                 </div>
                                                 <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                                                 <button type="submit" class="btn btn-primary">Save</button>
                                             </form>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                          </div>
                       
                         
                                  @push('scripts')
                                  
                                  @endpush
                         
                      
                           </div>
      
              </div>
          </div>	
      </section>
  </div>
</section>
@endsection

@push('scripts')

@endpush



