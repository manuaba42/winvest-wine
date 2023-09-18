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
                            <tbody>
                                <tr>
                                    <th>Name Product</th>
                                    <th>Price</th>
                                    <th>Year</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td><a>Chateau Rieussec 'Les Carmes de Rieussec'
                                        </a></td>
                                    <td class="font-weight-600">$200</td>
                                    <td class="font-weight-600">2002</td>

                                    <td>July 19, 2018</td>
                                    <td>
                                        <a href="/user/detail-wine" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a>Chateau Fleur Cardinale
                                        </a></td>
                                    <td class="font-weight-600">$150</td>
                                    <td class="font-weight-600">2003</td>

                                    <td>July 21, 2018</td>
                                    <td>
                                        <a href="/user/detail-wine" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a>Chateau Clerc-Milon</a></td>
                                    <td class="font-weight-600">$180</td>
                                    <td class="font-weight-600">2002</td>

                                    <td>July 22, 2018</td>
                                    <td>
                                        <a href="/user/detail-wine" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a>Chateau Mouton Rothschild
                                        </a></td>
                                    <td class="font-weight-600">$500</td>
                                    <td class="font-weight-600">2000</td>

                                    <td>July 22, 2018</td>
                                    <td>
                                        <a href="/user/detail-wine" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a>Veuve Clicquot Ponsardin La Grande&nbsp;Dame&nbsp;Brut</a></td>
                                    <td class="font-weight-600">$250</td>
                                    <td class="font-weight-600">1996</td>

                                    <td>July 28, 2018</td>
                                    <td>
                                        <a href="/user/detail-wine" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
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
