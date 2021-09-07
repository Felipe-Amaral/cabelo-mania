window.$ = window.jQuery = require('jquery');

require('./bootstrap');
require('./../../node_modules/popper.js/dist/popper');
require('./../../node_modules/bootstrap/dist/js/bootstrap.bundle');
require('./../../node_modules/jquery/dist/jquery');
require('./../../node_modules/datatables.net-bs5');
require('./../../node_modules/datatables.net-dt/js/dataTables.dataTables');

require('./../../node_modules/@fortawesome/fontawesome-free/js/solid')
require('./../../node_modules/@fortawesome/fontawesome-free/js/fontawesome')

$(document).ready(function() {
    $('#articles').DataTable( {
        responsive: true,
        language: {
            processing:     "Processando...",
            search:         "Pesquisar&nbsp;:",
            lengthMenu:    "Mostrar _MENU_ itens",
            info:           "Mostrando itens de _START_ até _END_ de um total de _TOTAL_.",
            infoEmpty:      "Mostrando 0 registros",
            infoFiltered:   "(filtrado por _MAX_ itens no total)",
            infoPostFix:    "",
            loadingRecords: "Carregando...",
            zeroRecords:    "Nenhum item para exibir",
            emptyTable:     "Sem dados disponíveis na tabela",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Próximo",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": ative para classificar a coluna em ordem crescente",
                sortDescending: ": ative para classificar a coluna em ordem decrescente"
            }
        }
    } );

    $('#categories').DataTable( {
        responsive: true,
        language: {
            processing:     "Processando...",
            search:         "Pesquisar&nbsp;:",
            lengthMenu:    "Mostrar _MENU_ itens",
            info:           "Mostrando itens de _START_ até _END_ de um total de _TOTAL_.",
            infoEmpty:      "Mostrando 0 registros",
            infoFiltered:   "(filtrado por _MAX_ itens no total)",
            infoPostFix:    "",
            loadingRecords: "Carregando...",
            zeroRecords:    "Nenhum item para exibir",
            emptyTable:     "Sem dados disponíveis na tabela",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Próximo",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": ative para classificar a coluna em ordem crescente",
                sortDescending: ": ative para classificar a coluna em ordem decrescente"
            }
        }
    } );
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


