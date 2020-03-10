@extends('adminlte::page')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Résultat</h3>
        </div>
        <div class="card-body">
            <center>
            <table id="table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td></td>
                    <center><th>Flux nets de trésorerie</th></center>
                    <center><th>Flux nets de trésorerie actualisés</th></center>
                </tr>
                </thead>
                @for($i=0;count($FNT)>$i;$i++)
                    <tr>
                        <th>Année {{$i+1}}</th>
                        <center><td>{{$FNT[$i]}}</td></center>
                        <center><td>{{$FNTActu[$i]}}</td></center>
                    </tr>
                @endfor
            </table></center>
            <center>
            <p>La valeur actuel nette est égal à {{$VAN}}</p>

            @if($rentable)
                <p>L'investissement est donc rentable</p>
            @else
                <p>L'investissement n'est donc pas rentable</p>
            @endif
            </center>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endsection
