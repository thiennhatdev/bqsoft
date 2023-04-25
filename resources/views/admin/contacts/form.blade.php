@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'username',
        'label' => 'Tên khách hàng',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'email',
        'label' => 'Email',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'price',
        'label' => 'Khoảng giá',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'title',
        'label' => 'Yêu cầu',
        'maxlength' => 200
    ])
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Mô tả yêu cầu',
        'maxlength' => 200
    ])
@stop
