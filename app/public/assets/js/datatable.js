$(document).ready(function() {

    $.fn.dataTable.ext.errMode = 'throw';

    $.fn.dataTable.moment('DD-MMM-YYYY HH:mm');

    var title = 'LAPORAN PENGGUNAAN BARANG';
    var message = 'Seksi listrik dan Jaringan. \n Periode 2022-02-02';
    // var message = '<div style=\'font-size: 14px;\'>Seksi listrik dan Jaringan. \n Periode 2022-02-02</div>';
    $("#datatable").DataTable({
        colReorder: true,
        ordering: true,
        pageLength: pageshow,
        order: [
            [orderby, "desc"]
        ],
        columnDefs: [{
            target: orderby, //index of column
            type: 'datetime-moment'
        }],
        dom: "Bfrtip",
        buttons: [{
            extend: "collection",
            text: "Export",
            buttons: [{
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: exportcolumns
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: exportcolumns
                    },
                    messageTop: message,
                    title: title,
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: exportcolumns
                    },
                    messageTop: message,
                    title: title,
                    footer: "haidar",
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];

                        // jQuery selector to add a border
                        $('row c[r*="3"]', sheet).attr('s', '2');
                        $('row c[r^="D"]', sheet).attr('s', '2');
                    }
                },
                {
                    extend: 'pdfHtml5',
                    filename: 'biofarma',
                    exportOptions: {
                        columns: exportcolumns
                    },
                    messageTop: message,
                    // title: title,
                    customize: function(doc) {
                        doc.styles.title = {
                                color: 'black',
                                fontSize: '30',
                                background: '',
                                alignment: 'center'
                            },
                            doc.styles.message = {
                                color: 'black',
                                fontSize: '15',
                                background: '',
                                alignment: 'left'
                            }
                    }
                },
            ]
        }]
    });

});