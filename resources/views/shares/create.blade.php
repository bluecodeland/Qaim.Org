@extends('layouts.app')
@section('header')
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

@endsection
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shares.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Share Name:</label>
              {{-- <input type="text" class="form-control" name="share_name"/> --}}
              <textarea id="share_name" name="share_name" ></textarea>


              <script>
                  ClassicEditor
                      .create( document.querySelector( '#share_name' ) )
                      .catch( error => {
                          console.error( error );
                      } );
              </script>

              



          </div>
          <div class="form-group">
              <label for="price">Share Price :</label>
              <input type="text" class="form-control" name="share_price"/>
          </div>
          <div class="form-group">
              <label for="quantity">Share Quantity:</label>
              <input type="text" class="form-control" name="share_qty"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>

@endsection