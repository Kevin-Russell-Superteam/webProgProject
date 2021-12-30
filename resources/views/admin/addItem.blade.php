@extends('layouts.guest')
@section('container')

<div class="wrapper-register">
    <form enctype="multipart/form-data" action="/addItem" method="POST">
        @csrf
        <div class="mb-3 sub-heading">
            <h1>Add Furniture</h1>
        </div>

        <div class="mb-3">
            <label for="ItemName" class="form-label">Name</label>
            <input type="text" class="form-control  @error('ItemName') is-invalid @enderror" id="ItemName" name="ItemName"
                value="{{ old('name') }}">
            @error('ItemName')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ItemPrice" class="form-label">Price</label>
            <input type="text" class="form-control @error('ItemPrice') is-invalid @enderror" id="ItemPrice" name="ItemPrice"
                value="{{ old('email') }}">
            @error('ItemPrice')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ItemType" class="form-label">Type</label>
            <select name="ItemType" id="ItemType" class="form-control">
                <option value="Bed">Bed</option>
                <option value="Wardrobe">Wardrobe</option>
                <option value="Sofa">Sofa</option>
                <option value="Chair">Chair</option>
                <option value="Table">Table</option>
            </select>
            {{-- <input type="password" class="form-control @error('password') is-invalid @enderror" id="ItemType"
                name="ItemType"> --}}
            {{-- @error('ItemType')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="ItemColor" class="form-label">Color</label>
            <select name="ItemColor" id="itemColor" class="form-control">
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Navy">Blue Navy</option>
            </select>
            {{-- <textarea class="form-control @error('address') is-invalid @enderror" id="ItemColor" name="ItemColor"
                rows="3">{{ old('address') }}</textarea> --}}
            {{-- @error('address')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="ItemImage" class="form-label pe-3">Image</label>

            <input type="file" id="ItemImage" class="form-control" name="ItemImage">

            {{-- <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender"
                value="Male">
            <label class="form-check-label pe-3" for="gender">Male</label> --}}

            {{-- @error('gender')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror --}}
        </div> 

        <button type="submit" class="btn btn-primary w-100">Add Furniture</button>
    </form>
</div>

@endsection