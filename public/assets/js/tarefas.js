$(document).ready(function(){


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
