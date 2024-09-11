@extends('layout.admin.app')
@section('css')
    <style>
        .alert-warning {
            font-size: 14px;
        }

        .fs-12 {
            font-size: 12px;
        }

        .vr {
            background-color: #ebeef4;
            width: 2px;
            opacity: 100%;
        }

        .pic-profile {
            border: 2px solid #ebeef4;
            border-radius: 5px;
        }

        .pic-profile img {
            border-radius: 5px;
        }

        .img-blog {
            min-width: 100% !important;
            max-height: 400px !important;
            object-fit: cover;
        }

        .select-position *,
        .select-position:active * {
            font-size: 14px !important;
            box-shadow: none !important;
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
                    <li class="breadcrumb-item"><a href="/admin/blogs">Blogs</a></li>
                    <li class="breadcrumb-item active">Detail</li>
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
                                    <div>
                                        <h5 class="card-title">Detail Blogs <span>| {{ now()->year }}</span></h5>
                                    </div>
                                    <div class="col d-flex flex-row gap-2" style="max-width: fit-content">
                                        <div class="p-0" style="max-width: fit-content">
                                            <a type="button" class="btn btn-success d-inline"
                                                href="{{ url('id-' . $blog->lang . '/blog/' . $blog->slug) }}"
                                                target="_blank">
                                                <i class="fa-solid fa-magnifying-glass me-md-1 me-0"></i><span
                                                    class="d-md-inline d-none"> Preview Blogs</span>
                                            </a>
                                        </div>
                                        <div class="p-0" style="max-width: fit-content">
                                            <a type="button" class="btn btn-warning d-inline"
                                                href="/admin/blogs/{{ $blog->id }}/edit">
                                                <i class="fa-solid fa-pen-to-square me-md-1 me-0"></i><span
                                                    class="d-md-inline d-none"> Edit Blogs</span>
                                            </a>
                                        </div>
                                        <div class="p-0" style="max-width: fit-content">
                                            <a type="button" class="btn btn-primary d-inline"
                                                href="{{ url('/admin/blogs') }}">
                                                <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span
                                                    class="d-md-inline d-none"> Back to List</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col pb-4">
                                    <div class="col d-flex flex-column gap-4">
                                        <div class="pic-profile">
                                            <img class="img-blog"
                                                src="{{ asset('uploaded_files/' . 'blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                                alt="">
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center gap-2 px-1">
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Title</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->blog_title }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Slug</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->slug }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Category</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->category->category_name }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Mentor</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->mt_id == null || $blog->mt_id == 0 ? '-' : $blog->mentor->mentor_fullname }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Description</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0 desc-textarea"
                                                    style="max-height: 300px; overflow: auto">
                                                    {!! $blog->blog_description !!}
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">SEO Title</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->seo_title }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">SEO Keyword</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->seo_keyword }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">SEO Description</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->seo_desc }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Duration Read</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->duration_read }} Minute
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Publish Date</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p class="m-0">
                                                        {{ $blog->publish_date != null ? date('l, j F Y', strtotime($blog->publish_date)) : '-' }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="field-detail d-flex flex-row align-items-start">
                                                <div class="col-md-2 col-3 p-0">
                                                    <h6 class="m-0 card-title p-0">Status</h6>
                                                </div>
                                                <div class="col-1 text-center p-0" style="max-width: 22px">
                                                    <p class="m-0">:</p>
                                                </div>
                                                <div class="col p-0">
                                                    <p
                                                        class="card-title text-uppercase p-0 m-0 {{ $blog->blog_status == 'publish' ? 'text-success' : 'text-danger' }}">
                                                        {{ $blog->blog_status }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs nav-tabs-bordered mt-4" id="borderedTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="read-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-read" type="button" role="tab"
                                            aria-controls="read" aria-selected="true">Blog Read</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="borderedTabContent">
                                    {{-- Tab Blog Read --}}
                                    <div class="tab-pane fade show active" id="bordered-read" role="tabpanel"
                                        aria-labelledby="read-tab">
                                        <div class="card-body p-0">
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <h5 class="card-title">List Blog Read <span>| {{ now()->year }}</span>
                                                </h5>
                                            </div>
                                            <table class="table display" id="listblogread" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">IP Address</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
                    <p id="desc-info">Are you sure, you want to Delete this blog widget?</p>
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
        $(document).ready(function() {
            $('#select_article').select2({
                dropdownParent: $("#widget"),
                placeholder: "Select an article",
                allowClear: true
            });
        });

        // List Blog Read
        $(function() {
            var blog_id = '<?php echo $blog->id; ?>';
            $('#listblogread').DataTable({
                scrollX: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{{ url('/admin/blogs/read/data/') }}' + '/' + blog_id,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        class: 'w-25'
                    },
                    {
                        data: 'ip_address',
                        name: 'ip_address'
                    },
                ]
            });
        });

        function formCreate(id) {
            $("#title-info").text("Add new Blog Widget");
            $('#image').val('');
            $('#title').val('');
            tinymce.get("description").setContent('');
            $('#link').val('');
            $('#position').val('').change();
            $('#button_name').val('')
            $('#form_widget').attr('action', '{{ url('/admin/blogs/widget/') }}' + '/' + id);
        };

        function viewWidget(blog_id, id, title, desc, link, position, button, image) {
            if (image) {
                $('#switchArticle').prop('checked', true)
                $('#image').val(image);
                isArticle();
            }

            $("#title-info").text("Update Blog Widget");
            $('#title').attr('value', title);
            tinymce.get("description").setContent(desc);
            $('#link').attr('value', link);
            $('#position').val(position).change();
            $('#button_name').val(button)
            $('#form_widget').attr('action', '{{ url('/admin/blogs/widget/') }}' + '/' + blog_id + '/' + id);
        }

        function formDelete(blog_id, id) {
            $('#form_delete').attr('action', '{{ url('/admin/blogs/widget/delete/') }}' + '/' + blog_id + '/' + id);
        };
        $(document).ajaxComplete(function() {
            // Tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
                tooltipTriggerEl))
        });


        function isArticle() {
            const is_article = $('#switchArticle').is(':checked')

            if (is_article) {
                $('#article').prop('hidden', false);
            } else {
                $('#image').val('')
                $('#article').prop('hidden', true);
            }
        }


        function selectArticle() {
            const id = $('#select_article').val()
            const blog = $('#select_article').find(':selected').data('blog')
            const localization = blog.lang == "id" ? "id-id" : "id-en"

            $('#image').val('uploaded_files/blogs/' + moment(blog.created_at).format('YYYY') + '/' + moment(blog.created_at)
                .format('MM') + '/' + blog
                .blog_thumbnail);
            $('#title').val(blog.blog_title);
            tinymce.get("description").setContent(blog.seo_desc);
            $('#link').val('{{ url('') }}' + '/' + localization + '/blog/' + blog.slug);
            $('#button_name').val('Read More');
        }
    </script>
@endsection
