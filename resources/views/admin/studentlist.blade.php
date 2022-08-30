@extends('admin.admin_master')
@section('content')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            {{-- <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row --> --}}

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Students</h4>
                                <div class="table-responsive">
                                    <table id="studenttable" class="table hover table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th >Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                            <tr>
                                                <td></td>
                                                <td>{{$student->name}}</td>
                                                <td>{{$student->email}}</td> 
                                                {{-- <td><button type="button" class="btn mb-1  btn-info"><span class="mr-2"><i class="fa fa-pencil"></i></span>Edit</button></td> --}}
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button class="btn btn-primary py-1 px-3 dropdown-toggle btn-rounded " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a> 
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                            <a class="dropdown-item" href="{{route('admin.studentProfile',$student->id)}}">View Profile</a>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                                
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
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

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
      columns: [ 0, 1, 2 ]
    },
  },
  {
    extend: 'print',
    exportOptions: {
      columns: [ 0, 1, 2 ]
    },
  },
  {
    extend: 'csv',
    exportOptions: {
      columns: [ 0, 1, 2 ]
    },
  },
  {
    extend: 'pdf',
    exportOptions: {
      columns: [ 0, 1, 2 ]
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
