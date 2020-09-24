<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Student management System</title>
  </head>
  <body>
    @if($layout == 'index')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">
                </section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">
                  <form action="{{url('/store')}}" method="POST">
                    @csrf
                        <div class="form">
                            <label >First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter Your First Name">
                        </div>
                        <div class="form">
                            <label >Last Name</label>
                            <input name="secondName" type="text" class="form-control" placeholder="Enter Your Last Name">
                        </div>
                        <div class="form">
                            <label >Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter Your Age">
                        </div>
                        <div class="form-group">
                          <label >Email address</label>
                          <input name="email" type="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                          <label >Password</label>
                          <input  name="password" type="password" class="form-control" >
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">

                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">
                </section>
            </div>
        </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>