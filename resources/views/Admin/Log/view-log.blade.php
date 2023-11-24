@extends('layouts.default')

@section('content')
<div class="content-header">
    <a href="{{ url()->previous() }}"><button class="btn btn-primary btn-sm mt-2 ml-2">Go Back</button></a>
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0">Tracking Logs</h1>
         </div>
            <div class="col-sm-6">
              <!--  <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#" style="color: white;">Home</a></li>
                  <li class="breadcrumb-item active" style="color: white;">Dashboard</li>
               </ol> -->
            </div>
         </div>
      </div>
   @include('layouts.partials.messages')
      <div class="row card p-5 m-4" style="background-color: white;">
        <div class="row-col-6">
            <div class="table-responsive" style="height: 460px;">
                @foreach ($transactions as $transaction)
                    <div class="d-flex mb-5">
                        <div style="border-right: 1px solid black"><span class="mr-2">{{ Illuminate\Support\Carbon::parse($transaction->updated_at)->format('F d, Y | h:ia') }}</span></div>
                        <span class="fw-bold ml-2">•</span>
                        <div class="ml-1">
                            <span>{{ $transaction->title }}</span><br>
                            <span>{{ $transaction->short_description }}</span><br>
                            <span>To: {{ $transaction->department }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      </div>  

</div>
      
@endsection

            