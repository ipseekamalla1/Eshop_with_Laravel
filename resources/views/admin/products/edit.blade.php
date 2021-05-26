<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <h2>Update Product: {{ $product->product_name}}</h2>
                <form action="/admin/products/store" method="POST">
                    @csrf
                    Product Name: <input class="form-control" type="text" name="product_name" value="{{ $product->product_name}}"><br><br>
                    Product Desc: <textarea class="form-control" name="product_desc" cols=30 rows=10 > "{{ $product->product_desc}}"  </textarea><br>
                    Price: <input class="form-control" type="text" name="price" value=" {{  $product->price }}"><br><br>
                    Category:
                    <x-forms.select name="category_id">
                        <option value="0"> Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $product->category_id ) selected @endif>{{ $category->category_name }}</option>
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
