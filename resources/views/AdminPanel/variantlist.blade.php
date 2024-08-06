{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'All Variants')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Brand</th>
                                    <th>Car</th>
                                    <th>Modal</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Body Type</th>
                                    <th>Mileage</th>
                                    <th>Engine</th>
                                    <th>Fuel Type</th>
                                    <th>Transmission Type</th>
                                    <th>Seating Capactiy</th>
                                    <th>Reported Mileage</th>
                                    <th>Show/Hide Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variantlist as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->brandname }}</td>
                                    <td>{{ $row->carname }}</td>
                                    <td>{{ $row->carmodalname }}</td>
                                    <td>{{ $row->availabelstatus }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->bodytype }}</td>
                                    <td>
                                        <button class="btn btn-transparent text-info" onclick="toggleTable(this)">View
                                            Mileages</button>
                                        <table class="table table-bordered" style="display: none;">
                                            <thead>
                                                <tr>
                                                    <th>Fuel Type</th>
                                                    <th>Mileage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $mileages = json_decode($row->mileage, true);
                                                @endphp
                                                @foreach ($mileages as $fuelType => $mileage)
                                                <tr>
                                                    <td>{{ $fuelType }}</td>
                                                    <td>{{ $mileage }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>{{ $row->engine }}</td>
                                    <td>{{ implode(', ', json_decode($row->fueltype)) }}</td> {{-- decoding JSON and
                                    merging Array Values --}}
                                    <td>{{ implode(', ', json_decode($row->transmission)) }}</td>
                                    <td>{{ $row->seatingcapacity }}</td>
                                    <td>{{ $row->userreportedmilage }}</td>
                                    <td>
                                        <div class="square-switch">
                                            <input data-id="{{ $row->id }}" type="checkbox"
                                                id="square-switch{{ $row->id }}" switch="bool" {{ $row->showhidestatus ?
                                            'checked' : '' }}
                                            onchange="toggleStatus({{ $row->id }}, this.checked)" />
                                            <label for="square-switch{{ $row->id }}" data-on-label="Show"
                                                data-off-label="hide"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle py-0" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="{{ route('addvehicleimages', ['id' => $row->id, 'carname' => $row->carname]) }}"
                                                        class="dropdown-item">Add Vehicle Images</a>
                                                    <a href="{{ route('addfeatures', ['id' => $row->id]) }}"
                                                        class="dropdown-item">Add Features</a>
                                                    <a href="{{ route('addspecifications', ['id' => $row->id]) }}"
                                                        class=" dropdown-item">Add Specifications</a>
                                                    <a href="{{ route('prosandcons', ['id' => $row->id]) }}"
                                                        class="dropdown-item">Add Pros & Cons</a>
                                                    <a href="{{ route('variantfaqs', ['id' => $row->id, 'carname' => $row->carname]) }}"
                                                        class="dropdown-item">Add FAQ's</a>
                                                    <a href="{{ route('editvariant', ['id' => $row->id]) }}"
                                                        class="text-primary dropdown-item">Edit</a>
                                                    <a href="#" onclick="confirmDelete('{{ $row->id }}')"
                                                        class="text-danger dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@if (session('success'))
<script>
    swal("Success", "{{ session('success') }}", "success");
</script>
@endif

@if (session('error'))
<script>
    swal("Error", "{{ session('error') }}", "error");
</script>
@endif
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function confirmDelete(id) {
        let smiley = '😊';
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "/deletevariants/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }

    function toggleTable(button) {
        const table = button.nextElementSibling;
        if (table.style.display === "none") {
            table.style.display = "table";
        } else {
            table.style.display = "none";
        }
    }
</script>

{{--Updating Show/Hide Status--}}
<script>
    $(document).ready(function() {
        $('input[type="checkbox"][switch="bool"]').change(function() {
            var blogId = $(this).data('id');
            var status = $(this).is(':checked') ? 1 : 0;

            $.ajax({
                url: '{{ route('updatevariantshowhidestatus') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: blogId,
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        swal("Success", "Status Updated.!!!!", "success");
                    } else {
                        swal("Error", "Failed to update login status.", "error");
                    }
                },
                error: function() {
                    swal("Error", "An error occurred.", "error");
                }
            });
        });
    });
</script>
@endpush
