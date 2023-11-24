  @extends('layouts.default')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
    @import url('https://bootsnipp.com/snippets/4Mzzm');
.tracking-detail {
 padding:3rem 0
}
#tracking {
 margin-bottom:1rem
}
[class*=tracking-status-] p {
 margin:0;
 font-size:1.1rem;
 color:#fff;
 text-transform:uppercase;
 text-align:center
}
[class*=tracking-status-] {
 padding:1.6rem 0
}
.tracking-status-intransit {
 background-color:#65aee0
}
.tracking-status-outfordelivery {
 background-color:#f5a551
}
.tracking-status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-status-delivered {
 background-color:#4cbb87
}
.tracking-status-attemptfail {
 background-color:#b789c7
}
.tracking-status-error,.tracking-status-exception {
 background-color:#d26759
}
.tracking-status-expired {
 background-color:#616e7d
}
.tracking-status-pending {
 background-color:#ccc
}
.tracking-status-inforeceived {
 background-color:#214977
}
.tracking-list {
 border:1px solid #e5e5e5
}
.tracking-item {
 border-left:1px solid #e5e5e5;
 position:relative;
 padding:2rem 1.5rem .5rem 2.5rem;
 font-size:.9rem;
 margin-left:3rem;
 min-height:5rem
}
.tracking-item:last-child {
 padding-bottom:4rem
}
.tracking-item .tracking-date {
 margin-bottom:.5rem
}
.tracking-item .tracking-date span {
 color:#888;
 font-size:85%;
 padding-left:.4rem
}
.tracking-item .tracking-content {
 padding:.5rem .8rem;
 background-color:#f4f4f4;
 border-radius:.5rem
}
.tracking-item .tracking-content span {
 display:block;
 color:#888;
 font-size:85%
}
.tracking-item .tracking-icon {
 line-height:2.6rem;
 position:absolute;
 left:-1.3rem;
 width:2.6rem;
 height:2.6rem;
 text-align:center;
 border-radius:50%;
 font-size:1.1rem;
 background-color:#fff;
 color:#fff
}
.tracking-item .tracking-icon.status-sponsored {
 background-color:#f68
}
.tracking-item .tracking-icon.status-delivered {
 background-color:#4cbb87
}
.tracking-item .tracking-icon.status-outfordelivery {
 background-color:#f5a551
}
.tracking-item .tracking-icon.status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-item .tracking-icon.status-attemptfail {
 background-color:#b789c7
}
.tracking-item .tracking-icon.status-exception {
 background-color:#d26759
}
.tracking-item .tracking-icon.status-inforeceived {
 background-color:#214977
}
.tracking-item .tracking-icon.status-intransit {
 color:#e5e5e5;
 border:1px solid #e5e5e5;
 font-size:.6rem
}
@media(min-width:992px) {
 .tracking-item {
  margin-left:10rem
 }
 .tracking-item .tracking-date {
  position:absolute;
  left:-10rem;
  width:7.5rem;
  text-align:right
 }
 .tracking-item .tracking-date span {
  display:block
 }
 .tracking-item .tracking-content {
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

        <div class="col-md-12 col-lg-12">
         <div id="tracking-pre"></div>
         <div id="tracking">
            <div class="text-center tracking-status-intransit">
               <p class="tracking-status text-tight">MY TRACKING</p>
            </div>
             <article class="card">
                        <div class="card-body row">
                            <div class="col"> <strong>Transaction Code:</strong> <br>{{ $transaction_details->transaction_code}}</div>
                            <div class="col"> <strong>Title</strong> <br>{{ $transaction_details->title}} </div>
                            <div class="col"> <strong>Fullname</strong> <br>{{ $transaction_details->fullname}}</div>
                            <div class="col"> <strong>Contact</strong> <br>{{ $transaction_details->contact_number}} | <i class="fa fa-phone"></i> {{ $transaction_details->email_address}} </div>
                        </div>
                    </article>
            <div class="tracking-list">
                <div class="tracking-item">
                  <div class="tracking-icon status-intransit">
                     <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                     </svg>
                     <!-- <i class="fas fa-circle"></i> -->
                </div>      
                    <div class="track">
                    @if(isset($transactions))
                    @foreach($transactions as $transaction)
                        <div class="tracking-date"></div>
                        <div class="tracking-content">
                    @if($transaction->last_visited_at)
                        {{$transaction->destinations->fullname}}-{{$transaction->destinations->department}}
                            <span class="tracking-content">{{$transaction->short_description}}</span>
                                <form action="{{ route('updateTracking', ['id' => $transaction->id]) }}" method="post">
                        @csrf
                        @method('PATCH')
                                <button type="submit">Update Location</button>
                                </form>
                        @else
                    {{$transaction->destinations->fullname}}-{{$transaction->destinations->department}}
                    <span class="tracking-content">{{$transaction->short_description}}</span>
                @endif
            </div>
        </div>
   
</div>

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


            