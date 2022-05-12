<form action="{{route('product.update',$product->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$product->name}}">
    <input type="text" name="amount" value="{{$product->amount}}">
    <button type="submit">Update</button>
</form>
