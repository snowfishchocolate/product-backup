<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <style>
        .navbar .navbar-expand-lg .navbar-light .bg-light{
          display: flex;
          justify-content: flex-end;
        }
        .navbar-brand{
          align-self: flex-start;
        }
          .card-inner{
            height: 800px;
            display: flex;
          }
          .row{
            margin:15px auto;
          }
          .tubes{
            margin: 0 auto;
            display: flex;
          }
          .tube-left, .tube-right{
            width: 50%;
          }
          .tube-left-top {
            width: 100%;
            height: 40%;
            display: flex;
          }
          .tube-left-top img, .tube-right-bottom img{
            width: 50%;
            border: 5px solid white;
          }
          .tube-left-bottom img, .tube-right-top img{
            border: 5px solid white;
            width: 100%;
          }
          .tube-right-bottom{
            width: 100%;
            height: 40%;
            display: flex;
          }
          .table{
            margin: 6rem auto;
          }
          .table-title, .table-content{
            margin: auto;
            text-align: center;
          }
          .table .tablehover{
            margin: 0 ;
          }
          .tr-title{
            background-color: #f3f4f6;
          }
          .table-button{
            margin:10px auto;
            display: flex;
            justify-content: space-between;
            color: blue;
          }
          .purple-line{
            width: 50px;
            height: 4px;
            background-color: blueviolet;
          }
          @media (min-width: 768px){
          .col-md-6 {
          max-width: 48%;
          }}
          @media (min-width: 1200px){
          .col-xl-3 {
          max-width: 23%;
          }}

      </style>
       @yield('css')

  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">數位方塊</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 700px;">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Blog <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portflio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">link#1</a>
                <a class="dropdown-item" href="#">link#2</a>
                <a class="dropdown-item" href="#">link#3</a>
              </div>
            </li>
          </ul>
          <a href="./模板購物車數量.html"><img src="{{ asset('./image/chart.PNG')}}"></a>
          <a href="/login"><img src="{{ asset('./image/human.PNG')}}"></a>
        </div>
      </nav>
{{-- //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --}}
      <main>
            @yield('content')

      </main>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxfooter -->
        <div class="container-fluid footer">
          <div class="row">
            <div class="col-3 " style="margin:50px auto ;">
              <img src="{{asset('./image/logo.svg')}}" style="width: 30%;"><br>
              Air plant banjo lyft occupy retro adaptogen indego
            </div>

            <div class="col-9"style=" display: flex;margin:50px auto ;">
            <div class="row" style="display: flex;justify-content: space-between;">
              <div class="col-xl-3 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                <div class="content-top;flex-direction: column;">
                  CATEGORIESFirst<br>
                  LinkSecond<br>
                  LinkThird<br>
                  LinkFourth<br>
                  Link<br>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                <div class="content-top" style="display: flex;flex-direction: column;">
                  CATEGORIESFirst<br>
                  LinkSecond<br>
                  LinkThird<br>
                  LinkFourth<br>
                  Link<br>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                <div class="content-top" style="display: flex;flex-direction: column;">
                  CATEGORIESFirst<br>
                  LinkSecond<br>
                  LinkThird<br>
                  LinkFourth<br>
                  Link<br>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                <div class="content-top" style="display: flex;flex-direction: column;">
                  CATEGORIESFirst<br>
                  LinkSecond<br>
                  LinkThird<br>
                  LinkFourth<br>
                  Link<br>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="card-footer text-muted" style="display: flex;justify-content: space-between;">
            <div class="content-bottom">
            © 2020 Tailblocks — @knyttneve
            </div>
            <img src="{{ asset('./image/ig.PNG')}}">
          </div>
        </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    @yield('js')

</body>
</html>
