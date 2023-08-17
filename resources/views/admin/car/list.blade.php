@extends("layouts.app")

@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Car</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0" style="background-color: white !important;">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Car Listing</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <div class="button-table float-right">
                        <a href="{{ route('car.create') }}"><button type="button" class="btn btn-primary btn-rounded"><i class="lni lni-plus pb-1"></i> Add New</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped car-datatable">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Plate Number</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Condition</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section("script")
<script>
    $(function () {

        var table= $('.car-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('car.listing') }}",
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'plate_num',
                    name: 'plate_num'
                },
                {
                    data: 'model',
                    name: 'model'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'condition',
                    name: 'condition'
                },
                {
                    data: 'status',
                    name: 'status'
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