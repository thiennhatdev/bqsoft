@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'customer_avatar',
        'label' => 'Ảnh đại diện',
    ])

    @formField('input', [
        'name' => 'title',
        'label' => 'Mô tả ngắn',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Đánh giá',
        'maxlength' => 200
    ])


    @formField('input', [
        'name' => 'customer_name',
        'label' => 'Tên khách hàng',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'customer_career_title',
        'label' => 'Chức danh',
        'maxlength' => 200
    ])

@stop
