@extends('layouts.admin-layout')

@section('contentFields')
    @formField('medias', [
        'name' => 'thumbnail',
        'label' => 'Ảnh bìa',
    ])

    @formField('input', [
        'name' => 'title',
        'label' => 'Tiêu đề',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Mô tả ngắn',
        'maxlength' => 200
    ])

    @formField('checkbox', [
        'name' => 'isSentMail',
        'disabled' => 'true',
        'label' => 'Đã gửi mail tới khách hàng'
    ])


    @formConnectedFields([
        'fieldName' => 'isSentMail',
        'fieldValues' => false,
    ])
        @formField('radios', [
            'name' => 'isHaveSendMail',
            'label' => 'Gửi đến mail khách hàng',
            'default' => false,
            'options' => [
                [
                    'value' => false,
                    'label' => 'Không'
                ],
                [
                    'value' => true,
                    'label' => 'Có'
                ]
            ]
        ])
    @endformConnectedFields

    @formField('block_editor', [
        'label' => 'Block',
        'blocks' => ['quote', 'paragraph', 'image']
    ])
    
@stop
