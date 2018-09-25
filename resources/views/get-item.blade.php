<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Styles -->
       
    </head>
    <body>
        

            <div class="container">

             <h2>Insert Item</h2>
             

                <div class="col-md-ofset-3 col-md-6">
                 
                <form action="{{route('post-item')}}" method="post">
                <div class="form-group">

                    <input type="" name="image" class="form-control" placeholder="image">
                    
                </div>

              <div class="form-group">
                    <input type="" name="name" placeholder="Enter Name" class="form-control">
                 </div>

                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                   <input type="int" name="price" class="form-control">

                </div>
                <div class="form-group">

                   <textarea name="description" class="form-control" placeholder="Enter Text"></textarea>

                </div>

                <div class="form-group">
                   <button type="submit" class="btn btn-primary"> Save </button>

                </div>

                 
             </form>
        
                 

             </div>
             
             

            </div>
        </div>
    </body>
</html>
