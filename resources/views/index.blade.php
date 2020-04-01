@extends('layouts.app')

@section('title', 'y2mate Pro')

@section('sidebar')
    @parent

    <div class="container my-4">
            <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
    
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
    
            <!--First slide-->
            <div class="carousel-item active">
    
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                     
                    </div>
                  </div>
                </div>
    
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                      
                    </div>
                  </div>
                </div>
    
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                     
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
            <!--/.First slide-->
    
            <!--Second slide-->
            <div class="carousel-item">
    
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                    
                    </div>
                  </div>
                </div>
    
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                    </div>
                  </div>
                </div>
    
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
            <!--/.Second slide-->
    
            <!--Third slide-->
            <div class="carousel-item">
    
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                    
                    </div>
                  </div>
                </div>
    
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                     
                    </div>
                  </div>
                </div>
    
                <div class="col-md-4 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Top Downloads</h4>
                      <p class="card-text">Some quick example text to build on the Top Downloads and make up the bulk of the
                        card's content.</p>
                    
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
            <!--/.Third slide-->
    
          </div>
          <!--/.Slides-->
    
        </div>
        <!--/.Carousel Wrapper-->
    
    
      </div>
@endsection
@section('content')
 <!-- Search form -->
 <h2><center>Download videos from Youtube</center></h2>
    <form class="form-inline md-form mr-auto mb-8" method="POST" action="{{url('download-video')}}">
        @csrf
       <input class="form-control mb-8" id="search" name="videolink" type="text" placeholder="Search Your favourite Video and Paste the link for your video" aria-label="Search">
    <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
  </form>
  
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.js" integrity="sha256-J98Q+jx7QX+6n1tJ/ki9b+yjLwM8vnn+46aJd7E4P9M=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js" integrity="sha256-aS5HnZXPFUnMTBhNEiZ+fKMsekyUqwm30faj/Qh/gIA=" crossorigin="anonymous"></script>
    <script>
            var options = {

                url: "resources/countries.json",

                getValue: "name",

                list: {
                match: {
                    enabled: true
                }
                },

                theme: "square"
                };

                $("#search-result").easyAutocomplete(options);
    </script>
@endsection
