<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Movie Review</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    



    <!-- Loading main css file -->
    <link href="scss/style.css" rel="stylesheet">

</head>


<body>

 
    <div id="site-content">
        <header class="page-header">
            <div>
                <div class="logo">
                    <img src="{{URL('images/logo.png')}}" alt="" class="logo">
                    <h1 class="site-title">Company Name</h1>    
                </div>
            </div>
            <div class="user">
               <a href="/login"><i class="fas fa-user-shield"></i></a>
               <h6>Click to SignIn OR Register</h6>
            </div>
        </header>
        
        <!-- add movie form -->
        @if($msg = Session::get('Success'))

        @include('layouts/form')
        @yield('form')

        @endif
    
        <div class="add-movie">
            <li>
                <div class="outer">
                <span class="inner"></span>
                <i class="fas fa-plus"></i>
                </div>
            </li>
        </div>


        <main class="main-content">
            <div class="container page">
                <h2 class="title">Movie Theater</h2>
                
                
                <!--Fetching Movies From DataBase -->
                @if($records->isNotEmpty())
                    @for($i=0; $i<count($records); $i+=4)
                        <div class="row">
                            
                        @for($j=$i; $j<count($records) && $j<$i+4; $j++)
                            
                            <div class=" col-md-3 con-tooltip top">
                                @if($msg = Session::get('Success'))
                                <form action="/delete-movie" method="POST">
                                @csrf
                                    <input name="movie_title" value="{{$records[$j]->movie_title}}" style="display: none;"/>
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                @endif
                                <!-- Top tooltip-->
                                
                                    <div class="tooltip ">
                                        <strong>Description</strong><span>{{$records[$j]->rating}}</span><i class="fas fa-star"></i>
                                       <p>{{$records[$j]->descriptio}}</p>
                                    </div>

                                <a href="#"><img src="{{$records[$j]->filepath}}" alt="Movie 3"></a>
                                <h4 class="movie-title">{{$records[$j]->movie_title}}</h4>
                            </div>
                            
                        @endfor

                        </div>
                    @endfor
                @endif
                  
                

            </div>
            <!-- .container -->
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="colophon">Copyright 2021 Company name, Designed by Mohammed El-khamisi.</div>
            </div>


        </footer>
    </div>


    <script src="js/app.js"></script>


</body>

</html>
