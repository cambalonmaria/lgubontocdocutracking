 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><img src="{{ asset('/asset/img/form-icon.jpg') }}" width="40" style="border-radius: 100px;">List Of Employee</h1>
         </div>
            <div class="col-sm-6">
              <!--  <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#" style="color: white;">Home</a></   li>
                  <li class="breadcrumb-item active" style="color: white;">Dashboard</li>
               </ol> -->
            </div>
         </div>
      </div>
       @include('layouts.partials.messages')
      <div class="row card p-5">
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
                     <label style="margin-left:0px ;">Search:</label>
                      <input type="text" placeholder="" name="search" class="search-box" style="padding: 0px;border: 1px solid #ccc; border-radius: 5px;width:120px;">
                  </form>
               </ol>
                  <br>
                  <div class="col-md-12">
                     <table id="example1" class="table table-hover">
                        <thead>
                           <tr>
                              <th>Full Name</th>
                              <th>Position</th>
                              <th>Department</th>
                              <th class="text-center">Action</th>
                           </tr>

                        </thead>
                        <tbody>
                          @foreach($employees as $employee)
                           <tr>
                              <td>{{$employee->name}}</td>
                              <td>{{$employee->position}}</td>
                              <td>{{$employee->department }}</td>  
                             
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="{{ url('admin/list/edit/').'/'.$employee->id }}"><i
                                       class="fa fa-edit"></i> Update</a>
                                <a class="btn btn-sm btn-danger" href="{{ url('admin/list/delete/').'/'.$employee->id }}"><i
                                       class="fa fa-delete"></i> Delete</a>
                                       {{method_field('DELETE')}}
                                        @csrf
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
      
@endsection

            