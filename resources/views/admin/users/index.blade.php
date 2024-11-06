@extends('admin.main')
@push('style')
<link href="{{ asset('assets_backend/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">User</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <span>
                            <i class="icon-home"></i>
                        </span>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <small>Users</small>
                    </li>
                </ul>
            </div>
            <div
                class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="{{route('users.create')}}" class="btn btn-primary btn-round">Add User</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table
                                    id="user-datatables"
                                    class="display table table-striped table-hover"
                                >
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
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
@push('script')
    <script src="{{ asset('assets_backend/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(function (){
            articles()
        })
        let table;
        $('#year').on('change', () => {
            articles()
        })
        $('#is_published').on('change', () => {
            articles()
        })
        $('#month').on('change', () => {
            articles()
        })
        $('#category').on('change', () => {
            articles()
        })
        const articles = ()=>{
            table = $("#user-datatables").DataTable({
                processing: true,
                destroy: true,
                serverSide: true,
                deferRender: true,
                responsive: true,
                pageLength: 10,
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('users.datatable') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
                columns: [{
                    data: 'no',
                    name: 'no',
                    class: 'text-center'
                },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            return data? '<button type="button" class="btn btn-xs btn-icon btn-round btn-success"><i class="fa fa-check"></i></button>': '<button type="button" class="btn btn-xs btn-icon btn-round btn-danger"><i class="fa fa-times"></i></button>';
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'role',
                        name: 'role',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        class: 'text-center'
                    },
                ],
                columnDefs: [{
                    'sortable': false,
                    'searchable': false,
                    'targets': [0, -1]
                }],
                order: [
                    [1, 'asc']
                ]
            });
            table.on('draw.dt', function() {
                var info = table.page.info();
                table.column(0, {
                    search: 'applied',
                    order: 'applied',
                    page: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + info.start;
                });
            });
        }
    </script>
    <script>
        const delete_article = (id)=>{
            swal({
                title: "Are you sure?",
                text: "Do you want to delete the article?",
                type: "warning",
                icon:"info",
                dangerMode: true,
                buttons: {
                    cancel: {
                        visible: true,
                        value: null,
                        visible: true,
                        text: "No, cancel!",
                        className: "btn btn-danger",
                        closeModal: true,
                    },
                    confirm: {
                        text: "Yes, delete it!",
                        className: "btn btn-success",
                    },
                },
            }).then((willDelete) => {
                if(willDelete){
                    $.ajax({
                    url: `{{ route('users.destroy', ':id') }}`.replace(':id', id),
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $.notify({
                        message: "Your request been deleted successfully!",
                        title: "Success!",
                        icon: "fa fa-check"
                        }, {
                            type: "success",
                            placement: {
                                from: "top",
                                align: "right",
                            },
                            time: 1000,
                            delay: 0,
                        });
                        $("#user-datatables").DataTable().ajax.reload();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) { // Unprocessable Entity
                        const errors = xhr.responseJSON.errors;
                        console.log(errors);

                        if(errors.users){
                            $.notify({
                                message: "The requested resource was not found!",
                                title: "Error 404!",
                                icon: "fa fa-solid fa-exclamation-triangle"
                            }, {
                                type: "danger",
                                placement: {
                                    from: "top",
                                    align: "right",
                                },
                                time: 2000,
                                delay: 0,
                            });
                        }
                        
                        }else if (xhr.status === 403) { // Unprocessable Entity
                            const errors = xhr.responseJSON.errors;
                            if(errors){
                                $.notify({
                                    message: errors,
                                    title: "Error 403!",
                                    icon: "fa fa-solid fa-exclamation-triangle"
                                }, {
                                    type: "danger",
                                    placement: {
                                        from: "top",
                                        align: "right",
                                    },
                                    time: 2000,
                                    delay: 0,
                                });
                            }else {
                                console.error('An unexpected error occurred.');
                            }
                        }
                    }
                });
                }else {
                    $.notify({
                        message:"Your delete request was canceled!",
                        title:"Canceled!",
                        icon:"fa fa-solid fa-ban"
                    }, {
                        type: "warning",
                        placement: {
                            from: "top",
                            align: "right",
                        },
                        time: 1000,
                        delay: 0,
                    });
                }
            });

        }

    </script>
@endpush
