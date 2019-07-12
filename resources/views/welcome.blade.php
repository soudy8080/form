<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-12">
                        <h1 class="text-white">
                            Graduation <span>Projects</span> Here !				
                        </h1>
                        <form action="#" class="serach-form-area">
                                <div class="row justify-content-center form-wrap">
                                    <div class="col-lg-9 form-cols">
                                        <a href="{{ route('post.create') }}" class="btn btn-primary">Add New Post</a>
                                    </div>                            
                                </div>
                            </form>	
                    </div>											
                </div>
            </div>
        </section>
        <!-- End banner Area -->
 <!-- Start post Area -->
 <section class="post-area section-gap">
    @extends('layouts.app')

@section('title','slider')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">    
@endpush

 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Project</h4> 
                </div>
                <div class="card-body table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                      <thead class=" text-primary">
                          <th>ID</th>
                          <th>Department</th>
                          <th>Graduation year</th>
                          <th>Project Name</th>
                          <th>The Supervisor</th>
                          <th>Team Leader</th>
                          <th>Socend person</th>
                          <th>Team Leader Email</th>
                          <th>Socend person Email</th>
                          <th>Team leader Phone</th>
                          <th>Socend person Phone</th>
                          <th>Descripe Project</th>
                          <th>Created At</th>
                          <th>Updated At</th>

                      </thead>
                      <tbody>
                        @foreach ($sliders as $post)
                          <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->Department}}</td>
                          <td>{{$post->Year}}</td>
                          <td>{{$post->Pname}}</td>
                          <td>{{$post->Supervisor}}</td>
                          <td>{{$post->Leader}}</td>
                          <td>{{$post->Socend_p}}</td>
                          <td>{{$post->L_email}}</td>
                          <td>{{$post->Socend_E}}</td>
                          <td>{{$post->L_phone}}</td>
                          <td>{{$post->Socend_ph}}</td>
                          <td>{{$post->Description}}</td>
                          <td>{{$post->created_at}}</td>
                          <td>{{$post->updated_at}}</td>
                          </tr>
                            
                        @endforeach
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready(function() {
    $('#table').DataTable();
    } );
    </script> 
@endpush
<!-- End post Area -->
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