@extends('master')


@section('title')
{{-- <h1>Home page</h1> --}}
<title>Category page</title>
@endsection

@section('title')
{{-- <h1>Home page</h1> --}}
<h1>Category page</h1>

@endsection

@section('content')
<div class="row">
    <div class="col-8 m-auto">
        <form action=" {{ route('category.store')}} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="category-name" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('category_name')
                is-invalid
                @enderror" id="category-name"
                name="category_name"  placeholder="Please provide Category name">
                @error('category_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category-slug" class="form-label">Category Slug</label>
                <input type="text" class="form-control @error('category_slug')
                is-invalid
                @enderror" id="category-slug"
                name="category_slug"  placeholder="Please provide Category slug">
                @error('category_slug')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label" for="flexCheckDefault">
                    Active/Inactive
                  </label>
                <input class="form-check-input" type="checkbox"
                name="is_active" id="flexCheckDefault">

              </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>
@endsection
