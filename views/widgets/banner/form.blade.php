@component('juzaweb::widgets.upload_image', [
    'label' => trans('app.title'),
    'name' => 'banner',
    'value' => $data['banner'] ?? ''
])
@endcomponent
