<form action="/admin/products/store" method="POST">
    @csrf
    <x-forms.input type="text" name="full_ name" />
    Product Name: <input type="text" name="product_name" id=""><br><br>
    Product Desc: <textarea name="product_desc" id="" cols=30 rows=10></textarea><br>
    Price: <input type="text" name="price" id=""><br><br>
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
    <input type="Submit" name="Submit" value="Save">
</form>
