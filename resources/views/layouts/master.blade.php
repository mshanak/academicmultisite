




























<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>PPU- @yield('title')</title>
   
    
    
    
  <script type='text/javascript' src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>نموذج التحليل الوظيفي - جامعة بوليتكنك فلسطين</title>


  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap-rtl.css" rel="stylesheet" type="text/css" />

  <link href="font.css" rel="stylesheet" type="text/css" />




  <style type="text/css">

    /*label { width: 10em; float: left; }*/
    label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }

    em { font-weight: bold; padding-right: 1em; vertical-align: top; }

    body{
      font-family: "JF Flat Regular",​sans-serif;
    }
    h1{
      font-size: 24px;
    }
  </style>
     </head>
    
    <body>
       
        <div class="container">
        <div class="row">
            
             <div style="background:white;padding: 10px; border-bottom: 6px solid #e9e9e7;" class="row ">
      <div class="col-md-5 ">
        



        <div>

        <a href="#" title="الرئيسية" id="logo">
            <img width="100" style="float: right;margin-left: 10px;" src="images/ppu-logo.png">
          </a>
          <div style="display: inline-block;width: 70%;" id="site-name">
            <a style="color: #338091; text-decoration: none;" href="#" title="الرئيسية">
              <h1> نموذج التحليل الوظيفي</h1>
            </a>
            <p class="site-slogan"> <a href="/ar" title="الرئيسية" style="color: #585a5f;font-size: 14px;text-decoration: none;">  دائرة الموارد البشرية</a></p>
          </div>
        </div>




      </div>
      <div class="col-md-7 ">
        
      </div>

    </div>
            
            
        </div>
        
        
        
        <div class="row">
            
            <div class="col-md-3">
                 @section('sidebar')
                        This is the master sidebar.
                    @show
            </div>
            <div class="col-md-9">
                
            @yield('content')
            </div>
        </div>
            
            
            
            
            </div>
    </body>
</html>