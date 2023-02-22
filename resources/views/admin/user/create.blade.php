@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Car</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0" style="background-color: white !important;">
                            <li class="breadcrumb-item">Add New</li> <!-- change here -->
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body p-4">
                    <form class="form-body" id="add-user-form">
                      <div class="row">
                         <div class="mb-3">
                            <div class="mb-3 col-lg-8">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                            </div>
                            <div class="mb-3 col-lg-8">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="mb-3 col-lg-8">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                </div>
                            </div>
                            <div class="mb-3 col-lg-8">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" class="form-control border-end-0" id="password_confirmation" name="password_confirmation" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                </div>
                            </div>
                              <div class="col-lg-8">
                                <div class="d-grid">
                                   <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                         </div>
                     </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
<script>    
    $(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    $(document).on('submit', '#add-user-form', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        formData.append('name', $('input[name="name"]').val());
        formData.append('email', $('input[name="email"]').val());
        formData.append('password', $('input[name="password"]').val());
        formData.append('password_confirmation', $('input[name="password_confirmation"]').val());

        $.ajax({
            type: 'POST',
            url: '{{ route("admin.user-management.create-post") }}',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (!data.status) {
                    // -- Remove all previous error.
                    $('.cbwus-error-after-input').remove();
                    $('input').removeClass('cbwus-error-input');
                    $('select').removeClass('cbwus-error-input');
                    
                    $('#toggle-password1').css('padding-bottom', '30px');
                    var focusFirst = false;
                    for (var errorInput in data.error) {
                        if (!focusFirst) {
                            $('input[name="' + errorInput + '"]').focus();
                        }

                        // -- Hold the error message HTML.
                        var inputError = `<div class="cbwus-error-after-input text-danger fw-400 pt-1 pl-1">_replaceErrorHere_</div>`

                        // -- Append error message in the parent element and style the input.
                        $('input[name="' + errorInput + '"]').addClass('cbwus-error-input');
                        $('input[name="' + errorInput + '"]').parent().append(inputError.replace('_replaceErrorHere_', data.error[errorInput]))

                        // -- Append error message in the parent element and style the input.
                        $('select[name="' + errorInput + '"]').addClass('cbwus-error-input');
                        $('select[name="' + errorInput + '"]').parent().append(inputError.replace('_replaceErrorHere_', data.error[errorInput]))
                    }
                } else {
                    Swal.fire({
                        icon: 'success', 
                        title: 'Admin Created!', 
                        text: 'You\'ve successfully created a admin.',
                    }).then(function() {
                        window.location.href = "{{ route('admin.user-management.listing') }}";
                    });
                }
            }, 
            error: function () {
                Swal.fire({
                    icon: 'warning', 
                    title: 'Something when wrong!', 
                    text: 'Please try again later or contact the administator.',
                });
            }
        });
    });
        
</script>
@endsection


