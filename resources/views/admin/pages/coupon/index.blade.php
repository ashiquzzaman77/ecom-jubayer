<x-admin-app-layout :title="'Coupon'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.coupon.create') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Create
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="25%">Name</th>
                        <th width="15%">Coupon Discount</th>
                        <th width="20%">Start Date</th>
                        <th width="20%">End Date</th>
                        <th width="10%">Validity</th>
                        <th width="100%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($coupons as $key => $coupon)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $coupon->coupon_name }}</td>
                            <td class="text-start">{{ $coupon->coupon_discount }}%</td>

                            <td class="text-start">
                                {{ Carbon\Carbon::parse($coupon->coupon_start_date)->format('D, d F Y') }}
                            </td>

                            <td class="text-start">
                                {{ Carbon\Carbon::parse($coupon->coupon_end_date)->format('D, d F Y') }}
                            </td>

                            <td class="text-start">
                                @if ($coupon->is_expired == 'valid')
                                    <span class="badge bg-success px-3">Valid</span>
                                @else
                                    <span class="badge bg-danger p-xl-3">Invalid</span>
                                @endif
                            </td>
                            <td>
                                @if (Auth::guard('admin')->user()->can('edit.coupon'))
                                    <a href="{{ route('admin.coupon.edit', $coupon->id) }}" class="text-primary">
                                        <i class="bi bi-pencil text-primary"></i>
                                    </a>
                                @endif

                                @if (Auth::guard('admin')->user()->can('delete.coupon'))
                                    <a href="{{ route('admin.coupon.destroy', $coupon->id) }}" class="delete">
                                        <i class="bi bi-trash3-fill text-danger"></i>
                                    </a>
                                @endif

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            $("#kt_datatable_example_5").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        </script>
    @endpush

</x-admin-app-layout>