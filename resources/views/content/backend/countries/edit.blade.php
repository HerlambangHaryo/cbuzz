@extends('template.color_admin_apple_v42.form')
@section('content')             
    <div id="content" class="content">
        <x-cv42.breadcrumb link2="{{ route($content.'.index') }}" level2="{{$panel_name}}" level3="Edit" />
        <x-cv42.pageheader header="{{$panel_name}}"/>
        <div class="panel panel-inverse">
            <x-cv42.panel-heading title="Form"/>
            <div class="panel-body">
                <form action="{{ route($content.'.update', $Country->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Nama" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "nama" 
                                class       = "form-control m-b-5 @error('nama') is-invalid @enderror" 
                                value       = "{{ old('title', $Country->nama) }}" />
                                
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>
                    
                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Flag Icon" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "flag_icon" 
                                class       = "form-control m-b-5 @error('flag_icon') is-invalid @enderror" 
                                value       = "{{ old('title', $Country->flag_icon) }}" />
                                
                            @error('flag_icon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>
                    <div class="form-group row m-b-15"> 
                        <div class="col-md-8 offset-md-2">
                            <x-cv42.button-submit />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
@endsection
