@extends('layout.admin.app')
@section('css')
    <style>
        .alert-warning {
            font-size: 14px;
        }

        .fs-12 {
            font-size: 12px;
        }

        .ck-editor__editable_inline:not(.ck-comment__input *) {
            height: 550px;
            overflow-y: auto;
        }
    </style>
@endsection
@section('content')
    @include('layout.admin.header')
    @include('layout.admin.sidebar')
    <main id="main" class="main" style="overflow: hidden !important">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/blogs">Blogs</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                                    <h5 class="card-title">Create New Blogs <span>| {{ now()->year }}</span></h5>
                                    <a class="btn btn-primary" href="{{ url('/admin/blogs') }}">
                                        <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Back to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('create-blogs') }}" method="POST" enctype="multipart/form-data"
                                    id="form-create">
                                    @csrf
                                    <div class="col py-3">
                                        @if ($errors->any())
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Failed Create Blogs!</strong> You have to check some fields.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                <div class="col-md-2 col">
                                                    <label for="" class="form-label">Thumbnail Preview</label>
                                                    <div class="col d-flex align-items-center justify-content-center border rounded"
                                                        style="min-height: 110px">
                                                        <img class="img-preview img-fluid" id="img_preview">
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-column gap-2">
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Thumbnail <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="file" class="form-control" id="thumbnail"
                                                            onchange="previewImage()" name="blog_thumbnail">
                                                        @error('blog_thumbnail')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Alt <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="alt_en"
                                                            name="blog_alt" value="{{ old('blog_alt') }}">
                                                        @error('blog_alt')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs nav-tabs-bordered pt-3" id="borderedTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#bordered-english" type="button" role="tab" aria-controls="english" aria-selected="true" onclick="selectLang('en')">English</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="indo-tab" data-bs-toggle="tab" data-bs-target="#bordered-indo" type="button" role="tab" aria-controls="indo" aria-selected="false" onclick="selectLang('id')">Indonesia</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="borderedTabContent">
                                                {{-- Tab English --}}
                                                <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                                    <div class="col py-2">
                                                        <h5 class="card-title">Form English</h5>
                                                        <div class="col d-flex flex-column gap-2">
                                                            <div class="col-12">
                                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                                    <div class="col">
                                                                        <label for="" class="form-label">
                                                                            Category <span style="color: var(--red)">*</span>
                                                                        </label>
                                                                        <div class="col">
                                                                            <select class="select2" name="category[en]" id="category-en" disabled>
                                                                                <option value=""></option>
                                                                            </select>
                                                                        </div>
                                                                        @error('category.en')
                                                                            <small
                                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                @if ($errors->any())
                                                                    <small class="alert text-danger ps-0 fs-12">Please re-select some of
                                                                        these fields</small>
                                                                @endif
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Title <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="blog_title_en"
                                                                    name="blog_title[en]" value="{{ old('blog_title.en') }}"
                                                                    onchange="createSlug('en')">
                                                                @error('blog_title.en')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Slug <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="blog_slug_en"
                                                                    name="blog_slug[en]" value="{{ old('blog_slug.en') }}">
                                                                @error('blog_slug.en')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Summary <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <textarea class="form-control summary" style="height:100px;" name="blog_summary[en]" id="blog_summary">{{ old('blog_summary.en') }}</textarea>
                                                                @error('blog_summary.en')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Description <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <small class="alert d-block p-0 m-0 mb-2 fs-12">Note: Please Use
                                                                    <strong>'Heading 2'</strong> for a <strong>Section</strong></small>
                                                                <textarea class="description_en" name="blog_description[en]" id="blog_description_en">
                                                                    {{ old('blog_description.en') }}
                                                                </textarea>
                                                                @error('blog_description.en')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    SEO Title <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="seo_title"
                                                                    name="seo_title[en]" value="{{ old('seo_title.en') }}">
                                                                @error('seo_title.en')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    SEO Keyword <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="seo_keyword"
                                                                    name="seo_keyword[en]" placeholder="Add keywords separated by commas (,)"
                                                                    value="{{ old('seo_keyword.en') }}">
                                                                @error('seo_keyword.en')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    SEO Description <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="seo_desc"
                                                                    name="seo_desc[en]" value="{{ old('seo_desc.en') }}">
                                                                @error('seo_desc.en')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
            
                                                {{-- Tab Indonesia --}}
                                                <div class="tab-pane fade" id="bordered-indo" role="tabpanel" aria-labelledby="indo-tab">
                                                    <div class="col py-2">
                                                        <h5 class="card-title">Form Indonesia</h5>
                                                        <div class="col d-flex flex-column gap-2">
                                                            <div class="col-12">
                                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                                    <div class="col">
                                                                        <label for="" class="form-label">
                                                                            Category <span style="color: var(--red)">*</span>
                                                                        </label>
                                                                        <div class="col">
                                                                            <select class="select2" name="category[id]" id="category-id" disabled>
                                                                                <option value=""></option>
                                                                            </select>
                                                                        </div>
                                                                        @error('category.id')
                                                                            <small
                                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                @if ($errors->any())
                                                                    <small class="alert text-danger ps-0 fs-12">Please re-select some of
                                                                        these fields</small>
                                                                @endif
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Title <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="blog_title_id"
                                                                    name="blog_title[id]" value="{{ old('blog_title.id') }}"
                                                                    onchange="createSlug('id')">
                                                                @error('blog_title.id')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Slug <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="blog_slug_id"
                                                                    name="blog_slug[id]" value="{{ old('blog_slug.id') }}">
                                                                @error('blog_slug.id')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Summary <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <textarea class="form-control summary" style="height:100px;" name="blog_summary[id]" id="blog_summary">{{ old('blog_summary.id') }}</textarea>
                                                                @error('blog_summary.id')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Description <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <small class="alert d-block p-0 m-0 mb-2 fs-12">Note: Please Use
                                                                    <strong>'Heading 2'</strong> for a <strong>Section</strong></small>
                                                                <textarea class="description_id" name="blog_description[id]" id="blog_description_id">
                                                                    {{ old('blog_description.id') }}
                                                                </textarea>
                                                                @error('blog_description.id')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    SEO Title <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="seo_title"
                                                                    name="seo_title[id]" value="{{ old('seo_title.id') }}">
                                                                @error('seo_title.id')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    SEO Keyword <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="seo_keyword"
                                                                    name="seo_keyword[id]" placeholder="Add keywords separated by commas (,)"
                                                                    value="{{ old('seo_keyword.id') }}">
                                                                @error('seo_keyword.id')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    SEO Description <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="seo_desc"
                                                                    name="seo_desc[id]" value="{{ old('seo_desc.id') }}">
                                                                @error('seo_desc.id')
                                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col d-flex flex-md-row flex-column gap-md-4 gap-2 mt-2">
                                                            <div class="col">
                                                                <label for="" class="form-label">
                                                                    Duration Read <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control" id="duration_read"
                                                                        name="duration_read" value="{{ old('duration_read') }}">
                                                                    <span class="input-group-text" style="font-size: 80%">
                                                                        Minute
                                                                    </span>
                                                                </div>
                                                                @error('duration_read')
                                                                    <small
                                                                        class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col">
                                                                <div class="col d-flex flex-row justify-content-between">
                                                                    <label for="" class="form-label">
                                                                        Publish Date
                                                                    </label>
                                                                    <small
                                                                        class="alert text-danger p-0 m-0 fs-12 text-decoration-underline"
                                                                        onclick="clearDate()" style="cursor: pointer">Clear
                                                                        Date</small>
                                                                </div>
                                                                <input type="date" class="form-control" id="publish_date"
                                                                    name="publish_date" value="{{ old('publish_date') }}">
                                                                @error('publish_date')
                                                                    <small
                                                                        class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col">
                                                                <label for="" class="form-label">
                                                                    Blog Status <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <div class="col d-flex flex-row py-1 gap-md-4 gap-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" checked="checked"
                                                                            name="blog_status" id="blog_status_draft" value="draft"
                                                                            onchange="clearDate(); $('#publish_date').attr('disabled', false);"
                                                                            {{ old('blog_status') == 'draft' ? 'checked' : '' }}>
                                                                        <label class="form-label card-title p-0 m-0"
                                                                            for="blog_status_draft">
                                                                            Draft
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="blog_status" id="blog_status_publish"
                                                                            value="publish" onchange="clearDate(); $('#publish_date').attr('disabled', true);"
                                                                            {{ old('blog_status') == 'publish' ? 'checked' : '' }}>
                                                                        <label class="form-label card-title p-0 m-0"
                                                                            for="blog_status_publish">
                                                                            Publish
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                @error('blog_status')
                                                                    <small
                                                                        class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
            
                                                        <div class="text-center mt-4">
                                                            <button type="submit" class="btn btn-primary" id="submit">
                                                                <i class="fa-solid fa-check me-1"></i> Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            selectLang('en')
            createEditor('description_en')
            createEditor('description_id')
        })

        function previewImage() {
            const image = document.querySelector('#thumbnail')
            const imgPreview = document.querySelector('#img_preview')
            imgPreview.style.display = 'block'
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        };

        function createSlug(lang) {
            const blog_title = document.getElementById('blog_title_'+lang).value.toLowerCase().replace(/[^a-zA-Z ]/g, "").split(
                ' ').join('-');
            const blog_slug = document.getElementById('blog_slug_'+lang);
            blog_slug.value = blog_title;
        };

        function clearMentor() {
            $('#mentor').val(null).trigger('change');
        }

        function clearDate() {
            $('#publish_date').val(null).trigger('change');
        }

        // function getDuration(inst) {
        //     // console.log(inst.plugins.wordcount.body.getWordCount());
        //     var wordcount = inst.plugins.wordcount.body.getWordCount();
        //     $('#duration_read').val(Math.round(wordcount / 200));
        // }

        function createEditor( elementClass )
        {
            ClassicEditor
                .create(document.querySelector('.'+elementClass))
                .then((editor) => {
                    // Function to count words
                    function countWords() {
                        // Get editor content
                        const content = editor.getData();
    
                        // Count words (split by spaces)
                        const wordCount = content.split(/\s+/).length - 1;
                        $('#duration_read').val(Math.round(wordCount / 200));
                    }
    
                    // Call countWords() initially
                    countWords();
    
                    // Call countWords() whenever editor content changes
                    editor.model.document.on('change:data', countWords);
    
                })
                .catch(error => {
                    console.error('Error during initialization of the editor', error);
                });
        }

        // tinymce.init({
        //     selector: '.description',
        //     width: 'auto',
        //     height: '350',
        //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        //     paste_as_text: false,
        //     setup: function(ed) {
        //         ed.on("change", function() {
        //             getDuration(ed); // function for duration minute in Blogs
        //         })
        //     }
        // });

        async function selectLang(lang) {
            let url_category = "{{ url('api/category') }}/" + lang

            // Select Blog Category
            try {
                const response = await axios.get(url_category);
                let data = response.data
                $('#category-'+lang).html('<option value=""></option>')
                data.forEach(element => {
                    $('#category-'+lang).append(
                        '<option value="' + element.id + '">' +
                        element.category_name +
                        '</option>'
                    )
                    // console.log(element);
                });

                $("#category-"+lang).attr('disabled', false);
            } catch (error) {
                console.error(error);
            }
        }
    </script>
@endsection
