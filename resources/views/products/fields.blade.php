<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Name', 'Product Name:') !!}
    {!! Form::text('Product_Name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Product Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Brand', 'Product Brand:') !!}
    {!! Form::text('Product_Brand', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>