


<table width="900" align="center">
    <tr>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Action</td>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->product_name}}</td>
        <td>{{ $product->product_desc}}</td>
        <td>{{ $product->price}}</td>
        <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
    

