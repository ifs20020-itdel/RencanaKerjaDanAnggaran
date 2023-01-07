<!--
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
-->

@if(count($errors) > 0)
@foreach ($errors->all() as $error)
    <div class="alert-danger alert ml-3">{{$error}}</div>
@endforeach
@endif

@if (session('success'))
<div class="alert alert-success ml-3">{{session('success')}}</div>
@endif

@if (session('error'))
<div class="alert alert-danger ml-3">{{session('error')}}</div>  
@endif