@extends('layout.base')
@section('content')

    <div class=" mt-3 container-fluid pl-5 pr-5 pb-5">
        <h3 class="pb-2">Css - Projeto 1</h3>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="conteudo-tab" data-toggle="tab" href="#conteudo" role="tab" aria-controls="conteudo" aria-selected="true">Conteudo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="horario-tab" data-toggle="tab" href="#horario" role="tab" aria-controls="horario" aria-selected="false">Horário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="noticias-tab" data-toggle="tab" href="#noticias" role="tab" aria-controls="noticias" aria-selected="false">Noticias</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent" style="background-color: #ededed; height: 75vh; ">
            <div class=" container-xl tab-pane fade show active" id="conteudo" role="tabpanel" aria-labelledby="conteudo-tab">
                <div class="row rounded " style="background-color: #ededed; height: 75vh; ">
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
            <div class="tab-pane fade" id="horario" role="tabpanel" aria-labelledby="horario-tab">
                <div class="grid-container">
                    <div></div>
                    <div>Segunda</div>
                    <div>Terça</div>
                    <div>Quarta</div>
                    <div>Quinta</div>
                    <div>Sexta</div>
                    <div>Sábado</div>
                    <div>Domingo</div>
                    <div style="border: 1px solid black;">8:00h-9:00h</div>
                    <div style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">9:00h-10:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">10:00h-11:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">11:00h-12:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">12:00h-13:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">13:00h-14:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">14:00h-15:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">15:00h-16:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">16:00h-17:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-left: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">17:00h-18:00h</div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>
                    <div style="border-bottom: 1px solid black; border-right: 1px solid black;"></div>

                </div>

                <div class="container p-3">
                    <div class="row">
                        <div class="col-xs-3 mx-auto">
                            André
                            <span class="border bg-primary align-middle "></span>
                        </div>
                        <div class="col-xs-3 mx-auto">
                            António
                            <span class="border bg-success align-middle "></span>
                        </div>
                        <div class="col-xs-3 mx-auto">
                            Diogo
                            <span class="border bg-info align-middle "></span>
                        </div>
                        <div class="col-xs-3 mx-auto">
                            Guilherme
                            <span class="border bg-warning align-middle "></span>
                        </div>
                        <div class="col-xs-3 mx-auto">
                            João
                            <span class="border bg-danger align-middle "></span>
                        </div>
                        <div class="col-xs-3 mx-auto">
                            Tiago
                            <span class="border bg-secondary align-middle "></span>
                        </div>
                        <div class="col-xs-3 mx-auto">
                            Vasco
                            <span class="border bg-dark align-middle "></span>
                        </div>
                    </div>
                </div>


                <style>
                    .border {
                        display: inline-block;
                        width: 10px;
                        height: 10px;
                    }

                    .grid-container {
                        display: grid;
                        grid-template-columns: auto auto auto auto auto auto auto auto;
                        padding: 10px;
                    }

                    .grid-container > div {
                        padding-top: 10px;
                        padding-bottom: 10px;
                        text-align: center;
                        font-size: 10px;
                    }
                </style>
            </div>
            <div class="tab-pane fade" id="noticias" role="tabpanel" aria-labelledby="noticias-tab">
                <div class="container mt-2 pb-3 rounded px-5 pt-3">
                    <div class="table-responsive">
                        <table class="table bg-white" style="text-align:center;">
                            <thead>
                            <tr>
                                <th>Tópico</th>
                                <th>Iniciado por</th>
                                <th>Respostas</th>
                                <th>Últimas mensagens</th>
                                <th>Criada</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Notas</td>
                                <td>Anna</td>
                                <td>0</td>
                                <td>xxx</td>
                                <td>yyy</td>
                            </tr>
                            <tr>
                                <td>exame</td>
                                <td>Alex vidal</td>
                                <td>1</td>
                                <td>ccc</td>
                                <td>bbb</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
