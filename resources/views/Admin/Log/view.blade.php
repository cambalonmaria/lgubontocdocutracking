   @extends('layouts.default')

@section('content')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
      
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');body{background-color: #eeeeee;font-family: 'Open Sans',serif}.container{margin-top:50px;margin-bottom: 50px}.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}

</style>
<div class="content-header">

      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0"><img src="{{ asset('/asset/img/form-icon.jpg') }}" width="40" style="border-radius: 100px;">View Transaction</h1>
         </div>
            <div class="col-sm-6">
               <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#" style="color: white;">Home</a></li>
                  <li class="breadcrumb-item active" style="color: white;">Dashboard</li>
               </ol> -->
            </div>
         </div>
      </div>

         <div class="container">
             @include('layouts.partials.messages')
      <div class="row card p-5" style="background-color: white;">
            <article class="card">
                <header class="card-header">  <strong> MY TRACKING </strong> </header>
                <div class="card-body">
                    <article class="card">
                        <div class="card-body row">
                            <div class="col"> <strong>Transaction Code:</strong> <br>{{ $transaction->transaction_code}}</div>
                            <div class="col"> <strong>Title</strong> <br>{{ $transaction->title}} </div>
                            <div class="col"> <strong>Fullname</strong> <br>{{ $transaction->fullname}}</div>
                            <div class="col"> <strong>Contact</strong> <br>{{ $transaction->contact_number}} | <i class="fa fa-phone"></i> {{ $transaction->email_address}} </div>
                        </div>
                    </article>
                    <div class="track">
                        @if($logs=\App\Models\::where('transaction_id', $transaction->id)->get())
                            @foreach($logs as $log)
                                <div class="step active"> 
                                    <span class="icon"> <i class="fa fa-check"></i></span> 
                                    <span class="text">{{$log->title}}</span> 
                                    <span class="text">{{$log->short_description}}</span> 
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <hr>
                   
                    <hr>
                    <a href="{{ route('transaction.pending') }}" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back </a>
                </div>

            </article>

        </div>
</div>

@endsection


            