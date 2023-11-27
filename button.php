
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
   <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <style>
/*        body
        {
            display:flex;
            justify-content: center;
            align-items:center;
            flex-wrap:wrap;
            margin:0;
        }*/
        button
        {
            margin:1rem;
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }
        .btn
        {
            background-color:rgb(242,34,131); 
            color:#222;
            padding:.5em 2em;
            border:none;
            outline:none;
            position:relative;
            cursor:pointer;
            font-size:23px;
            border-radius:23px;
        }
        .btn-background-circle::before
        {
            content:'';
            position: absolute;
            top:0;
            left:0;
            right:0;
            bottom:0;
            z-index:-1;
            background-color:rgb(242,34,131);
            border-radius: 50%;
            transition: transform 600ms ease-in-out;
            transform: scale(1.5);
        }
        .btn.btn-background-circle
        {
           z-index: 1; 
           overflow: hidden;
           color:white
        }
       .btn.btn-background-circle:hover::before,
       .btn.btn-background-circle:focus::before{
           transform:scale(0);
           background-color: rgb(5,99,150);   
       }
    </style>
    <body>
        <div class="container">
            <br><br>
            <div class="row text-center">
                <div class="col-md-4 offset-md-4" style="border:2px solid;">
                    <a href="index.php"><button class="btn btn-background-circle">Master</button></a>
                </div>
            </div>
            <br><br>
            <div class="row text-center" style="border:2px solid;">
                <div class="col-md-4 offset-md-1" style="border:2px solid;">
                    <button class="btn btn-background-circle">Upload Excel File</button>
                </div>
                <div class="col-md-4 offset-md-2" style="border:2px solid;">
                    <button class="btn btn-background-circle">Login</button>
                </div>
            </div>
            <br><br>
            <div class="row text-center">
                <div class="col-md-4 offset-md-4" style="border:2px solid;">
                    <button class="btn btn-background-circle">Export File</button>
                </div>
            </div>
        </div>
    </body>
</html>

           