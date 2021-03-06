@extends('admin.base')
@section('content')



    <div class="container" >

        <!-- Search form -->
        <div style="margin-left: 10%; margin-right:auto; margin-top: 5%;margin-bottom: 5%;">

            <h3>Students</h3>
            <br>
            <form class="form-inline my-2 my-lg-0">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input class="form-control ml-3 w-50" type="search" placeholder="Example: João Silva" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0 ml-3" type="submit">Search</button>
            </form>
        </div>

        <div class="content" style="margin-left: 10%; margin-right:auto; margin-bottom: 5%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="float: left;display: inline-block;">Table</h4>
                            <div class="dropdown">
                                <a class="btn btn-outline-primary dropdown-toggle" style="float: right;margin-right:1%;display: inline-block;" type="submit" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <button class="dropdown-item"  type="submit" data-toggle="modal" data-target="#modal-1"><i class="fa fa-plus" aria-hidden="true"></i> Create</button>
                                    <button class="dropdown-item"  type="submit" data-toggle="modal" data-target="#modal-2"><i class="fa fa-upload" aria-hidden="true"></i> Import</button>
                                </div>

                            </div>
                            <button class="btn btn-outline-primary" id="edit" onclick="disable()" style="float: right;margin-right:1%;display: inline-block;" type="submit"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                            <button class="btn btn-outline-primary" disabled id="lock" style="float: right;display: inline-block;margin-right:1%;" type="submit"><i class="fas fa-lock"></i></button>



                            <!-- Modal - 1 -->
                            <div class="modal" id="modal-1" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Student</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Name</label>
                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">E-Mail</label>
                                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Photo</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal - 2 -->
                            <div class="modal" id="modal-2" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Import Students Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form style="margin-left: 10%; margin-right:auto; margin-bottom: 5%;margin-top: 5%;">
                                                <p>File type accepted (CSV, XML, SQL)</p>
                                                <div class="form-group">
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".csv, .sql, .xml">
                                                    <br>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Import Data</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal - 3 -->
                            <div class="modal" id="modal-3" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirm changes</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>WARNING: Your changes will affect user' data.</p>
                                            <p>Are you sure you want to continue?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Confirm</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function disable() {
                                    if($('.name').is(':disabled')){
                                        $(".name").attr("disabled", false);
                                        $("#edit").attr("disabled", true);
                                        $("#lock").empty()
                                        $("#lock").append("<i class='fas fa-lock-open'></i>");
                                        $(".card-header").append("<button style='float: right;display: inline-block;margin-right:1%;' onclick='disable()' id='exit' type='button' class='btn btn-danger'>Exit without saving</button>")
                                        $(".card-header").append("<button data-toggle=\"modal\" data-target=\"#modal-3\" style='float: right;display: inline-block;margin-right:1%;' id='save' type='button' class='btn btn-success'>Save changes</button>")





                                    }else{
                                        $(".name").attr("disabled", true);
                                        $("#edit").attr("disabled", false);
                                        $("#lock").empty();
                                        $("button").remove("#save");
                                        $("button").remove("#exit");

                                        $("#lock").append("<i class='fas fa-lock'></i>");
                                    }
                                }
                            </script>

                        </div>
                        <div class="card-body" >
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Student Number
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        E-Mail
                                    </th>
                                    <th >
                                        Password
                                    </th>
                                    <th >
                                        Photo
                                    </th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="João" >
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Pedro">
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Lisboa" >
                                        </td>
                                        <td class="text-right">
                                            <input type="text" disabled class="form-control-plaintext name" value="1000">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="João" >
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Pedro">
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Lisboa" >
                                        </td>
                                        <td class="text-right">
                                            <input type="text" disabled class="form-control-plaintext name" value="1000">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="João" >
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Pedro">
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Lisboa" >
                                        </td>
                                        <td class="text-right">
                                            <input type="text" disabled class="form-control-plaintext name" value="1000">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="João" >
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Pedro">
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Lisboa" >
                                        </td>
                                        <td class="text-right">
                                            <input type="text" disabled class="form-control-plaintext name" value="1000">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="João" >
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Pedro">
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Lisboa" >
                                        </td>
                                        <td class="text-right">
                                            <input type="text" disabled class="form-control-plaintext name" value="1000">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="João" >
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Pedro">
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Lisboa" >
                                        </td>
                                        <td class="text-right">
                                            <input type="text" disabled class="form-control-plaintext name" value="1000">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="João" >
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Pedro">
                                        </td>
                                        <td>
                                            <input type="text" disabled class="form-control-plaintext name" value="Lisboa" >
                                        </td>
                                        <td class="text-right">
                                            <input type="text" disabled class="form-control-plaintext name" value="1000">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection