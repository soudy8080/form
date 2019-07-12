<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf" value="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>cure Log</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">					
        <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/main.css')}} ">
    </head>
    <body>

          <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                  <a href="{{route('welcome')}}"><img src="{{asset('frontend/img/logo.png')}} " alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="{{route('welcome')}}">Home</a></li>
                      		          				          
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->


        <!-- start banner Area -->
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
                                                  <form method="POST" action="{{URL::to('/client/project/store')}}" enctype="multipart/form-data">
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
                                                                      <input type="text" class="form-control" name="year" placeholder="Enter the graduate year">
                                                                  </div>
                                                              </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                             <div class="form-group">
                                                                <label class="bmd-label-floating">Project Name</label>
                                                                <input type="text" class="form-control" name="pname" placeholder="Enter Your Project Name" >
                                                             </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                       <div class="col-md-4">
                                                          <div class="form-group">
                                                              <label class="bmd-label-floating">Supervisor</label>
                                                              <input type="text" class="form-control" name="supname" placeholder="Enter Your Supervisor Name" >
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Name OF Team </label>
                                                                <input type="text" class="form-control" name="name1" placeholder="Enter Team Leader Name" >
                                                                <input type="text" class="form-control" name="name2" placeholder="Enter THe Socend Person">
                                                                <br>
                                                            </div>        
                                                        </div>
                                                      </div>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-group">
                                                              <label class="bmd-label-floating">Email</label>
                                                              <input type="email" class="form-control" name="email1" placeholder="Enter Team Leader Email" >
                                                              <input type="email" class="form-control" name="email2" placeholder="Enter THe Socend Person Email" >
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <label class="bmd-label-floating">Phone</label>
                                                             <input type="text" class="form-control" name="phone" placeholder="Enter Team Leader Phone" >
                                                             <input type="text" class="form-control" name="phone2" placeholder="Enter THe Socend Person Phone" > 
                                                         </div>
                                                     </div>
                                                   </div>
                                                    <div class="row">
                                                            <div class="col-md-8">
                                                                <label class="bmd-label-floating"> Descripe Your Project</label>
                                                                <input type="text" class="form-control" name="desc">
                                                            </div>
                                                    </div>
                                                    <a href="{{route('welcome')}}" class="btn btn-danger">Back</a>
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
        <!-- End banner Area -->

                        <script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
                        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}} " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                        <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}} "></script>			
                        <script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA')}} "></script>
                          <script src="{{asset('frontend/js/easing.min.js')}} "></script>			
                        <script src="{{asset('frontend/js/hoverIntent.js')}} "></script>
                        <script src="{{asset('frontend/js/superfish.min.js')}} "></script>	
                        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}} "></script>
                        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>	
                        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>			
                        <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
                        <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>			
                        <script src="{{asset('frontend/js/parallax.min.js')}}"></script>		
                        <script src="{{asset('frontend/js/mail-script.js')}}"></script>	
                        <script src="{{asset('frontend/js/main.js')}}"></script>        
                
                    </body>
                </html>
@extends('layouts.app')

@section('title','slider')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">    
@endpush




