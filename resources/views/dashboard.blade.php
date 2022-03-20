<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/laragotables.png') }}">
    <title>DataTables feature - Server-side processing</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
    border-radius: 88% !important;
    width: 42%;
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
    color: #fff;;
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
  background-color: #343a40 !important; 
  color: #fff !important; 
  font-weight: 600 !important; 
  font-size: larger !important;
}
.btn-dark{
  background-color: #fff  !important; 
  color: #264a6c !important; 
  font-weight: 600 !important;
  font-size: larger !important;
}
.flex-container {
    display: flex;
}

.flex-child {
    flex: 1;
}  

.flex-child:first-child {
    margin-right: 60px;
    margin-left: 60px;
} 

li{
    color: #fff !important;

}
.active{
    color: #121e32 !important;
    font-weight: 500;
}
li:hover{
    color: #121e32 !important;
    font-weight: 500;
}
.container2 {
  position:relative;
  text-align:end;
  margin-top: 50px;
  color: #fff;

}
#dv1, #dv2 {
  display:contents;
  width:40%;
  margin:0 4px;
  padding: 17px;
/*  border: 1px #ffffff52 solid;*/
  /*border-radius: 52px;
  background: linear-gradient(to bottom, #264a6c17, #53badc);*/
 height: 116px;
}
#dv2{ 
    margin-left: -161px !important; 
}



</style>  
<!-- Scripts -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
    <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/1.11.5/dataRender/datetime.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>   
    <script type="text/javascript" language="javascript" class="init">
    
    $(document).ready(function () {
      $("#example").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('simple_ss') }}",
        //In the offical documentation the columns data option does not existe in this example,
        //for the need of server side rendring data under Laravel it is a must.
        columns: [
          { data: "first_name" },
          { data: "last_name" },
          { data: "position" },
          { data: "office" },
          {
            data: "start_date",
            render: $.fn.dataTable.render.moment("", "Do MMM YY"),
          },
          {
            data: "salary",
            render: $.fn.dataTable.render.number(",", ".", 0, "$"),
          },
        ],
        //end comment section.
      });
    });

    </script>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('LaraGoTables') }}
            </h2>
        </x-slot>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="py-12" style="background: linear-gradient(to right, #3a7fd5, #6ebce2);">
            <div class="flex-container">

              <div class="flex-child magenta">
                <img  src="{{ asset('images/LaraGoTables.jpg') }}"><br>         
                      <p style="color:white;font-size: xxx-large;text-align: justify;margin-top: -2px; width: 509px; margin-left: 180px;margin-bottom: 0;">The <span style="color:#fff;font-weight: bold;font-style: italic">LaraGoTable</span> is an immersion through the examples of <span style="font-weight: bolder;font-style: italic;">DataTable</span> adapted for the use of <span style="font-weight: bolder;font-style: italic;">Laravel</span> projects  </p>
                     
            <div class="container2">
                <div id="dv1" style="margin-right: 0;">
                    <a href="{{ url('features') }}" class="btn btn-dark center-block mt-2 mb-2" >Features &nbsp;&nbsp; »</a>
                </div>
                <div id="dv2">
                <a href="{{ url('extensions') }}" class="btn btn-dark center-block mt-2 mb-2" style="    margin-left: 21px;" >Extensions »</a>
                </div>
            </div>
                    
                  
          </div>
          
          <div class="flex-child green">
            <ul class="tabs">
                <li class="active">Javascript</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>Ajax</li>
                <li>Server-side script</li>
                <li>Route</li>
                <li>Controller</li>
                <li>Model</li>
            </ul>
            <div class="tabs" style="background:#fff">
                <div class="js">
                    <p>The Javascript shown below is used to initialise the table shown in this example:</p>
                    <code class="multiline language-js">
                            $(document).ready(function () {
                              $("#example").DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: "&#123;&#123; route('simple_ss') &#125;&#125;",
                                //In the offical documentation the columns data option does not existe in this example,
                                //for the need of server side rendring data under Laravel it is a must.
                                columns: [
                                  { data: "first_name" },
                                  { data: "last_name" },
                                  { data: "position" },
                                  { data: "office" },
                                  {
                                    data: "start_date",
                                    render: $.fn.dataTable.render.moment("", "Do MMM YY"),
                                  },
                                  {
                                    data: "salary",
                                    render: $.fn.dataTable.render.number(",", ".", 0, "$"),
                                  },
                                ],
                                //end comment section.
                              });
                            });</code>
                    <p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
                    <ul>
                        <li>
                            <a href="https://code.jquery.com/jquery-3.5.1.js">https://code.jquery.com/jquery-3.5.1.js</a>
                        </li>
                        <li>
                            <a href="{{ url('js/jquery.dataTables.js') }}">public/js/jquery.dataTables.js</a>
                        </li>
                    </ul>
                </div>
                <div class="table">
                    <div class="demo-html">
                <table hidden id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
                    <p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
                </div>
                <div class="css">
                    <div>
                        <p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
                        additional CSS used is shown below:</p><code class="multiline language-css"></code>
                    </div>
                    <p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
                    <ul>
                        <li>
                            <a href="{{ url('css/jquery.dataTables.css') }}">public/css/jquery.dataTables.css</a>
                        </li>
                    </ul>
                </div>
                <div class="ajax">
                    <p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
                    loaded.</p>
                </div>
                <div class="php">
                    <p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP. Server-side
                    processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
                    documentation</a>.</p>
                </div>
                <div id="route" class="route">
                    <p>The route shown below may be accessed by entering the defined route's URL in your browser:</p>
                    <code class="multiline language-route">
                        <&#63;php

                        use Illuminate\Support\Facades\Route; 
                        use App\Http\Controllers\DatatableController;

                        /*
                        |--------------------------------------------------------------------------
                        | Web Routes
                        |--------------------------------------------------------------------------
                        |
                        | Here is where you can register web routes for your application. These
                        | routes are loaded by the RouteServiceProvider within a group which
                        | contains the "web" middleware group. Now create something great!
                        |
                        */
                        
                        //Server-side (features)

                        Route::group([], function() {
                            
                            Route::get('features/server_side/simple', 'App\Http\Controllers\DatatableController&#64;simple_ss')->name('simple_ss');

                        });</code>
                    <p>In addition to the above route, the "web.php" file includes all the routes from the other examples (features) which i deliberately hide to keep focus on each features separately.</p>
                </div>
                <div id="controller" class="ctrl" >
                    <p>The controller shown below is used to defining all of your request handling logic you 
                    may wish to organize seperetly from your route files:</p>
                    <code class="multiline language-ctrl">
                        <&#63;php

                        namespace App\Http\Controllers;

                        use Illuminate\Http\Request;
                        Use App\Models\Datatable;
                        use DataTables;

                        class DatatableController extends Controller
                        {
                            /**
                             * Display a listing of the resource.
                             *
                             * &#64;return \Illuminate\Http\Response
                             */

                        //Server-side (features)
                        public function simple_ss(Request $request)
                        {
                             if ($request->ajax()) {
                                $datatables = Datatable::all();
                                return Datatables::of($datatables)
                                    ->make(true);
                            }
                            return view('features.server_side.simple');
                        }</code>
                    <p>In addition to the above code, the "DatatableController.php" file includes all classes from the other examples (features) which i deliberately hide to keep focus on each features separately.</p>
                    </div>
                <div id="model" class="model">
                    <p>Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table:</p>
                    <code class="multiline language-model">
                        <&#63;php

                        namespace App\Models;

                        use Illuminate\Database\Eloquent\Factories\HasFactory;
                        use Illuminate\Database\Eloquent\Model;

                        class Datatable extends Model
                        {
                            use HasFactory;

                            protected $fillable = [
                                
                                'id', 'first_name', 'last_name', 'name_abrv', 'position', 'email', 'office', 'start_date_epoch', 
                                'start_date', 'age', 'salary', 'seq', 'extn'
                            ];
                        }</code>
                    <p>In addition to the above code, the "Datatable.php" file (Model) will manage ,work and support all common relationships with ease.</p>
                </div>
          </div>          
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">   
        </div>
    </div>
</x-app-layout>
