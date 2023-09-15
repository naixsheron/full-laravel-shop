@extends('admin.layouts.master')

@section('content')


    <section class="section">
      <div class="section-header">
        <h1>Slider</h1>
       
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Edit Slider</h4>
               
              </div>
              <div class="card-body">
              <form action="{{ route('admin.slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Preview</label>
                    <br>
                    <img width="200px" src="{{ asset($slider->banner) }}" alt="">
            
                </div>
                <div class="form-group">
                    <label for="">Banner</label>
                    <input type="file" class="form-control" name="banner">
                </div>
                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" class="form-control" name="type" value="{{$slider->type }}">
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$slider->title }}">
                </div>
                <div class="form-group">
                    <label for="">Starting Price</label>
                    <input type="text" class="form-control" name="starting_price"  value="{{$slider->starting_price }}">
                </div>
                <div class="form-group">
                    <label for="">Button Url</label>
                    <input type="text" class="form-control" name="btn_url" value="{{$slider->btn_url }}">
                </div>
                <div class="form-group">
                    <label for="">Serial</label>
                    <input type="text" class="form-control" name="serial" value="{{$slider->serial }}">
                </div>   
              
                <div class="form-group">
                    <label for="inputState">Status</label>
                    <select id="inputState" class="form-control" name="status">
                        <option {{ $slider->status == 1 ? 'selected' : '' }} value="1">Active</option>
                        <option {{ $slider->status == 0 ? 'selected' : '' }}  value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
              </div>
             
            </div>
          </div>
       
        </div>
     
      </div>
    </section>


@endsection