
     $(document).ready(function ()  {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
      
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: APP_URL+"/utility/user/",
          columns: [
              {data: 'username', name: 'username'},
              {data: 'name', name: 'name', },
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  