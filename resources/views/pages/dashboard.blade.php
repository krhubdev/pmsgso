<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Dashboard') }}</x-slot>
    <x-slot name="subHeader">{{ __('Summary of Reports of Inventory') }}</x-slot>
    <x-slot name="btn"></x-slot>
    <style>
        table {
            width: 100%;
            /* Makes the table take up the full width of its container */
            table-layout: auto;
            /* Ensures columns adjust based on content */
            border-collapse: collapse;
            color: #000;
            /* Removes spacing between table cells */
        }

        th,
        td {
            padding: 8px;
            /* Adds padding for readability */
            text-align: left;
            /* Aligns text to the left */
            white-space: nowrap;
            /* Prevents text from wrapping to fit data */
        }

        th {
            background-color: #f2f2f2;
            /* Optional: Adds background color to headers */
            font-weight: bold;
            /* Makes header text bold */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
            /* Optional: Adds a subtle color to even rows */
        }

        td {
            border: 1px solid #ddd;
            /* Adds a border around each cell */
            word-wrap: break-word;
            /* Ensures long words wrap to fit within the cell */
        }
    </style>
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-8">

                <div class="card alert-pro alert-primary">
                    <div class="card-inner">
                        <h1 class="text-2xl fw-bold"> {{ number_format($records->count(), 0) }}</h1>
                        <p>Total Inventory Items</p>
                    </div>
                </div>
                <br>
                <div class="card" style="min-height: 640px">
                    <div class="card-inner">
                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <table class="datatable-init nowrap table-hover table">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Article / Items</th>
                                    <th>Description</th>
                                    <th width="100">Date Acquisition</th>
                                    <th class="text-center">Unit of Measures</th>
                                    <th class="text-center">Location / Wherebouts</th>
                                    <th>Condition</th>
                                    <th width="180">Accountable Officer</th>
                                    <th width="200">Date Registered</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $index => $data)
                                    <tr style="cursor: pointer"
                                        onclick="go_to('/ics-sticker/details/{{ $data->id }}')">
                                        <td>{{ $index + 1 }}.</td>
                                        <td>{{ $data->article }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>{{ date_format(date_create($data->acquisition_date), 'D, F d. Y') }}</td>
                                        <td class="text-center">{{ $data->unit_measure }}</td>
                                        <td class="text-center">{{ $data->location }}</td>
                                        <td>{{ $data->condition }}</td>
                                        <td>{{ $data->accountable_officer }}</td>
                                        <td>{{ date_format(date_create($data->created_at), 'D, F d. Y h:i A') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-inner">
                        <center>
                            <b class="text-dark fw-bold">QR Code</b>
                        </center>
                        <br>
                        <center>
                            <div id="qrcode"></div>
                            <script type="text/javascript">
                                new QRCode(document.getElementById("qrcode"), "2021-05-030-0515A-8831");
                            </script>
                        </center>
                        <br>
                        <center>
                            <i>You can Scan QR Code track the particular items.</i>
                        </center>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-inner">
                        <div class="row">
                            <table>
                                <thead>
                                    <th class="text-end" width="150">Description</th>
                                    <th>Value</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-end">Property No. : </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">Description : </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">Model : </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">Serial No. : </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">Person Accountable : </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">Validated By : </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">Date : </td>
                                        <td> - </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">

            </div>

        </div>

        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-inner">
                            <!-- Display Validation Errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <table class="datatable-init-export nowrap table-hover table">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Article / Items</th>
                                        <th>Description</th>
                                        <th width="100">Date Acquisition</th>
                                        <th>2020 Old Property No.</th>
                                        <th>2021 New Property No.</th>
                                        <th class="text-center">Unit of <br> Measures</th>
                                        <th class="text-center">Unit <br> Value</th>
                                        <th class="text-center">Qty. per <br> Property Card</th>
                                        <th class="text-center">Qty. per <br> Physical Card</th>
                                        <th class="text-center">Location <br> Wherebouts</th>
                                        <th>Condition</th>
                                        <th width="180">Accountable Officer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $index => $data)
                                        <tr style="cursor: pointer">
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $data->article }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td>{{ date_format(date_create($data->acquisition_date), 'F d. Y') }}</td>
                                            <td>{{ $data->property_number_x }}</td>
                                            <td>{{ $data->property_number_y }}</td>
                                            <td class="text-center">{{ $data->unit_measure }}</td>
                                            <td class="text-start fw-bold text-dark">₱
                                                {{ number_format($data->unit_value, 2) }}</td>
                                            <td class="text-center">x {{ $data->quantity_per_property_card }}</td>
                                            <td class="text-center">x {{ $data->quantity_per_physical_count }}</td>
                                            <td class="text-center">{{ $data->location }}</td>
                                            <td>{{ $data->condition }}</td>
                                            <td>{{ $data->accountable_officer }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('pages.articles.modal')

</x-app-layout>
