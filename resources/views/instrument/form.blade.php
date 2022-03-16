
@csrf

<div class="row">


<div class="form-group col-12">
    <label for="">Nome</label>
    <input type="text" class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" name="name" value="{{ old('name', $instrument->name) }}" aria-describedby="helpId" placeholder="">
    @if($errors->has('name'))
      <div class="invalid-feedback">
          {{ $errors->first('name') }}
      </div>
    @endif
</div>



</div>

<hr>