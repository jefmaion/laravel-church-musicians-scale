
 options = {
    language: {
        url: "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }, 
    aaSorting: [],
    paging: true, 
    // info: true,
    // bLengthChange: false,
}


$('.datatable').DataTable(options);


var oTable = $('table').DataTable();  

$('.datatable-search').keyup(function(){
    oTable.search( $(this).val() ).draw();
})
