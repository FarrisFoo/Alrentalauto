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
                    <h5 class="card-title">Add New Car</h5>
                    <hr/>
                    <form class="form-body mt-4" id="add-car-form">
                      <div class="row">
                         <div class="col-lg-8">
                         <div class="border border-3 p-4 rounded">
                          <div class="mb-3">
                              <label for="plate_number" class="form-label">Plate Number</label>
                              <input type="text" class="form-control" id="plate_number" name="plate_number" placeholder="Enter plate number">
                            </div>
                            <div class="row g-3">
                              <div class="mb-3 col-md-4">
                                <label for="car_model" class="form-label">Car Model</label>
                                <input type="text" class="form-control" id="car_model" name="car_model" placeholder="Enter car model">
                              </div>
                              <div class="mb-3 col-md-4">
                                <label for="car_brand" class="form-label">Car Brand</label>
                                <input type="text" class="form-control" id="car_brand" name="car_brand" placeholder="Enter car brand">
                              </div>
                              <div class="col-12">
                                <div class="d-grid">
                                   <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                          </div>
                          </div>
                         </div>
                         <div class="col-lg-4">
                          <div class="border border-3 p-4 rounded">
                            <div class="row g-3">
                              <div class="col-md-12">
                                  <label for="price" class="form-label">Price</label>
                                  <input type="number" class="form-control" id="price" name="price" placeholder="00.00">
                                </div>           
                                
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
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#add-car-form', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        formData.append('plate_number', $('input[name="plate_number"]').val());
        formData.append('car_model', $('input[name="car_model"]').val());
        formData.append('car_brand', $('input[name="car_brand"]').val());
        formData.append('price', $('input[name="price"]').val());

        $.ajax({
            type: 'POST',
            url: '{{ route("car.create-post") }}',
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
                        title: 'Car Created!', 
                        text: 'You\'ve successfully added a brand new car.',
                    }).then(function() {
                        window.location.href = "{{ route('car.list') }}";
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


