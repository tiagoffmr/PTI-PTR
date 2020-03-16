@extends('layout.base')
@section('content')

<div class="container w-75 h-75" >
    <h3 class="pt-3">Css - Projeto 1</h3>
    <div class="row h-100 rounded" style="background-color: #ededed;">
        <div class="col mt-2 h-100" style="background-color: #c6c6c6;">
            <div class="container-fluid rounded d-flex flex-row mt-3" >
                <i class="fas fa-folder fa-4x" style="color: #ffce52;"></i>
                <span>proj1-v1.zip</span>
                <i class="fas fa-folder fa-4x" style="color: #ffce52;"></i>
                <span>proj1-v2.zip</span>
                <i class="fas fa-folder fa-4x" style="color: #ffce52;"></i>
                <span>proj2-v1.zip</span>
            </div>
            <div class="container-fluid clearfix" style="background-color: #c6c6c6;">
                <button type="submit" class="btn btn-primary float-right">Submeter</button>
            </div>
        </div>
        <div class="col-3 mt-2" style="height: 95%;">
            <div class="container-fluid rounded h-100" style="background-color: #c6c6c6;">
                <h5>Documentação </h5>
                <p> Enunciado </p>
            </div>
        </div>
        <div class="col-4 h-100">
            <div class="row mt-2" style="height: 50%;">
                <div class="container-fluid rounded" style="background-color: #ffce52;">
                    <h5> Notas </h5>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultChecked" checked="">
                        <label class="custom-control-label" for="defaultChecked">PBFS</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultChecked" checked="">
                        <label class="custom-control-label" for="defaultChecked">front-end</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultChecked" checked="">
                        <label class="custom-control-label" for="defaultChecked">back-end</label>
                    </div>
                </div>
            </div>
            <div class="row mt-2" style="height: 45%;">
                <div class="container-fluid rounded" style="background-color: #c6c6c6;">
                    <h5>Reunião</h5>
                    <div>24/12/2020 15:00 </div>
                    <button type="submit" class="btn btn-primary float-right">Agendar</button>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Sair do Grupo</button>
        </div>
    </div> 
</div>
@endsection





