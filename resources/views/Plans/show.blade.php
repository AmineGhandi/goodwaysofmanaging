@extends('layouts.app')
@section('content')
<script src="https://www.chartjs.org/dist/2.9.4/Chart.min.js"></script>
<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
<h2 style="margin-left: 13%;
margin-bottom: 2%;"> Visioner un Plans</h2>
<div style="margin-left: 17%;
        width: 56%;
        background-color: white;
        border-style: solid;
        border-color: rgb(105, 104, 104);
        border-width: 1px;">
<div style="margin-left: 4%;
            margin-top: 4%;">
    <h4>Processus concerne: 
        {{$plans->Processus_concerne}}</h4>
        <br>
    <h4>Action : {{-- </h4> --}}
    {{$plans->action}}</h4>
    <br>
    <h4>Date d'evaluation : 
    {{$plans->date_devaluation}}</h4>
    <br>
    <h4>Date d'echeance : 
    {{$plans->date_decheance}}</h4>
        <br>
    <h4 style="margin-bottom: 9%;">Etat :
    {{$plans->etat}}</h4>
</div>
    
    <input type="hidden" value="{{$plans->realise}}" id="re">
    <input type="hidden" value="{{$plans->effictue}}" id="ef">

        <div id="canvas-holder" style="width:70%; margin-left: 64%;">
            <canvas id="chart-area" style=" position: absolute;
            top: 146px;
            left: 581px;"></canvas>
        </div>
        <script>

            var re = document.getElementById('re').value;
            var ef = document.getElementById('ef').value;

            var ire = parseInt(re);
            var ief = parseInt(ef); 

            var config = {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [
                        re,
                        ef,
                        ],
                        backgroundColor: [window.chartColors.purple, window.chartColors.blue,],
                    }],
                    labels: ['realise','effictue',]
                },
                options: {
                    responsive: true
                }
            };
            
            window.onload = function() {
                var ctx = document.getElementById('chart-area').getContext('2d');
                window.myPie = new Chart(ctx, config);
            };
            var colorNames = Object.keys(window.chartColors);
            document.getElementById('addDataset').addEventListener('click', function() {

                var newDataset = {
                    backgroundColor: [],
                    data: [],
                    label: 'New dataset ' + config.data.datasets.length,
                };
            });
        </script>
    </div>
</form>

</div>
<div class="pull-right">
    <br/>
    <a href="{{ route('plans.index') }}" class="btn btn-success" style="background-color:#061127; border-color:#061127;margin-left: -492%;">Go Back</a>
</div>
</div>
@endsection