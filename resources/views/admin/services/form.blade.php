@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'services_icon',
        'label' => 'Icon',
    ])
    @formField('input', [
        'name' => 'title',
        'label' => 'Tiêu đề',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'description',
        'label' => 'Mô tả',
        'maxlength' => 200
    ])
    @formField('block_editor', [
        'label' => 'Block',
        'blocks' => ['quote', 'paragraph', 'image']
    ])
@stop
