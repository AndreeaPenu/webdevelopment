@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Wedstrijd</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                      <class class="row">Je kunt nu deelnemen aan de wedstrijd!
                          <a href={{url('/participations/create')}}>Voeg een foto toe</a>
                      </class>

                        <class class="row">
                            Andere deelnames
                            <a href={{url('/participations')}}>Bekijk en stem</a>
                        </class>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
