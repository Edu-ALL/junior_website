@extends('layout.admin.app')
@section('css')
    <style>
        .paginate_button a,
        .paginate_button a:hover,
        .paginate_button a:focus,
        .form-select:focus {
            box-shadow: none !important;
        }

        .dataTables_info,
        .dataTables_paginate {
            margin-top: 12px !important;
        }
    </style>
@endsection
@section('content')
    @include('layout.admin.header')
    @include('layout.admin.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <div class="col d-flex flex-column gap-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="card-title">List Blogs <span>| {{ now()->year }}</span></h5>
                                    <a class="btn btn-primary" href="{{ url('/admin/blogs/create') }}">
                                        <i class="fa-solid fa-plus me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Create new</span>
                                    </a>
                                </div>
                                <table class="table display" id="listblog" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Language</th>
                                            <th scope="col">Highlight</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Last Updated</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Modal Deactive --}}
    <div class="modal fade" id="draft" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header">
                    <div class="col d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-circle-info"></i>
                        <h6 class="modal-title ms-2" id="title-info">Set to Draft</h6>
                    </div>
                </div>
                <div class="modal-body text-center mt-3 mb-1">
                    <p id="desc-info">Are you sure, you want to change the status of this Blog to Draft?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_draft">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--danger);">Set</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Activate --}}
    <div class="modal fade" id="publish" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header">
                    <div class="col d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-circle-info"></i>
                        <h6 class="modal-title ms-2" id="title-info">Set to Publish</h6>
                    </div>
                </div>
                <div class="modal-body text-center mt-3 mb-1">
                    <p id="desc-info">Are you sure, you want to change the status of this Blog to Publish?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_publish">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--success);">Set</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Delete --}}
    <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header">
                    <div class="col d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-circle-info"></i>
                        <h6 class="modal-title ms-2" id="title-info">Delete</h6>
                    </div>
                </div>
                <div class="modal-body text-center mt-3 mb-1">
                    <p id="desc-info">Are you sure, you want to Delete this blog?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_delete">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--danger);">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // List Blogs
        $(function() {
            $('#listblog').DataTable({
                scrollX: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{{ route('data-blogs') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'blog_title',
                        name: 'blog_title'
                    },
                    {
                        data: 'category',
                        name: 'category'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'language',
                        name: 'language',
                        class: 'text-center'
                    },
                    {
                        data: 'highlight',
                        name: 'highlight'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        class: 'text-center'
                    },
                    {
                        data: 'last_updated',
                        name: 'last_updated',
                        class: 'text-center',
                        type: 'date',
                        "render": function(value) {
                            if (value === null) return "";
                            return moment(value).format('MMM, Do YYYY');
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        class: 'text-center'
                    },
                ]
            });
        });

        function formDraft(id) {
            $('#form_draft').attr('action', '{{ url('/admin/blogs/draft/') }}' + '/' + id);
        };

        function formPublish(id) {
            $('#form_publish').attr('action', '{{ url('/admin/blogs/publish/') }}' + '/' + id);
        };

        function formDelete(id) {
            $('#form_delete').attr('action', '{{ url('/admin/blogs/delete/') }}' + '/' + id);
        };

        $(document).ajaxComplete(function() {
            // Tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
                tooltipTriggerEl))
        });
    </script>
@endsection
