<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Inventory Government Custodian Slip') }}</x-slot>
    <x-slot name="subHeader">{{ __('Local Government Unit of Tagoloan, Misamis Oriental') }}</x-slot>
    <x-slot name="btn"></x-slot>

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
                                    <th class="text-center">Unit of  Measures</th>  
                                    <th class="text-center">Location / Wherebouts</th>  
                                    <th>Condition</th>  
                                    <th width="180">Accountable Officer</th>             
                                    <th width="50" class="text-center">Action</th>             
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
                                        <td>
                                            <center>
                                                <button class="btn btn-primary btn-xs btn-block"><em class="icon ni ni-eye"></em></button>
                                            </center>
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

    @include('pages.articles.modal')

</x-app-layout>
