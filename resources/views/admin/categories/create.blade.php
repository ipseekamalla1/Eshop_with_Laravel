<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                    </div>
                @endif
                <h2>Create Category</h2>
                <form action="{{ route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    Category Name: <input class="form-control" type="text" name="category_name"
                        value="{{ old('category_name') }}"><br><br>
                    @error('category_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Category Desc: <textarea class="form-control" name="category_desc" id="" cols=30
                        rows=10>{{ old('category_desc') }}</textarea>
                    @error('category_desc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror<br>
    
                    Parent Category:
                    <x-forms.select name="parent_id" class="form-control">
                        <option value="0"> Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('parent_id') ? 'selected' : ' ' }}>
                                {{ $category->category_name }}</option>
                        @endforeach
                    </x-forms.select>
                    <br><br>
                    {{--<input type="file" src="" name="upload_image" id="">

                     <select name="category_id" id="">
        <option value="0"> Select a category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select> --}}
                    <br><br>
                    <input class="form-control" type="Submit" name="Submit" value="Save">
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>
