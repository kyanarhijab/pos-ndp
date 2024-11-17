

function table_data() {

    var roles =  $('#select-roles-filter').val();       
    var token =  $("input[name*='_token']").val();

    var table = $('.data-table').DataTable({
        responsive: true,
		serverSide: true,
		processing: true,
		autoWidth: false,
		destroy: true,
		Scrollx: true,
		scrollCollapse: true,
		info: false,
		searching: true,
		paging: true,
        ajax: {
            url: APP_URL+"/utility/role/",
            type: "post",
            data: function (d) {
                  d.id_role = roles;
                  d._token = token;
            },
        },
        columns: [
            {data: 'id' , visible:  false},
            {data: 'name2' , visible: false },
            {data: 'namee' },
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

}

$(document).ready(function ()  {
      
        //var roles =  $('#select-roles-filter').val();       
        //var token =  $("input[name*='_token']").val();

        table_data();
        
        $('#btn-filter-data').click(function(){
            $('#card-filter').removeClass('hide');
            $('#card-table').addClass('hide');
            $('#card-filter').animatecssjs('zoomIn');
        });

        $('#btn-cancel-filter').click(function(){
            $('#card-filter').addClass('hide');
            $('#card-table').removeClass('hide');
            $('#card-table').animatecssjs('zoomIn');
        });

        $('#bt-submit-filter').click(function(){
            table_data();
            setTimeout(function () {
                $('#card-filter').addClass('hide');
                $('#card-table').removeClass('hide');
                $('#card-table').animatecssjs('zoomIn');
            }, 650);
        });

});
  