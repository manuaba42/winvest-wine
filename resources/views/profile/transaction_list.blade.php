@extends('master')
@section('content')
    <div class="section-header">
        <h1>Transaction List</h1>
    </div>

    <div class="section-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Transactions</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Name Product</th>
                                <th>Price</th>
                           
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                                @foreach($data_wine as $wine)
                                <tr>
                
                                    <td><a>{{ $wine->wine }}</a></td>
                                    <td class="font-weight-600">${{ number_format($wine->amounts, 2) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($wine->invoice->date_invoice)->format('F j, Y') }}</td>

                                    <td>
                                        <a href="/user/detail-wine" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr> 
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="buttons" style="display: flex; justify-content: center; align-items: center;">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
