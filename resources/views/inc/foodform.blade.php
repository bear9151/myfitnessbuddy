{!! Form::open(['action' => 'FoodsController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('foodname', 'Food Name')}}
    {{Form::text('foodname', '', ['class' => 'form-control', 'placeholder' => 'Food Name'])}}
</div>
<div class="form-group">
    {{Form::label('protein', 'Protein')}}
    {{Form::text('protein', '', ['class' => 'form-control', 'placeholder' => 'Protein/g'])}}
</div>
<div class="form-group">
    {{Form::label('carb', 'Carbohydrates')}}
    {{Form::text('carb', '', ['class' => 'form-control', 'placeholder' => 'Carbohydrates/g'])}}
</div>
<div class="form-group">
    {{Form::label('fat', 'Fat')}}
    {{Form::text('fat', '', ['class' => 'form-control', 'placeholder' => 'Fat/g'])}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-success'])}}
{!! Form::close() !!}