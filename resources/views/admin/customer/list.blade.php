@extends("layouts.app")

@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Customer</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0" style="background-color: white !important;">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Customer Listing</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <div class="m-3">
            <table class="table stripe customer-datatable">
                <thead class="table-dark">
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>IC Number</th>
                        <th>Phone Number</th>
                        <th>Occupation</th>
                        <th>Address</th>
                        <th>Emergency Contact</th>
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

        var table= $('.customer-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('customer.listing') }}",
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'ic_num',
                    name: 'ic_num'
                },
                {
                    data: 'phone_num',
                    name: 'phone_num'
                },
                {
                    data: 'occupation',
                    name: 'occupation'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'emergency_phone_num',
                    name: 'emergency_phone_num'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ],
            order: [[0, 'desc']],
        });
    });

</script>
@endsection