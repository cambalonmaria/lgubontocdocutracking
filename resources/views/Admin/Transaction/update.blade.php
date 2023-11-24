 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0"><img src="{{ asset('/asset/img/form-icon.jpg') }}" width="40" style="border-radius: 100px;">Update  Transaction</h1>
         </div>
            <div class="col-sm-6">
               <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#" style="color: white;">Home</a></li>
                  <li class="breadcrumb-item active" style="color: white;">Dashboard</li>
               </ol> -->
            </div>
         </div>
      </div>
       @include('layouts.partials.messages')
      <div class="row card p-5" style="background-color: white;">
         <form action="{{ route('pending.edit.update') }}"  method="post">
            @csrf
            <div class="col-md-12">
               <div class="card-header"></div>
                        <div class="row">
                           <div class="col-md-0">
                              <div class="form-group">
                                 <input type="hidden" name="id" value="{{$transaction->id}}">
                                 <input type="hidden" name="transaction_code" value="{{$transaction->transaction_code}}" class="form-control" placeholder="Enter Full Name">
                              </div>
                          </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                 <label>Full Name </label>
                                 <input type="text" name="fullname" value="{{$transaction->fullname}}" class="form-control" placeholder="Enter Full Name">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Contact Number</label>
                                 <input type="text" name="contact_number"value="{{$transaction->contact_number}}" class="form-control" placeholder="+63">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Email Address</label>
                                 <input type="text" name="email_address" value="{{$transaction->email_address}}" class="form-control" placeholder="@example.com">
                              </div>
                           </div>

                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Address </label>
                                 <input type="text" name="address" value="{{$transaction->address}}" class="form-control" placeholder="Enter Address">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Title </label>
                                 <input type="text" name="title" value="{{$transaction->title}}" class="form-control" placeholder="Enter Title">
                              </div>
                           </div>
                      <div class="col-md-12">
                              <div class="form-group">
                                <label> Destination</label>
                                <select name="destination" class="form-control" placeholder="Enter Destination">
                                  @if($employees=App\Models\Employee::get())
                                    @foreach($employees as $employee)
                                      @if($employee->id == $transaction->destination)
                                       <option value="{{ $employee->id}}"selected="">{{ $employee->fullname }} -{{ $employee->department }}</option>
                                       @else
                                        <option value="{{ $employee->id}}">{{ $employee->fullname }} -{{ $employee->department }}</option>
                                      @endif
                                    @endforeach
                                  @endif
                               </select>
                                
                              </div>
                           </div>  
                           <div class="col-md-12">
                              <div class="form-group">
                                <label>Purpose</label>
                                <input type="hidden" name="id" value="{{$transaction->id}}">
                               <input type="text" name="purpose" value="{{$transaction->purpose}}" class="form-control" placeholder="Enter Purpose">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                              <div class="form-group">
                                <label>Short Description</label>
                                <input type="hidden" name="id" value="{{$transaction->id}}">
                                <input type="text" name="short_description" value="{{$transaction->short_description}}" class="form-control" placeholder="Enter Short Description">
                              </div>
                           </div>
                        <center>
               <div class="col-md-5">
                  <button type="submit" class="btn btn-primary" style="background-color: black;">Save</button>
               </div>
               </center>
            </div>
         </form>
      </div>  
</div>
      
@endsection

            