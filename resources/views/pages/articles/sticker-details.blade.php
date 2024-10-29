<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('ICS Sticker') }}</x-slot>
    <x-slot name="subHeader">{{ __('Inventory Government Custodian Slip') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                    <em class="icon ni ni-menu-alt-r"></em>
                </a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="#" target="_blank" class="btn btn-secondary">
                                <em class="icon ni ni-printer"></em>
                                <span>Print Sticker</span>
                            </a>
                        </li>
                        <li class="nk-block-tools-opt d-block d-sm-none">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registration"
                                class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <div class="row">
                            <hr class="mt-3 mb-4">

                            <div class="col-md-2">
                                <center>
                                   <b class="text-dark fw-bold">QR Code</b>
                                </center>
                                <br>
                                <div id="qrcode"></div>
                                <script type="text/javascript">
                                    new QRCode(document.getElementById("qrcode"), "2021-05-030-0515A-8831");
                                </script>
                                <br>
                                <center>
                                    <i>You can Scan QR Code track the particular items.</i>
                                    </center>
                            </div>
                            <div class="col-md-10">
                                <table>
                                    <thead>
                                        <th class="text-end" width="250">Description</th>
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
            </div>
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

                        <table class="datatable-init nowrap table-hover table">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Article / Items</th>  
                                    <th>Description</th>  
                                    <th width="100">Date Acquisition</th>     
                                    <th class="text-center">Unit of  Measures</th>  
                                    <th class="text-center">Location / Wherebouts</th>  
                                    <th>Condition</th>  
                                    <th width="180">Accountable Officer</th>                    
                                    <th width="200">Date Registered</th>                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $index => $data)
                                    <tr style="cursor: pointer" onclick="go_to('/ics-sticker/details/{{$data->id}}')">
                                        <td>{{ $index + 1 }}.</td>
                                        <td>{{ $data->article }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>{{ date_format(date_create($data->acquisition_date ), 'D, F d. Y')}}</td>
                                        <td class="text-center">{{ $data->unit_measure }}</td>
                                        <td class="text-center">{{ $data->location }}</td>
                                        <td>{{ $data->condition }}</td>
                                        <td>{{ $data->accountable_officer }}</td>
                                        <td>{{ date_format(date_create($data->created_at ), 'D, F d. Y h:i A') }}</td>
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
