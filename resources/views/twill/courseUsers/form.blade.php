@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'phoneOrEmail',
        'label' => 'Phone or Email',
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'courseName',
        'label' => 'Khoá học',
        'maxlength' => 100
    ])
@stop
