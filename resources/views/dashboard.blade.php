@extends('layouts/master')

@section('content')
@javascript(compact('pusherKey', 'pusherCluster', 'usingNodeServer'))

<dashboard id="dashboard" columns="3" rows="3">
    <uptime position="a1:a3"></uptime>
    <packagist position="b1"></packagist>
    <npm position="b2"></npm>
    <github position="b3"></github>
    <music position="c1:d1"></music>
    <time-weather position="f1" date-format="ddd DD/MM" time-zone="Europe/Brussels" weather-city="Antwerp"></time-weather>
    <calendar position="f2:f3"></calendar>
    <internet-connection></internet-connection>
</dashboard>

@endsection
