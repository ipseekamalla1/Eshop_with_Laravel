<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <h2>Create Product</h2>
                <form action="/admin/products/store" method="POST">
                    @csrf
                    Product Name: <input class="form-control" type="text" name="product_name" id=""><br><br>
                    Product Desc: <textarea class="form-control" name="product_desc" id="" cols=30 rows=10></textarea><br>
                    Price: <input class="form-control" type="text" name="price" id=""><br><br>
                    Category:
                    <x-forms.select name="category_id">
                        <option value="0"> Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </x-forms.select>


                    {{-- <select name="category_id" id="">
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
