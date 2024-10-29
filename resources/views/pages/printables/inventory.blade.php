<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/images/logo.png?23">
    <link rel="stylesheet" href="/vendor/assets/css/dashlite.css?ver=3.0.3">
    <link id="skin-default" rel="stylesheet" href="/vendor/assets/css/theme.css?ver=3.0.3">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="/vendor/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/vendor/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/vendor/assets/js/libs/datatable-btns.js?ver=3.0.3"></script>
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
            font-size: 11px;
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
    <script src="/vendor/assets/js/example-sweetalert.js?ver=3.0.3"></script>
    @livewireStyles

</head>

<body onload="window.print()" class="nk-body bg-lighter npc-general has-sidebar font-sans antialiased ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
                <div class="nk-content ">
                    <div class="container-fluidx">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <br>
                                <center>
                                    <img src="/images/logo.png" id="logo-sidemenu"
                                        style="height: 100px; position: absolute; right: 60px; top: 20px"
                                        alt="">
                                    <img src="/images/tcc.png" id="logo-sidemenu"
                                        style="height: 80px; position: absolute; left: 60px; top: 32px" alt="">
                                    <h1 style="font-size: 18px;" class="text-1xl text-dark fw-bold">INVENTORY REPORT ON
                                        THE PHYSICAL COUNT</h1>
                                    <h1 style="font-size: 18px;" class="text-1xl text-dark fw-bold">LOCAL GOVERNMENT
                                        UNIT OF TAGOLOAN, MISAMIS ORIENTAL</h1>
                                    <p class="text-dark"><i>Computer Generate as of
                                            {{ date_format(date_create(date('Y-m-d')), 'F d, Y h:i A') }}</i></p>
                                    <hr class="mt-4 mb-4">
                                </center>
                                <main>
                                    <div class="card p-1">
                                        <div class="card-body p-0">
                                            <table style="font-size: 12px">
                                                <thead>
                                                    <tr>
                                                        <th width="50">#</th>
                                                        <th>Article / Items</th>
                                                        <th>Description</th>
                                                        <th>Date Acquisition</th>
                                                        <th>2020 Old Property No.</th>
                                                        <th>2021 New Property No.</th>
                                                        <th class="text-center">Unit of <br> Measures</th>
                                                        <th class="text-center">Unit Value</th>
                                                        <th class="text-center">Qty. per <br> Property Card</th>
                                                        <th class="text-center">Qty. per <br> Physical Card</th>
                                                        <th class="text-center">Location <br> Wherebouts</th>
                                                        <th>Condition</th>
                                                        <th width="180">Accountable Officer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $total = 0;
                                                    @endphp
                                                    @foreach ($records as $index => $data)
                                                        <tr style="cursor: pointer;">
                                                            <td>{{ $index + 1 }}.</td>
                                                            <td>{{ $data->article }}</td>
                                                            <td>{{ $data->description }}</td>
                                                            <td>{{ date_format(date_create($data->acquisition_date), 'F d. Y') }}
                                                            </td>
                                                            <td>{{ $data->property_number_x }}</td>
                                                            <td>{{ $data->property_number_y }}</td>
                                                            <td class="text-center">{{ $data->unit_measure }}</td>
                                                            <td class="text-start text-dark">₱
                                                                {{ number_format($data->unit_value, 2) }}</td>
                                                            <td class="text-center">x
                                                                {{ $data->quantity_per_property_card }}</td>
                                                            <td class="text-center">x
                                                                {{ $data->quantity_per_physical_count }}</td>
                                                            <td class="text-center">{{ $data->location }}</td>
                                                            <td>{{ $data->condition }}</td>
                                                            <td>{{ $data->accountable_officer }}</td>
                                                        </tr>
                                                        @php
                                                            $total += $data->unit_value;
                                                        @endphp
                                                    @endforeach
                                                    <tr style="cursor: pointer;">
                                                        <td>#</td>
                                                        <td colspan="6" class="text-end fw-bold">GRAND TOTAL : </td>
                                                        <td class="text-start fw-bold text-danger">₱
                                                            {{ number_format($total, 2) }}</td>
                                                        <td colspan="5" class="text-end">- &ensp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br><br>
                                    <center>
                                        <i>******************* Nothing Follows *******************</i>
                                    </center>
                                    <br><br><br>
                                    <b>Prepared By: <i style="font-family: Arial, Helvetica, sans-serif">_________________________________________________</i></b>
                                </main>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
