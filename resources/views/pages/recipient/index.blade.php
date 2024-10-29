<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Recipient Records') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage the recipient and register new recipient here.') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                    <em class="icon ni ni-menu-alt-r"></em>
                </a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registration"
                                class="btn btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>Add New Record</span>
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

                        <table class="datatable-init table-hover table">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Recipient Name</th>
                                    <th width="240">Position</th>
                                    <th width="240">Date Registered</th>                                    
                                    <th width="5" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $index => $data)
                                    <tr style="cursor: pointer">
                                        <td>{{ $index + 1 }}.</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->position }}</td>
                                        <td>{{ date_format($data->created_at, 'D. M. d, Y h:i A') }}</td>
                                        <td><button class="btn btn-light bg-white btn-xs btn-block"><em class="icon ni ni-edit"></em></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.recipient.modal')

</x-app-layout>
