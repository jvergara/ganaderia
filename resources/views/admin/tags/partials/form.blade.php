<div class="form-group">                
    {!! Form::label('name', 'Nombre') !!}                
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'nombre de la etiqueta']) !!} 

    @error('name')
       <span class="text-danger">{{$message}}</span> 
    @enderror              
</div>

<div class="form-group">                
    {!! Form::label('slug', 'Slug') !!}                
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'campo slug', 'readonly']) !!}
     
    @error('slug')
    <span class="text-danger">{{$message}}</span> 
    @enderror               
</div>

<div class="form-group">                
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    
    @error('color')
       <span class="text-danger">{{$message}}</span> 
    @enderror                
</div>