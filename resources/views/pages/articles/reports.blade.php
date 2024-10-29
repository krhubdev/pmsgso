<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Inventory Reports') }}</x-slot>
    <x-slot name="subHeader">{{ __('Local Government Unit of Tagoloan, Misamis Oriental') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                    <em class="icon ni ni-menu-alt-r"></em>
                </a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="print/reports" target="_blank"
                                class="btn btn-secondary">
                                <em class="icon ni ni-printer"></em>
                                <span>Print Reports</span>
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
                                        <td>{{ date_format(date_create($data->acquisition_date ), 'F d. Y')}}</td>
                                        <td>{{ $data->property_number_x }}</td>
                                        <td>{{ $data->property_number_y }}</td>
                                        <td class="text-center">{{ $data->unit_measure }}</td>
                                        <td class="text-start fw-bold text-dark">₱ {{ number_format($data->unit_value, 2) }}</td>
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
