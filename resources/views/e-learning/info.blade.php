@extends('layouts.app')

@section('content')

<main class="py-4">
            <!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2 class="col-md-12">My Profile</h2>
           <div class="text-center">
           
           <img src="{{Auth::user()->image}}"  style="height:150px; weight:150px; border-radius: 50%;" class="rounded mx-auto d-block" >
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <div class="container">
  <div class="form-group">
    <label for="name">Name</label>
    <h4  class="form-control" >{{ Auth::user()->name }}</h4>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <h4 class="form-control" >{{ Auth::user()->email }}</h4>
  </div>
  <div class="form-group">
    <label for="qoute">Qoute</label>
    <h4  class="form-control" >{{ Auth::user()->qoute }}</h4>
  </div>
  <div class="form-group">
    <label for="qoute">Date of Join</label>
    <h4  class="form-control" >{{ Auth::user()->created_at }}</h4>
  </div>
</div>


            </main>

@endsection