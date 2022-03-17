
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
   /*-----------------------------------------------------
# Services
-----------------------------------------------------*/

.service-box .section-title h2 {
    color: #444;
    font-size: 42px;
}
.service-box .section-title p {
    text-align: center;
    font-style: italic;
    margin-bottom: 40px;
    color: #666;
}
.service-box {
    margin-bottom: 30px;
    padding: 15px;
    text-align: center;
    box-shadow: 0px 0 5px #bdbdbd;
    float: left;
    position: relative;
    z-index: 1;
    overflow: hidden;
    background: linear-gradient(to right, #60bbd9, #afdfef);
}
.service-box::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, #afdfef, #60bbd9);
    left: 0px;
    top: -500px;
    z-index: -1;
    transition: 1s;
}
.service-box:hover::after {
    top: 0px;
}
.service-box i {
    display: flex;
    justify-content: center;
}
.service-box i {
    width: 70px;
    height: 70px;
    margin-bottom: 30px;
    background: #ffffff;
    border-radius: 100%;
    transition: 0.5s;
    color: #4e50e7;
    font-size: 35px;
    overflow: hidden;
    padding-top: 18px;
    box-shadow: 0px 0 5px #bdbdbd;
    margin: 10px auto 15px;
}
.service-box h3 {
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 23px;
    position: relative;
}
.service-box h3 a {
    color: #3174c7;;
    text-decoration: none;
}
.service-box h3 a:hover {
    color: #343a40;
}
.service-box p {
    line-height: 24px;
    font-size: 15px;
    font-weight: bold;
}
.service-box h3 a:hover {
    color: #343a40;
}
#box1{
    margin-right: 0 ;
    margin-left: 50%;
}
#box2{
    margin-left: 0 ; 
    margin-right: 50%;
}
.btn-dark:hover{
  background-color: white !important; 
  color: #343a40 !important; 
  font-weight: 600 !important; 
}
.btn-dark{
  background-color: #264a6c !important; 
  color: #fff !important; 
  font-weight: 600 !important; 
}


</style> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LaraGoTables') }}
        </h2>
    </x-slot>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="py-12" style="background: linear-gradient(to right, #3a7fd5, #6ebce2);">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg shadow">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img src="{{ asset('images/datatables-logo.png') }}" style="margin: 0 auto;" >
                    <div class="row">            
            <div class="col-md-6 col-md-offset-3" data-aos="fade-up">
               <div class="service-box" id="box1">
                  <i class="fas fa-th"></i>
                  <h3><a href="{{ url('features') }}">Features (examples)</a></h3>
                  <p>One of the best ways to learn how to do anything new (including software APIs!) is to get your hands dirty as quickly as possible. These examples will show you ....</p>
                  <a href="{{ url('features') }}" class="btn btn-dark center-block mt-2 mb-2">Explore »</a>
               </div>
            </div>
            <div class="col-md-6 col-md-offset-3" data-aos="fade-up">
               <div class="service-box" id="box2">
                  <i class="fas fa-table"></i>
                  <h3><a href="{{ url('extensions') }}">Extensions</a></h3>
                  <p>The features that DataTables provides can be greatly enhanced by the use of the plug-ins available on this page, which give many new user interaction and ...</p>
                  <a href="{{ url('extensions') }}" class="btn btn-dark center-block mt-2 mb-2" id="bto">Explore »</a>
               </div>
               </div>                  
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
