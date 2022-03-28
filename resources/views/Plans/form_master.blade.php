<div class="row">
    <div class="col-sm-2">
    </div>
<div class="col-sm-10">
  <div class="row">
    <div class="col-sm-2" >
      {!! form::label('Processus_concerne','Processus concerne' ,'style ="margin-left: -129%;max-width: none;"') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('Processus_concerne') ? 'has-error' : "" }}" >
        {{ Form::text('Processus_concerne',NULL, ['class'=>'form-control', 'id'=>'Processus_concerne', 'placeholder'=>' Processus concerne']) }}
        <p class="help-block">{{ $errors->first('Processus_concerne', '*') }}</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2" >
      {!! form::label('action','Action','style ="margin-left: -129%;"') !!}
    </div>
    <div class="col-sm-10 ">
      <div class="form-group {{ $errors->has('action') ? 'has-error' : "" }}">
          {{Form::select('action', array('Select une Action','En cours' => 'En cours', 'Non réalisés' => 'Non réalisés', 'Réalises non évalues'=>'Réalises non évalues','Réalise et éfficace'=>'Réalise et éfficace','Réalise et non éfficace'=>'Réalise et non éfficace'), ['id'=>'action'], ['class'=>'form-control'])}}
        <p class="help-block">{{ $errors->first('action', '*') }}</p>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-2" >
      {!! form::label('date_devaluation','Date Devaluation' ,'style ="margin-left: -129%; max-width: none;"') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('date_devaluation') ? 'has-error' : "" }}">
        {{ Form::text('date_devaluation',NULL, ['class'=>'form-control', 'id'=>'date_devaluation', 'placeholder'=>'Taper une Date Devaluation']) }}
        <p class="help-block">{{ $errors->first('date_devaluation', '*') }}</p>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-2">
      {!! form::label('date_decheance','Date Decheance' ,'style ="margin-left: -129%; max-width: none;"') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('date_decheance') ? 'has-error' : "" }}">
        {{ Form::text('date_decheance',NULL, ['class'=>'form-control', 'id'=>'date_decheance', 'placeholder'=>'Taper une Date Decheance']) }}
        <p class="help-block">{{ $errors->first('date_decheance', '*') }}</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2" >
      {!! form::label('etat','Etat','style ="margin-left: -129%;"') !!}
    </div>
    <div class="col-sm-10 ">
      <div class="form-group {{ $errors->has('etat') ? 'has-error' : "" }}">
          {{Form::select('etat', array('Select une Etat','Publie' => 'Publie', 'En attente du validation du Pilote du process' => 'En attente du validation du Pilote du process', 'En attente du publication du plan'=>'En attente du publication du plan'), ['id'=>'etat'], ['class'=>'form-control'])}}
        <p class="help-block">{{ $errors->first('etat', '*') }}</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('realise','Realise','style ="margin-left: -129%;"') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('realise') ? 'has-error' : "" }}">
        {{ Form::text('realise',NULL, ['class'=>'form-control', 'id'=>'realise', 'placeholder'=>'Realise']) }}
        <p class="help-block">{{ $errors->first('realise', '*') }}</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('effictue','Effictue','style ="margin-left: -129%;"') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('effictue') ? 'has-error' : "" }}">
        {{ Form::text('effictue',NULL, ['class'=>'form-control', 'id'=>'effictue', 'placeholder'=>'Effictue']) }}
        <p class="help-block">{{ $errors->first('effictue', '*') }}</p>
      </div>
    </div>
  </div>

  <div class="text-right">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn', 'type'=>'submit', 'style'=>'border-color:#061127; color:#061127;']) }}
          <a href="{{ route('plans.index') }}" class="btn btn-success" style="background-color:#061127; border-color:#061127;">Go Back</a>

  </div>