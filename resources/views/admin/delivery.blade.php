@extends('includes.layouts.app')

@section('page-title', 'Dashboard')

@section('content')

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        {{-- <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block"> --}}
                        {{-- <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-purple"></h4>
                                            <h6 class="text-muted m-b-0">No. of Registered Member</h6>
                                        </div>
                                        <div class="col-4 text-right text-primary">
                                            <i class="fa fa-users f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-purple">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0"></p>
                                        </div>
                                    </div> --}}

                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-danger"></h4>
                                <h6 class="text-muted m-b-0">No. of Pending Member</h6>
                            </div>
                            <div class="col-4 text-right text-danger">
                                <i class="fa fa-users f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-danger">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h5 class="mb-0">Delivery</h5>
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary ml-2">SEARCH</button>
                            <span>&nbsp</span>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                SCHEDULE DELIVERY
                            </button>
                        </div>

                    </div>


                    <div class="card-block">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>DELIVERY DATE</th>

                                    <th>ARRANGED BY</th>

                                    <th>FROM</th>
                                    <th>TO</th>
                                    <th>STATUS</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>
                                        @php
                                            $date = date('Y-m-d');
                                        @endphp
                                        {{ $date }}
                                    </td>
                                    <td>
                                        Juan Dela Cruz
                                    </td>

                                    <td>
                                        Iloilo city
                                    </td>
                                    <td>
                                        Estancia Branch
                                    </td>
                                    <td>
                                        <span class="p-2 label label-danger">PENDING</span>
                                    </td>
                                    <!-- Add more table cells for other fields -->
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn bg-primary h-0 mr-2">View</button>
                                            <button class="btn bg-danger h-0">Cancel</button>



                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @php
                                            $date = date('Y-m-d');
                                        @endphp
                                        {{ $date }}
                                    </td>
                                    <td>
                                        Juan Dela Cruz
                                    </td>

                                    <td>
                                        Iloilo city
                                    </td>
                                    <td>
                                        Balasan Branch
                                    </td>
                                    <td>
                                        <span class="p-2 label label-success">RECEIVED</span>
                                    </td>
                                    <!-- Add more table cells for other fields -->
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn bg-primary h-0 mr-2">View</button>
                                            <button class="btn bg-danger h-0">Cancel</button>



                                        </div>
                                    </td>
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SCHEDULE DELIVERY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <label for="validationCustom01">DELIVERY DATE</label>
                                @php
                                    $date = date('Y-m-d H:i:s');
                                @endphp
                                <input type="date" value={{ $date }} class="form-control" placeholder="item name"
                                    readonly>
                            </div>
                            <div class="col">
                                <label for="validationCustom01">ARRANGED BY</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="validationCustom01">FROM</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col">
                                <label for="validationCustom01">TO</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row
                                    mt-2">
                            <div class="col">
                                <label for="validationCustom01">ITEMS</label>
                                <textarea type="text" class="form-control" placeholder="items"></textarea>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>





@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
