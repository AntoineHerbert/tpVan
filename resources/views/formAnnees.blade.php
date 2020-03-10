@extends('adminlte::page')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Choisir le nombre d'années</h3>
        </div>
        <div class="card-body">
            <form method="post">
                    @csrf
                <center><label for="annee">
                Nombres d'année(s) :
                <input class="form-control" name="annee" id="annee" type="number" min="1">
            </label>
            </center>
            <input class="btn-info btn-block" type="submit">
            </form>
        </div>
    </div>


@endsection
