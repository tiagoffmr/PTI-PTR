@extends('layout.base')
@section('content')

<div class="container w-75 h-75" >
    <h3 class="pt-3">Css - Projeto 1</h3>
    <div class="row h-100 " style="background-color: #ededed;">
        <div class="col mt-3 ml-3 rounded" style="background-color: #c6c6c6; height: 87%; position: relative;">
            <div class="container-fluid d-flex flex-row mt-3" >
                <div class="container text-center"><i class="fas fa-folder fa-4x" style="color: #ffce52;"></i>proj1-v1.zip</div>
                <div class="container text-center"><i class="fas fa-folder fa-4x" style="color: #ffce52;"></i>proj1-v2.zip</div>
                <div class="container text-center"><i class="fas fa-folder fa-4x" style="color: #ffce52;"></i>proj2-v1.zip</div>
                <button type="submit" class="btn btn-sm mb-2 mr-2" style="background: #2c3fb1; color: white; position: absolute; bottom: 0px; right: 0px;">Submeter</button>
            </div>
        </div>
        <div class="col-3 mt-3 rounded" style="height: 87%;">
            <div class="container-fluid rounded h-100 text-center pt-2" style="background-color: #c6c6c6;">
                <h5>Documentação </h5>
                <p> Enunciado </p>
            </div>
        </div>
        <div class="col-4 h-100">
            <div class="row mt-3 mr-1" style="height: 60%;">
                <div class="container-fluid rounded pt-2" style="background-color: #ffce52; position: relative;">
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
                    <button type="submit" class="btn btn-sm mb-2 mr-2" data-toggle="modal" data-target="#form" style="background: #2c3fb1; color: white; position: absolute; bottom: 0px; right: 0px;" >Nova Tarefa </button>
                    <div class="modal fade" id="form">
                        <div class="modal-dialog" style="margin-top: 80px; max-width: 750px;">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title">Nova Tarefa</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Tarefa</th>
                                                    <th>Responsável</th>
                                                    <th>Início</th>
                                                    <th>Fim</th>
                                                    <th>Tempo Gasto</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody id="listaTarefas">
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-sm mb-2 mr-2" style="background: #2c3fb1; color: white; position: absolute; bottom: 0px; right: 0px;">Adicionar Tarefa</button>>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mr-1" style="height: 25%;">
                <div class="container-fluid rounded text-center pt-2" style="background-color: #c6c6c6; position: relative;">
                    <h5>Reunião</h5>
                    <div>24/12/2020 15:00 </div>
                    <button type="submit" class="btn btn-sm mr-2 mb-2" style="background: #2c3fb1; color: white; position: absolute; bottom: 0px; right: 0px;">Agendar</button>
                </div>
            </div>
            <button type="submit" class="btn btn-sm float-right mt-2 mr-1" style="background: #2c3fb1; color: white;">Sair do Grupo</button>
        </div>
    </div>
</div>
@endsection





