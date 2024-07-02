@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Transaction Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">trans_id</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">order_id</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">amount</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">transaction_id</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">fraud_status</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">created_at</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td class="text-center">{{ $transaction->id }}</td>
                                            <td class="text-center">{{ $transaction->order_id }}</td>
                                            <td class="text-center">{{ $transaction->amount }}</td>
                                            <td class="text-center">{{ $transaction->status }}</td>
                                            <td class="text-center">{{ $transaction->transaction_id }}</td>
                                            <td class="text-center">{{ $transaction->fraud_status }}</td>
                                            <td class="text-center">{{ $transaction->created_at }}</td>
                                            <td class="text-center">{{ $transaction->updated_at }}</td>
                                            <td class="align-middle">
                                            <a href="{{ route('delete-transactions', $transaction->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit event">
                                            DELETE
                                            </a>
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
    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
@endsection