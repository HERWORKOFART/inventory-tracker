@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $item->name ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">SKU</label>
    <input type="text" name="sku" class="form-control" value="{{ old('sku', $item->sku ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $item->quantity ?? 0) }}">
</div>

<div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $item->price ?? '') }}">
</div>

<button class="btn btn-primary">Save</button>
<a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>