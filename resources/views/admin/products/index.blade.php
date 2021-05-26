<a href="/admin/products/create">Create Product</a>
<x-admin.layout>

<table width="900" align="center">
    <tr>
        <td>SN</td>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Action</td>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->product_name}}</td>
        <td>{{ substr($product->product_desc,0,50)}}</td>
        <td>{{ $product->price}}</td>
        <td>
            <a href="#">Edit</a>||
            <a href="#">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</x-admin.layout>
    

