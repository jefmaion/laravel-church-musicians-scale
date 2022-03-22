
@csrf

<div class="row">


  <div class="col-12">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Instrumento</label>
        <select class="form-control select2 {{ ($errors->has('member_instrument.instrument_id')) ? 'is-invalid' : '' }}"  name="member_instrument[instrument_id]">
          <option value=""></option>
          @foreach($instruments as $instrument)
        <option value="{{ $instrument->id }}" {{ ($instrument->id == old('member_instrument.instrument_id', ($memberInstrument->pivot->instrument_id ?? ''))) ? 'selected' : "" }}>{{ $instrument->name }}</option>
        @endforeach
        </select>
        @if($errors->has('member_instrument.instrument_id'))
        <div class="invalid-feedback">
            {{ $errors->first('member_instrument.instrument_id') }}
        </div>
      @endif
    </div>
  </div>

  <div class="col-12">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Nível</label>
        <select class="form-control select2 {{ ($errors->has('member_instrument.level_id')) ? 'is-invalid' : '' }}" name="member_instrument[level_id]">
          <option value=""></option>
          @foreach($levels as $level)
        <option value="{{ $level->id }}" {{ ($level->id == old('member_instrument.level_id', ($memberInstrument->pivot->level_id ?? ''))) ? 'selected' : "" }}>{{ $level->name }}</option>
        @endforeach
        </select>
        @if($errors->has('member_instrument.level_id'))
        <div class="invalid-feedback">
            {{ $errors->first('member_instrument.level_id') }}
        </div>
      @endif
    </div>
  </div>

<div class="col-12">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentários</label>
    <textarea class="form-control" name="member_instrument[comments]" rows="3">{{ old('member_instrument.comments', ($memberInstrument->pivot->comments ?? '')) }}</textarea>
  </div>
</div>


{{-- 

<div class="form-group col-12">
    <label for="">Nome</label>
    <input type="text" class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" name="name" value="{{ old('name', $member->name) }}" aria-describedby="helpId" placeholder="">
    @if($errors->has('name'))
      <div class="invalid-feedback">
          {{ $errors->first('name') }}
      </div>
    @endif
</div>

<div class="form-group col">
    <label for="">Email</label>
    <input type="text" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" name="email" value="{{ old('email', $member->email) }}" aria-describedby="helpId" placeholder="">
    @if($errors->has('email'))
      <div class="invalid-feedback">
          {{ $errors->first('email') }}
      </div>
    @endif
</div>

<div class="form-group col">
    <label for="">Telefone</label>
    <input type="text" class="form-control {{ ($errors->has('phone')) ? 'is-invalid' : '' }}" name="phone" value="{{ old('phone', $member->phone) }}" aria-describedby="helpId" placeholder="">
    @if($errors->has('phone'))
      <div class="invalid-feedback">
          {{ $errors->first('phone') }}
      </div>
    @endif
</div>


<div class="form-group col">
  <label for="">Data de nascimento</label>
  <input type="date" class="form-control {{ ($errors->has('birth_date')) ? 'is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date', $member->birth_date) }}" aria-describedby="helpId" placeholder="">
  @if($errors->has('birth_date'))
    <div class="invalid-feedback">
        {{ $errors->first('birth_date') }}
    </div>
  @endif
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

<div class="col-12">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentários</label>
    <textarea class="form-control" name="comments" rows="3">{{ $member->comments }}</textarea>
  </div>
</div> --}}



</div>

<hr>