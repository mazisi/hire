@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 
  <section class="content-header">
    <h1>
      Categorires 
      <small>& Skills</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Categorires & Skills</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
    @livewire('admin.categories')
    @livewire('admin.skills.all-skills')
    </div>
  </section>
</div>
@endsection