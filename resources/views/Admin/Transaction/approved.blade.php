 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0"><img src="{{ asset('/asset/img/form-icon.jpg') }}" width="40" style="border-radius: 100px;"> Approved Transaction</h1>
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
      @foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <p>Status: {{ $post->status }}</p>

        @if($post->status === 'pending')
            <form method="post" action="{{ route('approved.status', $post) }}">
                @csrf
                @method('put')
                <button type="submit">Approve</button>
            </form>
        @endif
    </div>

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

            