@extends('admin.main')
@push('style')
    <style>
        .img-preview {
            max-width: 50%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
    <!-- Include stylesheet -->
    <link href="{{asset('assets_backend/quill/dist/quill.snow.css')}}" rel="stylesheet" />
    <!-- Select 2 -->
    <link href="{{ asset('assets_backend/select2/dist/css/select2.min.css') }}" rel="stylesheet" />

@endpush
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Article</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <span href="#">
                            <i class="icon-home"></i>
                        </span>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('articles.index')}}">Articles</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <small>Add Article</small>
                    </li>
                </ul>
            </div>
            <div
                class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Article</div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('articles.store')}}" id="form-article" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="title">Title <span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="title" name="title" rows="5"></textarea>
                                            <small id="errTitle" class="form-text text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1"
                                            >Category <span class="text-danger">*</span></label
                                            >
                                            <select
                                                class="form-select select2"
                                                id="category"
                                                name="category"
                                            >
                                                <option value="news" >News</option>
                                                <option value="article">Article</option>
                                            </select>
                                            <small id="errCategory" class="form-text text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="image"
                                            >Image <span class="text-danger">*</span></label
                                            >
                                            <input
                                                type="file"
                                                class="form-control"
                                                id="image"
                                                name="image"
                                            />
                                            <div id="imagePreviewContainer" class="mt-3" style="display: none;">
                                                <label>Image Preview</label>
                                                <img id="imagePreview" class="img-preview" src="" alt="Image Preview">
                                            </div>
                                            <small id="errImage" class="form-text text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status <span class="text-danger">*</span></label>
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input
                                                        type="radio"
                                                        name="is_published"
                                                        value="1"
                                                        class="selectgroup-input"
                                                    />
                                                    <span class="selectgroup-button fw-bold">Published</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input
                                                        type="radio"
                                                        name="is_published"
                                                        value="0"
                                                        class="selectgroup-input"
                                                        checked=""
                                                    />
                                                    <span class="selectgroup-button fw-bold">Unpublished</span>
                                                </label>
                                            </div>
                                            <small id="errIsPublished" class="form-text text-danger"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <!-- Create the editor container -->
                                            <label for="content">Description <span class="text-danger">*</span></label>
                                            <div id="content" class="form-control">
                                            </div>
                                            <small id="errDescription" class="form-text text-danger"></small>
                                        </div>
                                    <input type="hidden" name="description" id="description" required>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" id="submit" type="submit">Submit</button>
                                    <a href="{{route('articles.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <!-- Include the Quill library -->
    <script src="{{asset('assets_backend/quill/dist/quill.js')}}"></script>
    <!-- Initialize Quill editor -->
    <script src="{{ asset('assets_backend/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script>
        const toolbarOptions = [
            ['bold', 'italic', 'underline'],
            ['blockquote'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
        ];
        const quill = new Quill('#content', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions

            }
        });
    </script>
    <script>
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('#imagePreview');
        const imagePreviewContainer = document.querySelector('#imagePreviewContainer');
        image.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    imagePreview.src = event.target.result;
                    imagePreviewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                imagePreviewContainer.style.display = 'none';
            }
        });
    </script>
    <script>
        const content = quill.root.innerHTML
        $('#content').val(content);
        $("#alert_demo_8").click(function (e) {

        });
        $("#form-article").submit(function (e) {
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Do you want to submit the form?",
                type: "warning",
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
                        text: "Yes, submit it!",
                        className: "btn btn-success",
                    },
                },
            }).then((willSubmit) => {
                if (willSubmit) {
                    submitForm(this)
                } else {
                    $.notify({
                        message:"Your form submission was canceled!",
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

        });
        const submitForm = (thisForm)=>
        {
            const description = quill.root.innerHTML;
            $('#description').val(description);

            const form = $(thisForm);
            const actionUrl = form.attr("action");
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: new FormData(thisForm),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    $.notify({
                        message: "Your form has been submitted successfully!",
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
                    setTimeout(function() {
                        window.location.href = '{{ route('articles.index') }}';
                    }, 1000); // Delay for 1 seconds
                },
                error: function (xhr) {
                    if (xhr.status === 422) { // Unprocessable Entity
                        const errors = xhr.responseJSON.errors;
                        resetError();
                        setError(errors);
                    } else {
                        console.error('An unexpected error occurred.');
                    }
                },
            });
        }
        function resetError(is_success = false) {
            const errorFields = ["Title", "Category", "Image", "IsPublished", "Description"];
            errorFields.forEach(field => {
                $(`#err${field}`).text("");
            });
        }
        function setError(errors) {
            if (errors.title) {
                $("#errTitle").text(errors.title[0]);
            }
            if (errors.category) {
                $("#errCategory").text(errors.category[0]);
            }
            if (errors.image) {
                $("#errImage").text(errors.image[0]);
            }
            if (errors.is_published) {
                $("#errIsPublished").text(errors.is_published[0]);
            }
            if (errors.description) {
                $("#errDescription").text(errors.description[0]);
            }
        }
    </script>
@endpush
