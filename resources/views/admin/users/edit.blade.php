@extends('admin.main')
@push('style')
@endpush
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">User</h3>
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
                        <a href="{{route('users.index')}}">Users</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <small>Edit User</small>
                    </li>
                </ul>
            </div>
            <div
                class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
            </div>
            <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex justify-content-center">
                        <div class="card-header">
                            <div class="card-title text-align-center">Edit User</div>
                        </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('users.update', $user->id)}}" id="form-user" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input
                                                type="name"
                                                class="form-control"
                                                id="name"
                                                placeholder="Enter Name"
                                                name="name"
                                                value="{{ $user->name }}"
                                            />
                                            <small id="errName" class="form-text text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address <span class="text-danger">*</span></label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="email"
                                                placeholder="Enter Email"
                                                autocomplete="off"
                                                name="email"
                                                value="{{ $user->email }}"
                                            />
                                            <small id="errEmail" class="form-text text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="password"
                                                placeholder="Password"
                                                name="password"
                                                autocomplete="off"

                                            />
                                            <small id="errPassword" class="form-text text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Confirm Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                autocomplete="off"
                                                placeholder="Confirm Password"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status <span class="text-danger">*</span></label>
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input
                                                        type="radio"
                                                        name="status"
                                                        value="1"
                                                        class="selectgroup-input"
                                                        @if($user->status)checked=""@endif
                                                    />
                                                    <span class="selectgroup-button fw-bold">Active</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input
                                                        type="radio"
                                                        name="status"
                                                        value="0"
                                                        class="selectgroup-input"
                                                        @if(!$user->status)checked=""@endif
                                                    />
                                                    <span class="selectgroup-button fw-bold">Inactive</span>
                                                </label>
                                            </div>
                                            <small id="errStatus" class="form-text text-danger"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="role"
                                            >Role <span class="text-danger">*</span></label
                                            >
                                            <select
                                                class="form-select"
                                                id="role"
                                                name="role"
                                            >
                                                <option value="ADMIN" @if($user->role == "ADMIN") selected @endif >ADMIN</option>
                                                <option value="SUPER ADMIN" @if($user->role == "SUPER ADMIN") selected @endif>SUPER ADMIN</option>
                                            </select>
                                            <small id="errRole" class="form-text text-danger"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" id="submit" type="submit">Submit</button>
                                    <a href="{{route('users.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script>
        $("#form-user").submit(function (e) {
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
                        window.location.href = '{{ route('users.index') }}';
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
            const errorFields = ["Name", "Email", "Password", "Status"];
            errorFields.forEach(field => {
                $(`#err${field}`).text("");
            });
        }
        function setError(errors) {
            console.log(errors)
            if (errors.name) {
                $("#errName").text(errors.name[0]);
            }
            if (errors.email) {
                $("#errEmail").text(errors.email[0]);
            }
            if (errors.password) {
                $("#errPassword").text(errors.password[0]);
            }
            if (errors.status) {
                $("#errStatus").text(errors.status[0]);
            }
        }
    </script>
@endpush
