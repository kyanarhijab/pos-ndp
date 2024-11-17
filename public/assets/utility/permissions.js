
     $(document).ready(function ()  {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
      
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: APP_URL+"/utility/permission/",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'}
          ]
      });

    });
  