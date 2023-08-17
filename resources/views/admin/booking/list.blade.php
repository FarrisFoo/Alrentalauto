@extends("layouts.app")

@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Booking</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0" style="background-color: white !important;">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Booking Listing</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <div class="button-table float-right">
                        <a href="{{ route('booking.add') }}"><button type="button" class="btn btn-primary btn-rounded"><i class="lni lni-plus pb-1"></i> Add Past Record</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table stripe booking-datatable">
                <thead class="table-dark">
                    <tr>
                        <th>Booking ID</th>
                        <th>Customer Name</th>
                        <th>Selected Car</th>
                        <th>Pickup Place</th>
                        <th>Pickup Date & Time</th>
                        <th>Return Date & Time</th>
                        <th>Booking Earning</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
</div>

@endsection

@section("script")
<script>
    $(function () {

        var table= $('.booking-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('booking.listing') }}",
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'customer_name',
                    name: 'customer_name'
                },
                {
                    data: 'selected_car',
                    name: 'selected_car'
                },
                {
                    data: 'pickup_place',
                    name: 'pickup_place'
                },
                {
                    data: 'pickup_datetime',
                    name: 'pickup_datetime'
                },
                {
                    data: 'return_datetime',
                    name: 'return_datetime'
                },
                {
                    data: 'booking_earning',
                    name: 'booking_earning'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });

</script>
@endsection