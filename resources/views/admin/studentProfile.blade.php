@extends('admin.admin_master')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Student Name : @foreach ($student as $item)
                                {{$item->name}}
                            @endforeach</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="studenttable" class="table hover table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Courses Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student as $item)
                                        <tr>
                                            <td></td>
                                            <td>{{$item->name}}</td>
                                           
                                            
                                        </tr>
                                        @endforeach
                                      
                                   
                                
                                    </tbody>
                                 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        
        var t = $('#studenttable').DataTable( {
            dom: 'Blfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
        buttons: [
  {
    extend: 'excel',
    exportOptions: {
      columns: [ 0, 1 ]
    },
  },
  {
    extend: 'print',
    exportOptions: {
      columns: [ 0, 1]
    },
  },
  {
    extend: 'csv',
    exportOptions: {
      columns: [ 0, 1 ]
    },
  },
  {
    extend: 'pdf',
    exportOptions: {
      columns: [ 0, 1]
    },
  },
],
initComplete: function () {
            var btns = $('.dt-button');
            btns.addClass('btn btn-primary');
            btns.removeClass('dt-button');

        },
lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
  columnDefs: [
            {
                searchable: false,
                orderable: false,
                targets: 0,
            },
        ],
        order: [[1, 'asc']],
    } );
    t.on('order.dt search.dt', function () {
        let i = 1;
 
        t.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
            this.data(i++);
        });
    }).draw();
} );
</script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>t
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>



    
@endsection