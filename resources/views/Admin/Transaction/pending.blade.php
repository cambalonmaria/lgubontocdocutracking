 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0"><img src="{{ asset('/asset/img/form-icon.jpg') }}" width="40" style="border-radius: 100px;"> Pending Transaction</h1>
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
      <div class="row card p-7">
            <div class="col-md-12">
               <div class="card-header">
                     <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <ol class="breadcrumb float-sm-right">
                     <div class="col-sm-12 col-md-10">
                        <div class="dataTables_length" id="example1_length">
                           <label>Show entries
                            <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                           </select> 
                        </label>
                        </div>
                     </div>
                 <div class="search-container">
                   <form action="/search" method="GET">
                     <label>Search:</label>
                      <input type="text" placeholder="" name="search" class="search-box" style="padding: 0px;border: 1px solid #ccc; border-radius: 5px;width: 150px;">
                  </form>
               </div>
               </ol>
                  <br>
                  <div class="col-md-12">
                     <table id="example1" class="table table-hover">
                        <thead>
                           <tr>
                              <th>Transaction Code</th>
                              <th>Full Name</th>
                              <th>Contact Number</th>
                              <th>Email Address</th>
                              <th>Address</th>
                              <th>Title</th>
                              <th>Destination</th> 
                              <th>Purpose</th>
                              <th>Short Description</th>
                              <th class="text-center">Action</th>
                           </tr>

                        </thead>
                        <tbody>
                          @foreach($transactions as $transaction)
                           <tr>
                              <td>{{$transaction->transaction_code}}</td>
                              <td>{{$transaction->fullname}}</td>
                              <td>{{$transaction->contact_number}}</td>
                              <td>{{$transaction->email_address}}</td>
                              <td>{{$transaction->address}}</td>
                              <td>{{$transaction->title}}</td>
                              <td>
                                 <!-- {{$transaction->department}} -->
                                 @if(isset($transaction->destinations->fullname))
                                    {{$transaction->destinations->fullname}}-{{$transaction->destinations->department}}
                                 @endif
                              </td>  
                              <td>{{$transaction->purpose}}</td>
                              <td>{{$transaction->short_description}}</td>
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="{{ url('admin/pending/edit/').'/'.$transaction->id }}"><i
                                       class="fa fa-edit"></i> Update</a>      
                                      
                                 <a class="btn btn-sm btn-danger" href="{{ url('admin/pending/delete/').'/'.$transaction->id }}"><i
                                       class="fa fa-delete"> </i> Delete</a>

                                 <a class="btn btn-sm btn-success" href="{{ url('admin/pending/view/').'/'.$transaction->id }}"><i
                                       class="fa fa-delete"> </i> View</a>
                                 <a class="btn btn-sm btn-success" href="{{ url('admin/approved/status/').'/'.$transaction->id }}"><i
                                       class="fa fa-delete"> </i> Status</a>


                                                          
                              </td>
                           </tr>
                           @endforeach
                           <tr>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            
         </section>
               </center>
            </div>
      </div>  

</div>
 <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
      
@endsection

            