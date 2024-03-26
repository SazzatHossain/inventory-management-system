
@extends('layouts.master')
@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <div class="mt-5">
                    <h4 class="card-title float-left mt-2">Category List</h4>
                    <a href="/category/create" class="btn btn-Info float-right veiwbutton mt-2 text-white">Add new
                        category</a>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper"
                                     class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            @if($categories->isEmpty())
                                                <p>No category found.</p>
                                            @else
                                                <table
                                                    class="datatable table table-stripped table table-hover table-center mb-0 dataTable no-footer"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Code</th>
                                                        <th>Description</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($categories as $category)
                                                        <tr>
                                                            <td>{{ $category->name }}</td>
                                                            <td>{{ $category->code }}</td>
                                                            <td>{{ $category->description }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
