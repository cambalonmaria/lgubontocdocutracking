 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0"><img src="{{ asset('/asset/img/form-icon.jpg') }}" width="40" style="border-radius: 100px;">Update Employee</h1>
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
         <form action="{{ route('list.edit.update') }}"  method="post">
            @csrf
            <div class="col-md-12">
               <div class="card-header"></div>
                        <div class="row">
                           <div class="col-md-5">
                              <div class="form-group">
                                 <label>Full Name </label>
                                 <input type="hidden" name="id" value="{{$employee->id}}">
                                 <input type="text" name="fullname" value="{{$employee->name}}" class="form-control" placeholder="Enter Full Name">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Password</label>
                                 <input type="text" name="password"  class="form-control" placeholder="Enter Password">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="text" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Enter Password">
                              </div>
                           </div>

                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Position </label>
                                 <input type="text" name="position" value="{{$employee->position}}" class="form-control" placeholder="Enter Position">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Department </label>
                                <select class="form-control" name="department" id="department">
                                 <option value="{{ $employee->position }}">{{ $employee->department }}</option>
                                 <option value="Sangguniang Bayan Office">Sangguniang Bayan Office</option>
                                 <option value="Municipal Planning & Development Office">Municipal Planning & Development Office</option>
                                 <option value="Municipal Local Civil Registrar">Municipal Local Civil Registrar</option>
                                 <option value="Municipal Budget Office">Municipal Budget Office</option>
                                 <option value="Municipal Accounting Office">Municipal Accounting Office</option>
                                 <option value="Municipal Treasurer Office">Municipal Treasurer Office</option>
                                 <option value="Municipal Assessor's Office">Municipal Assessor's Office</option>
                                 <option value="Municipal Health Office">Municipal Health Office</option>
                                 <option value="Municipal Social Welfare & Development Office">Municipal Social Welfare & Development Office</option>
                                 <option value="Municipal Agriculture Office">Municipal Agriculture Office</option>
                                 <option value="Municipal Engineering Office">Municipal Engineering Office</option>
                                </select>
                             
                              </div>
                           </div>             
                         </div>
                         <center>
                          <div class="col-md-0">
                            <button type="submit" class="btn btn-primary" style="background-color: black;">Save</button>
                          </div>
                        </center>
                      </form>
                    </div>  
                  </div>
      
@endsection

            