@extends('layouts.dashboard')

@section('title')
    Edit Realops Flight
@endsection

@section('content')
<div class="container-fluid" style="background-color:#F0F0F0;">
    &nbsp;
    <h2>Edit Realops Flight</h2>
    &nbsp;
</div>
<br>
<div class="container">
    {!! Form::open(['action' => ['RealopsController@editFlight', $flight->id], 'method' => 'PUT']) !!}
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('flight_date', 'Date') !!}
                    {!! Form::text('flight_date', $flight->flight_date_formatted, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY - Required']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::label('flight_number', 'Flight Number') !!}
                    {!! Form::text('flight_number', $flight->flight_number, ['class' => 'form-control', 'placeholder' => 'Required']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::label('dep_time', 'Departure Time') !!}
                    {!! Form::text('dep_time', $flight->dep_time_formatted, ['class' => 'form-control', 'placeholder' => 'HH:MM - Required']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('dep_airport', 'Departure Airport') !!}
                    {!! Form::text('dep_airport', $flight->dep_airport, ['class' => 'form-control', 'placeholder' => 'Required']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::label('arr_airport', 'Arrival Airport') !!}
                    {!! Form::text('arr_airport', $flight->arr_airport, ['class' => 'form-control', 'placeholder' => 'Required']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::label('est_arr_time', 'Estimated Arrival Time') !!}
                    {!! Form::text('est_arr_time', $flight->est_arr_time_formatted, ['class' => 'form-control', 'placeholder' => 'HH:MM - Optional']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('route', 'Route') !!}
            {!! Form::text('route', $flight->route, ['class' => 'form-control', 'placeholder' => 'Optional']) !!}
        </div>
        <button class="btn btn-success mr-2" action="submit">Submit</button>
        <a class="btn btn-danger" href="/dashboard/admin/realops">Cancel</a>
    {!! Form::close() !!}
</div>
@endsection