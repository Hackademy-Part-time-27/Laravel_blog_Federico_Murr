<x-layout title="Creater Articles">
<h1>Create your Articles</h1>

<x-success />

{{--
@if($errors->any())
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
--}}

<div class="mt-5">
    @csrf
    <form action="{{ route('articles.store') }}" method="POST">
        <div class="row g-3">
            <div class="col-12">
                <label for="title">Title</label>
                <input type="text" name="title" id="title"
                    class="form-control" value="{{ old('title') }}">
                @error('title') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="category">Categoty</label>
                <input type="text" name="category" id="category"
                    class="form-control @error('category') is-invalid @enderror" maxlength="50" value="{{ old('category') }}">
                @error('category') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="description">Description </label>
                <textarea name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror"
                    rows="5" maxlength="255">{{ old('description') }}</textarea>
                @error('description') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div>
            {{-- <div class="col-12">
                <label for="image">Images</label>
                <input type="file" name="image" id="image"
                    class="form-control @error('image') is-invalid @enderror">
                @error('image') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div> --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2">Create</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>

</x-layout>