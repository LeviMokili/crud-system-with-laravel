<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v3.0.1/dist/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <center>
        <h1>Hello, world!
    </center>
    </h1>
    <!-- Button trigger modal -->
    <div class="">
        <div id="show_some_data">

        </div>
    </div>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
   


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Insert data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="insert_form" class="rounded-0">
                        @csrf
                        <div class="mb-2">
                            <div class="row">
                                <!-- <div class="col-md-6 mb-3">

                                    <span class="form-group has-float-label">
                                        <input class="form-control form-control-sm rounded-0 inputs" class="inputs" type="file" name="file_name" id="file_name" value="">

                                        <label for="file" style="font-family: 'Roboto';color:#088FFA">user photo</label>
                                    </span>

                                </div> -->
                                <div class="col-md-6">

                                    <span class="form-group has-float-label">
                                        <input class="form-control form-control-sm rounded-0 inputs" class="inputs" type="text" name="Username" id="Username" value="">

                                        <label for="email" style="font-family: 'Roboto';color:#088FFA">Username</label>
                                    </span>

                                </div>
                                <div class="col-md-6">
                                    <span class="form-group has-float-label">
                                        <input class="form-control form-control-sm rounded-0 inputs" class="inputs" type="text" id="email" name="email" value="">

                                        <label for="email" style="font-family: 'Roboto';color:#088FFA">email</label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <img src="{{url('/images/loader.gif')}}" alt="" id="loader" style="display: none;" width="30">
                        <input type="submit" name="" value="SAVEGARDEZ" class="btn btn-dark btn-block rounded-0" id="insert_btn">


                    </form>
                </div>
            </div>
        </div>





        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<script>
    $(document).ready(function() {
        $("#insert_form").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: '{{route("insert_data")}}',
                method: 'post',
                data: $(this).serialize(),
                success: function(res) {
                     fecth_data();
                    $(".modal").modal('hide');
                    $("#insert_form")[0].reset();
                }

            })



        });

        fecth_data()

        function fecth_data() {
            $.ajax({
                url: '{{route("get_data")}}',
                method: 'get',
                success: function(res) {
                  $("#show_some_data").html(res);
                }
            })
        }
    })
</script>

</html>