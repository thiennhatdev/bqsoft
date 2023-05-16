@extends('layouts.admin-layout')

@section('contentFields')
    @formField('medias', [
        'name' => 'thumbnail',
        'label' => 'Ảnh dự án',
    ])

    @formField('medias', [
        'name' => 'project_images',
        'label' => 'Ảnh dự án',
        'max' => 10,
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('input', [
        'name' => 'title',
        'label' => 'Dự án',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Mô tả',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'link',
        'label' => 'Link dự án',
        'maxlength' => 200
    ])

@stop
