if (localStorage.projeto == null) {
    projetoObj = {};
    projetoJSON = JSON.stringify(projetoObj);
    localStorage.setItem("projeto", projetoJSON);
}

projeto = JSON.parse(localStorage.getItem("projeto"));

if (localStorage.projetoConcluido == null) {
    projetoConcluidoObj = {};
    projetoConcluidoJSON = JSON.stringify(projetoConcluidoObj);
    localStorage.setItem("projetoConcluido", projetoConcluidoJSON);
}

projetoConcluido = JSON.parse(localStorage.getItem("projetoConcluido"));

$(document).ready(function(){


    for (var a in projeto) {
        estaConcluido = true;
        $.each(projeto[a], function( index, item ){
            for (var b in item) {
                if (item[b] == null) {
                    estaConcluido = false;
                }
            }
        });
        if (estaConcluido) {
            projetoConcluido[a] = [];
            for (var c in projeto[a]) {
                projetoConcluido[a].push(projeto[a][c]);
            }
            delete projeto[a];
            localStorage.setItem("projeto", JSON.stringify(projeto));
            localStorage.setItem("projetoConcluido", JSON.stringify(projetoConcluido));
            location.reload();
        }
    }

    if (window.location.href.indexOf("index") > -1) {

        if ($.isEmptyObject(projeto)) {
            $('#ativos').append('<div class="col-sm-12" style="text-align: center;"><h2>Não existe nenhum projeto ativo.<br>Crie um novo.</h2></div>');
        }

        for (var key in projeto) {
            if (projeto.hasOwnProperty(key)) {
                $('#grupoBotao').append('<a class="btn btn-outline-primary" href="projeto.html?projeto=' + key + '"><h3>' + key + '</h3></a>');
            }
        }

        if ($.isEmptyObject(projetoConcluido)) {
            $('#concluidos').append('<div class="col-sm-12" style="text-align: center;"><h2>Não existe nenhum projeto concluído.</h2></div>');
        }

        for (var key in projetoConcluido) {
            if (projetoConcluido.hasOwnProperty(key)) {
                $('#grupoBotaoConcluido').append('<a class="btn btn-outline-primary" href="projeto.html?projeto=' + key + '"><h3>' + key + '</h3></a>');
            }
        }

        $("#adicionarTarefa").click( function() {
            id = parseInt($(".tarefa").last().attr('id').split("-")[1]) + 1;
            if ($(".tarefa").last().val() !== "") {
                $('<label for="text">Tarefa ' + id + ':</label><input type="text" class="form-control tarefa" id="tarefa-' + id + '"><div class="col-sm-12" style="height:15px"></div>').insertBefore('#adicionarTarefa');
            }
        });

        $("#projetoForm").keypress(function (e) {
            if (e.which == 13) {
                novoProjeto();
            }
        });

        $("#criarProjeto").click( function() {
            novoProjeto();
        });

        function novoProjeto() {
            nome = $("#projetoForm").val();
            if (nome !== "") {

                naoExiste = true;

                for (var key1 in projeto) {
                    if (nome == key1) {
                        naoExiste = false;
                    }
                }

                for (var key2 in projetoConcluido) {
                    if (nome == key2) {
                        naoExiste = false;
                    }
                }

                if (naoExiste) {
                    projeto[nome] = [];
                    tarefas = parseInt($(".tarefa").last().attr('id').split("-")[1]) + 1;
                    for (var i = 1; i < tarefas; i++) {
                        j = "#tarefa-" + i;
                        if ($(j).val() !== "") {
                            projeto[nome].push([$(j).val(), null, null, null])
                        }
                    }
                    localStorage.setItem("projeto", JSON.stringify(projeto));
                    location.reload();
                } else {
                    alert("Já existe um projeto com esse nome. Por favor escolha outro.");
                }

            } else {
                alert("Dê um nome ao projeto.");
            }
        }

    } else {

        urlParams = new URLSearchParams(window.location.search);
        projetoNome = urlParams.get("projeto");

        estado = "Ativo";
        for (var n in projetoConcluido) {
            if (projetoNome == n) {
                estado = "Concluído";
            }
        }

        $("#projeto").prepend(projetoNome + " - " + estado);

        $.each(projeto[projetoNome], function( index, item ){
            if (item[1] == null & item[2] == null & item[3] == null) {
                /* data = moment().format("DD/MM/YYYY H:mm A");
                console.log(data); */
                $("#listaTarefas").append('<tr><td>' + item[0] + '</td><td><input type="text" class="form-control" id="responsavelForm' + index + '"></td><td><div style="position: relative"><input type="text" class="form-control datetimepicker-input" id="datetimepicker' + index + '" data-toggle="datetimepicker" data-target="#datetimepicker' + index + '"/><script type="text/javascript">$(function(){$("#datetimepicker' + index + '").datetimepicker({minDate: moment(), icons: {time: "fa fa-clock", date: "fa fa-calendar", up: "fa fa-arrow-up", down: "fa fa-arrow-down" }});});</script></div></td><td><input type="text" class="form-control" disabled></td><td></td><td style="text-align: center;"><button type="button" class="btn btn-success gravar1" id="' + index + '">Gravar</button></td><td style="text-align: center;"><button type="button" class="btn btn-danger apagar" id="' + index + '">Apagar</button></td></tr>');
            } else if (item[1] !== null & item[2] !== null & item[3] == null) {
                data = moment("DD/MM/YYYY H:mm A");
                $("#listaTarefas").append('<tr><td>' + item[0] + '</td><td>' + item[1] + '</td><td>' + item[2] + '</td><td><div style="position: relative"><input type="text" class="form-control datetimepicker-input" id="datetimepicker' + index + '" data-toggle="datetimepicker" data-target="#datetimepicker' + index + '"/><script type="text/javascript">$(function(){$("#datetimepicker' + index + '").datetimepicker({minDate: "' + projeto[projetoNome][index][2] + '", format: "MM/DD/YYYY H:mm A", icons: {time: "fa fa-clock", date: "fa fa-calendar", up: "fa fa-arrow-up", down: "fa fa-arrow-down" }});});</script></div></td><td></td><td style="text-align: center;"><button type="button" class="btn btn-success gravar2" id="' + index + '">Gravar</button></td><td style="text-align: center;"><button type="button" class="btn btn-danger apagar" id="' + index + '">Apagar</button></td></tr>');
            } else if (item[1] !== null & item[2] !== null & item[3] !== null) {
                inicio = moment(item[2],'MM/DD/YYYY H:mm A');
                fim = moment(item[3],'MM/DD/YYYY H:mm A');
                diferenca = fim.diff(inicio);
                tempo = moment.duration(diferenca).days() + "D " + moment.duration(diferenca).hours() + "H " + moment.duration(diferenca).minutes() + "M";
                $("#listaTarefas").append('<tr><td>' + item[0] + '</td><td>' + item[1] + '</td><td>' + item[2] + '</td><td id="fim' + index + '">' + item[3] + '</td><td>' + tempo + '</td><td style="text-align: center;"><button type="button" class="btn btn-success editar1" id="' + index + '">Editar</button></td><td style="text-align: center;"><button type="button" class="btn btn-danger apagar" id="' + index + '">Apagar</button></td></tr>');
            }
        });

        $(".gravar1").click( function(){
            responsavel = $("#responsavelForm" + event.target.id).val();
            inicio = $("#datetimepicker" + event.target.id).val();
            if (responsavel == "" & inicio == "") {
                alert("Insira o nome do responsável pela tarefa, assim como a data e hora do início da tarefa.");
            } else if (responsavel == "") {
                alert("Insira o nome do responsável pela tarefa.");
            } else if (inicio == "") {
                alert("Insira a data e hora do início da tarefa.");
            } else {
                projeto[projetoNome][event.target.id][1] = responsavel;
                projeto[projetoNome][event.target.id][2] = inicio;
                localStorage.setItem("projeto", JSON.stringify(projeto));
                location.reload();
            }
        });

        $(".gravar2").click( function(){
            fim = $("#datetimepicker" + event.target.id).val();
            if (fim == "") {
                alert("Insira a data e hora do fim da tarefa.");
            } else {
                if (estado == "Ativo") {
                    projeto[projetoNome][event.target.id][3] = fim;
                    localStorage.setItem("projeto", JSON.stringify(projeto));
                    location.reload();
                } else if (estado == "Concluído") {
                    projetoConcluido[projetoNome][event.target.id][3] = fim;
                    localStorage.setItem("projeto", JSON.stringify(projeto));
                    location.reload();
                }
            }
        });

        if (estado == "Concluído") {
            total = 0;
            $.each(projetoConcluido[projetoNome], function( index, item ){
                inicio = moment(item[2],'MM/DD/YYYY H:mm A');
                fim = moment(item[3],'MM/DD/YYYY H:mm A');
                diferenca = fim.diff(inicio);
                tempo = moment.duration(diferenca).days() + "D " + moment.duration(diferenca).hours() + "H " + moment.duration(diferenca).minutes() + "M";
                $("#listaTarefas").append('<tr><td>' + item[0] + '</td><td>' + item[1] + '</td><td>' + item[2] + '</td><td id="fim' + index + '">' + item[3] + '</td><td>' + tempo + '</td><td style="text-align: center;"><button type="button" class="btn btn-success editar1" id="' + index + '">Editar</button></td><td style="text-align: center;"><button type="button" class="btn btn-danger apagar" id="' + index + '">Apagar</button></td></tr>');
                total += parseInt(diferenca);
            });
            tempoT = moment.duration(total).days() + "D " + moment.duration(total).hours() + "H " + moment.duration(total).minutes() + "M";
            $("#listaTarefas").append('<tr><td></td><td></td><td></td><td><b>Tempo Gasto Total<b></td><td><b>' + tempoT + '</b></td><td></td><td></td></tr>');
        }

        $(".editar1").click( function(){
            if (estado == "Ativo") {
                $("#fim" + event.target.id).replaceWith('<td><div style="position: relative"><input type="text" class="form-control datetimepicker-input" id="datetimepicker' + event.target.id + '" data-toggle="datetimepicker" data-target="#datetimepicker' + event.target.id + '"/><script type="text/javascript">$(function(){$("#datetimepicker' + event.target.id + '").datetimepicker({minDate: "' + projeto[projetoNome][event.target.id][2] + '", format: "MM/DD/YYYY H:mm A", icons: {time: "fa fa-clock", date: "fa fa-calendar", up: "fa fa-arrow-up", down: "fa fa-arrow-down" }});});</script></div></td>');
            } else if (estado == "Concluído") {
                $("#fim" + event.target.id).replaceWith('<td><div style="position: relative"><input type="text" class="form-control datetimepicker-input" id="datetimepicker' + event.target.id + '" data-toggle="datetimepicker" data-target="#datetimepicker' + event.target.id + '"/><script type="text/javascript">$(function(){$("#datetimepicker' + event.target.id + '").datetimepicker({minDate: "' + projetoConcluido[projetoNome][event.target.id][2] + '", format: "MM/DD/YYYY H:mm A", icons: {time: "fa fa-clock", date: "fa fa-calendar", up: "fa fa-arrow-up", down: "fa fa-arrow-down" }});});</script></div></td>');
            }
            $("#" + event.target.id).replaceWith('<button type="button" class="btn btn-success editar2" id="' + event.target.id + '">Gravar</button>');
        });

        $(document).on('click',".editar2", function(){
            fim = $("#datetimepicker" + event.target.id).val();
            if (fim == "") {
                alert("Insira a data e hora do fim da tarefa.");
            } else {
                if (estado == "Ativo") {
                    projeto[projetoNome][event.target.id][3] = fim;
                    localStorage.setItem("projeto", JSON.stringify(projeto));
                    location.reload();
                } else if (estado == "Concluído") {
                    projetoConcluido[projetoNome][event.target.id][3] = fim;
                    localStorage.setItem("projetoConcluido", JSON.stringify(projetoConcluido));
                    location.reload();
                }
            }
        });

        $("#apagarProjeto").click( function(){
            if (estado == "Ativo") {
                delete projeto[projetoNome];
                localStorage.setItem("projeto", JSON.stringify(projeto));
                window.location.replace("index.html#ativos");
            } else if (estado == "Concluído") {
                delete projetoConcluido[projetoNome];
                localStorage.setItem("projetoConcluido", JSON.stringify(projetoConcluido));
                window.location.replace("index.html#concluidos");
            }
        });

    }

});
