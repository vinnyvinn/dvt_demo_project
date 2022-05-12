<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>User</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <a href="{{route('product.create')}}">Add New</a>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->user->name}}</td>
         <td>
             <a href="{{route('product.edit',$product->id)}}">Edit</a>

             <form action="{{route("product.destroy",$product->id)}}" method="post">
                 @csrf
                 @method("DELETE")
               <button type="submit">Delete</button>
             </form>
         </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
