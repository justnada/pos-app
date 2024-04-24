@extends('layouts.main')

@section('title')
    Category
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Category</li>
@endsection

@section('content')
    <div>
        <div class="d-flex justify-content-end">
            <a href="#" onclick="addData('{{ route('category.store') }}')"
                class="btn icon icon-left btn-primary mt-3 mb-4"><i class="me-2 bi bi-plus-circle"></i>Add New
                Data</a>
        </div>

        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Category</th>
                                <th>Setting</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @includeIf('category.form')
@endsection

@push('scripts')
    <script>
        let table;

        $(function() {
            $("#table1").dataTable().fnDestroy();
            $("#table2").dataTable().fnDestroy();

            table = $(".table").DataTable({
                responsive: true,
                processing: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('category.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'action',
                        searchable: false,
                        sortable: false
                    }
                ]
            })

            const setTableColor = () => {
                document.querySelectorAll('.dataTables_paginate .pagination').forEach(dt => {
                    dt.classList.add('pagination-primary')
                })
            }
            setTableColor()
            jquery_datatable.on('draw', setTableColor)

            $('#modal-form').on('submit', function(e) {
                if (!e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            alert('Failed to create category');
                            return;
                        })
                }
            });
        });

        function addData(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Add Category');
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=name]').focus();
        }

        function editData(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Category');
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=name]').focus();

            $.get(url)
                .done((response) => {
                    $('#modal-form [name=name]').val(response.name);
                })
                .fail((errors) => {
                    alert('Failed to edit category');
                    return;
                })
        }

        function deleteData(url) {
            if (confirm('Are you sure to delete this data?')) {
                $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Failed to delete category');
                    return;
                })
            }
        }
    </script>
@endpush
