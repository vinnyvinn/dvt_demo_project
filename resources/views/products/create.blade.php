<form action="{{route('product.store')}}" method="post">
   @csrf
   <input type="text" name="name">
   <input type="text" name="amount">
<button type="submit">Submit</button>
</form>
