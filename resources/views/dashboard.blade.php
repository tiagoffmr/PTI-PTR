@extends('layout.base')
@section('content')
<div class="container-xl">
    <div class="row">
        <div class="col-sm-3">
            <div class="container bg-light mt-2 rounded full-height">

            </div>
        </div>
        <div class="col-sm-9">
            <div class="overflow-auto bg-light mt-2 pb-3 rounded">
                <h3 class="pt-3 pl-3">Dashboard</h3>
                <div class="container overflow-auto mw-80" >
                    <div class="container overflow-auto bg-white p-2 mt-3 rounded">
                        <h4 class="mt-2 pl-2 float-left">CSS</h4>
                        <button type="button" class="cadeira btn btn-default btn-lg float-right" id="css">
                            <span class="fas fa-plus"></span>
                        </button>
                    </div>

                    <div class="container overflow-auto bg-secondary p-2 rounded d-none" id="css-groups">
                        <p>Exemplo</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                    </div>

                    <div class="container overflow-auto bg-white p-2 mt-3 rounded">
                        <h4 class="mt-2 pl-2 float-left">PGP</h4>
                        <button type="button" class="cadeira btn btn-default btn-lg float-right" id="pgp">
                            <span class="fas fa-plus"></span>
                        </button>
                    </div>

                    <div class="container overflow-auto bg-secondary p-2 rounded d-none" id="pgp-groups">
                        <p>Exemplo</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                    </div>

                    <div class="container overflow-auto bg-white p-2 mt-3 rounded">
                        <h4 class="mt-2 pl-2 float-left">BD</h4>
                        <button type="button" class="cadeira btn btn-default btn-lg float-right" id="bd">
                            <span class="fas fa-plus"></span>
                        </button>
                    </div>

                    <div class="container overflow-auto bg-secondary p-2 rounded d-none" id="bd-groups">
                        <p>Exemplo</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                        <p>Lalalala</p>
                    </div>

                </div>
                <button type="button" class="p-2 mt-3 mr-3 btn btn-primary btn-lg float-right" style="background-color: #2c3fb1; border-color: #2c3fb1;">Cadeiras Antigas</button>
            </div>
        </div>
    </div>
 </div>
    <script>
        $(document).ready(function(){

            $(".cadeira").click(function(){
                id = $(this).attr('id');
                if ($("#" + id + "-groups").hasClass( "d-none" )) {
                    $("#" + id + "-groups").removeClass( "d-none" );
                    $("#" + id).children().addClass('fa-minus').removeClass('fa-plus');
                } else {
                    $("#" + id + "-groups").addClass( "d-none" );
                    $("#" + id).children().addClass('fa-plus').removeClass('fa-minus');
                }
            });
        });
    </script>
@endsection

