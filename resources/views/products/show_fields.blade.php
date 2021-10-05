<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('Product_Name', 'Product Name:') !!}
    <p>{{ $product->Product_Name }}</p>
</div>

<!-- Product Brand Field -->
<div class="col-sm-12">
    {!! Form::label('Product_Brand', 'Product Brand:') !!}
    <p>{{ $product->Product_Brand }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $product->Price }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $product->Description }}</p>
</div>

