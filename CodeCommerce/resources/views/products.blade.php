<h1>Produtos</h1>

<ul>
    @foreach($products as $product)
        <li> {{ $product->name }} </li>
        <li> {{ $product->Description }} </li>
        <li> {{ $product->price }} </li>
    @endforeach
</ul>