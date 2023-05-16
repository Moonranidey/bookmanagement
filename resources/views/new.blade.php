<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Book Manage</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        {{session("success")}}
        <div class="row">
            <div class="col-6 mt-3 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>New Book <a href="{{url('bookedit')}}">Book Edit</a></h3>
                    </div>
                    <div class="cardbody">
                        <form action="{{url('bookinsert')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Book Name</label>
                              <input type="text" class="form-control" name="bookname" placeholder="Book Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Publisher Name</label>
                                <input type="text" class="form-control" name="publishername" placeholder="Publisher Name">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Page No</label>
                                <input type="number" class="form-control" name="pageno" placeholder="Page No">
                              </div>
                              <div class="dropdown mb-3">
                                <label class="form-label">Age</label>
                                <input type="number" class="form-control" name="age" placeholder="age">

                                <div class="mb-3">
                                    <label class="form-label" >Publish Date</label>
                                    <input type="datetime" class="form-control" name="publishdate" placeholder="Publish Date">

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                              </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>
