@extends('admin.admin_dashboard')
@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="page-content">



     <div class="row profile-body">
       
      
       <div class="col-md-12 col-xl-12 middle-wrapper">
         <div class="row">
          <div class="card">
           <div class="card-body">

            <form method="POST" action="{{ route('store.type') }}" class="forms-sample" >
              @csrf
      
              <div class="mb-3">
       <label for="type_name" class="form-label">Type Name  </label>
                 <input type="text" name="type_name" class="form-control @error('type_name') is-invalid @enderror" id="type_name" >
                 @error('type_name')
                 <span class="text-danger">{{ $message }}</span>
                 @enderror
               </div>
               <div class="mb-3">
                    <label for="type_icon" class="form-label">Type Icon  </label>
                              <input type="text" name="type_icon" class="form-control @error('type_icon') is-invalid @enderror" id="type_icon" >
                              @error('type_icon')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
      
      
           
      
      
      
         <button type="submit" class="btn btn-primary me-2">Save </button>
      
            </form>

           </div>
         </div>




         </div>
       </div>
       <!-- middle wrapper end -->
       <!-- right wrapper start -->

       <!-- right wrapper end -->
     </div>

            </div>
        






@endsection