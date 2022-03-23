
@csrf

<div class="row">



<div class="form-group col-12">
    <label for="">Nome</label>
    <input type="text" class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" name="name" value="{{ old('name', $member->name) }}" aria-describedby="helpId" placeholder="">
    {{-- @if($errors->has('name')) --}}
      <div class="invalid-feedback">
          {{-- {{ $errors->first('name') }} --}}
      </div>
    {{-- @endif --}}
</div>

<div class="form-group col-4">
  <label for="">Apelido</label>
  <input type="text" class="form-control {{ ($errors->has('nickname')) ? 'is-invalid' : '' }}" name="nickname" value="{{ old('nickname', $member->nickname) }}" aria-describedby="helpId" placeholder="">
  {{-- @if($errors->has('nickname')) --}}
    <div class="invalid-feedback">
        {{-- {{ $errors->first('nickname') }} --}}
    </div>
  {{-- @endif --}}
</div>

<div class="form-group col-4">
  <label for="">Data de nascimento</label>
  <input type="date" class="form-control {{ ($errors->has('birth_date')) ? 'is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date', $member->birth_date) }}" aria-describedby="helpId" placeholder="">
  {{-- @if($errors->has('birth_date')) --}}
    <div class="invalid-feedback">
        {{-- {{ $errors->first('birth_date') }} --}}
    </div>
  {{-- @endif --}}
</div>

<div class="col">
  <div class="form-group">
      <label for="exampleFormControlSelect1">Gênero</label>
      <select class="form-control select2" name="gender">
      <option></option>
      <option value="M" {{ ($member->gender == 'M') ? 'selected' : ''  }}>Masculino</option>
      <option value="F" {{ ($member->gender == 'F') ? 'selected' : ''  }}>Feminino</option>
      </select>
      <div class="invalid-feedback"></div>
  </div>
</div>


<div class="form-group col-4">
  <label for="">Email</label>
  <input type="text" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" name="email" value="{{ old('email', $member->email) }}" aria-describedby="helpId" placeholder="">
  {{-- @if($errors->has('email')) --}}
    <div class="invalid-feedback">
        {{-- {{ $errors->first('email') }} --}}
    </div>
  {{-- @endif --}}
</div>

<div class="form-group col-4">
  <label for="">Telefone</label>
  <input type="text" class="form-control {{ ($errors->has('phone')) ? 'is-invalid' : '' }}" name="phone" value="{{ old('phone', $member->phone) }}" aria-describedby="helpId" placeholder="">
  {{-- @if($errors->has('phone')) --}}
    <div class="invalid-feedback">
        {{-- {{ $errors->first('phone') }} --}}
    </div>
  {{-- @endif --}}
</div>





<div class="col-4">
  <div class="form-group">
      <label for="exampleFormControlSelect1">Gênero</label>
      <select class="form-control select2" name="enabled">
      <option></option>
      <option value="0" {{ ($member->enabled == 0) ? 'selected' : ''  }}>Inativo</option>
      <option value="1" {{ ($member->enabled == 1) ? 'selected' : ''  }}>Ativo</option>
      </select>
      <div class="invalid-feedback"></div>
  </div>
</div>







<div class="col-12">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentários</label>
    <textarea class="form-control" name="comments" rows="3">{{ $member->comments }}</textarea>
    <div class="invalid-feedback"></div>
  </div>
</div>



</div>

<hr>