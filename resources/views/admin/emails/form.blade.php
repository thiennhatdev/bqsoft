@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'customer_email',
        'label' => 'Email',
        'maxlength' => 100
    ])
@stop
