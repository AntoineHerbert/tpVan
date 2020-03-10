@extends('adminlte::page')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Calcule</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <center>
                        <form method="post" action="./resultat">
                            @csrf
                            <input type="hidden" value="{{$annees}}" name="annees">
                            @for($i=1;$i<=$annees;$i++)
                                <div class="col-md-12">
                                    <h5>Année {{$i}}</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                Chiffre d'affaire :
                                                <input class="form-control" name="CA{{$i}}" type="number">
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                Charges supplémentaires :
                                                <input class="form-control" name="CS{{$i}}" type="number">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <br>
                            <div class="col-md-12">
                                <h5>Informations complémentaires</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>
                                            Impot sur les sociétés :
                                            <input class="form-control" name="IS" type="number" min="0" max="100" placeholder="En pourcentage">
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            Taux d'actualisation :
                                            <input class="form-control" name="TA" type="number">
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            Investissement :
                                            <input type="number" name="Inv" class="form-control">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" class="btn-block btn-info">
                            </div>
                        </form>
                </center>
            </div>
        </div>
    </div>

@endsection

