<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
       @include('layouts.patials.head')
        
    </head>
    <body>

        <div class="w-100 main-nav pt-4 pb-4 mb-4 ">
            <div class="container fonts fonts-size-h d-flex justify-content-between">
                <div class="d-flex j align-items-center">
                    <a href="/"> <h5 class="m-0 hf-w-coler">Add Vocab</h5></a>
                </div>
    
                <div class="dropdown d-flex j align-items-center">
                    @yield('top')
                    <div class="div-profile d-flex align-items-center justify-content-center shadow-sm cursor">
                        M
                    
                    </div>
                </div>

                
            </div>
        </div>
   
        @show     

        <div class="container">
            @yield('content')
            
        </div>

        <div class="footer">
            @yield('footer')
        </div>        

        
    </body>

    

    <script>
      
        $('.btn-slide').on("click", function () {
            $('.slide-bar').toggleClass('slide-bar-active');
        });

        function changeDiv() {
        $('.div-subject').removeClass("col-md-4")
        $('.div-subject').addClass('col-md-12');
        $('.main-div-subject').removeClass("col-md-12")
        $('.main-div-subject').addClass("col-md-4")
        $('.main-div-detail').removeClass("d-none")
        $('. main-div-detail').addClass("d-block")
        }
    </script>

</html>
