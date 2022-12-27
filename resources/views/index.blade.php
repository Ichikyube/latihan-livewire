<h1>Daftar Produk</h1>

@foreach ($products as $key => $product)
<div :wire:key={{'card-'.$key}}
@livewire('card.products',['product' =>$product])

@endforeach
