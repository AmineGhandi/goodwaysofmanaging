@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <div class="container">
                <div class="row" style="margin-bottom:2%; width: 110%;margin-top: 3%;">
                    <div class="col-sm-3" style="margin-bottom: 10px; width: 77.333333%;">
                        <h3 style="font-weight: bold; color:#061127;">Les plans d'action annuels</h3>
                    </div>
                    <a href="{{route('plans.create')}}" class="btn btn-success btn-sm" style="background-color:#394762; 
                    border-color:#394762; 
                    font-family: 'Source Code Pro', monospace;
                    width: 208px;
                    margin-top: -5%;
                    margin-left: 5%">
                        <i class="fas fa-plus" style="margin-right: 3%;margin-top: -2%"></i>Ajouter un plan d'action 
                    </a>
                        <a href="#" style=" 
                        font-family: 'Source Code Pro', monospace;
                        width: 208px;
                        margin-top: -5%; color:#061127">
                            <i class="fas fa-book-open" style="    margin-left: -15.5%;"></i>
                            <h6 style="margin-left: 85.5%;
                            margin-top: -1.5%;">
                                Journal D'amelioration
                            </h6>
                            </a>
                </div>
            </div>
                <div style="margin-left: 3%;width: 95%;background-color: white; border-style: solid;
                border-color: rgb(105, 104, 104); border-width: 1px;">
                    <div style="border-style: solid;
                    border-color: rgb(105, 104, 104);
                    border-width: 1px 0px;
                    border-top-width: 0px;">
                        <h5 style="margin-left: 1%;font-weight: bold; color:#061127">FILTER LES PLANS D'ACTION PAR :</h5>
                        <input type="checkbox" name="checkbox" value="En cours" style="margin-left: 1.5%">
                        <label >En cours </label>
                        <input type="checkbox" name="checkbox" value="Non réalisés" style="margin-left: 1.5%">
                        <label>Non réalisés</label>
                        <input type="checkbox"  name="checkbox" value="Réalises non évalues" style="margin-left: 1.5%"> 
                        <label>Réalises non évalues</label>
                        <input type="checkbox"  name="checkbox" value="Réalise et éfficace" style="margin-left: 1.5%">
                        <label>Réalise et éfficace</label>
                        <input type="checkbox"  name="checkbox" value="Réalise et non éfficace" style="margin-left: 1.5%"> 
                        <label>Réalise et non éfficace</label>
                        <div style="border-style: solid;
                        border-color: rgb(105, 104, 104);
                        border-width: 1px 0px;
                        border-bottom-width: 0px;">
                        <h5 style="margin-left: 1%;font-weight: bold; color:#061127">FILTER LES PPROCESSUS PAR :</h5>
                            <form id="procform" method="get" action="{{URL::to('/plans/')}}">
                                <div class="form-group">
                                  <select name="proc" class="form-control" id="exampleFormControlSelect1" style="style=width: 27%;     
                                  width: 47%;
                                  margin-left: 1%;
                                  margin-top: 1%;
                                  top: 230px;
                                  left: 921px;"
                                  id="select">
                                  <option selected="true" disabled>ALL</option>
                                    @foreach ($plans as $key => $value)
                                    <option value="{{$value->id}}" {{$Processus_concerne =='$value->id'?'selected':''}}>{{$value->Processus_concerne}}</option>
                                    @endforeach
                                  </select>
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </div>
        <div class="container bg-white p-3" style="margin-top: 1%; width: 100%;" >
            
            <table id="table_id" class=" table-bordered stripe hover row-border ">
                <thead>
            <tr>
                <th>Processus concerné</th>
                <th>Actions</th>
                <th>Date d'evaluation</th>
                <th>Date d'evaluation</th>
                <th>Etat</th>
                <th>Realise</th>
                <th>Efficacite</th>
                <th with="140px" class="text-center">
                </th>
            </tr>
            </thead>
            <tbody>
            @if(isset($plans)&&count($plans)>0)
            @foreach ($plans as $key => $value)
            <tr>
                <td>{{$value->Processus_concerne}}</td>
                <td>{{$value->action}}</td>
                {{-- @if ($value->date_devaluation == NULL)
                <td class="text-center">-</td>
                @endif --}}
                <td>{{$value->date_devaluation}}</td>
                <td>{{$value->date_decheance}}</td>
                @if($value->etat == "Publie")
                <td style="background-color: #00c15d;  color:white;" class="text-center">{{$value->etat}}</td>
                @endif
                @if($value->etat == "En attente du validation du Pilote du process")
                <td class="text-center">{{$value->etat}}</td>
                @endif
                @if($value->etat == "En attente du publication du plan")
                <td style="background-color: #2451fe; color:white;" class="text-center">{{$value->etat}}</td>
                @endif
                <td id="re">{{$value->realise}}%</td>
                <td id="ef">{{$value->effictue}}%</td>
                <td class="text-right">
                    <a class="button-borderless" href="{{route('plans.show',$value->id)}}">
                        <i class="far fa-eye"></i>
                    </a>
            </tr>
            @endforeach
            @endif
        </tbody>
        </table>
        </div>  
        </div>
        </div>
    </div>
    </div>
@endsection























































































