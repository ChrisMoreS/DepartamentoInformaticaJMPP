tinymce.init({
    selector: 'textarea#tinyContent',
    menubar: 'file edit insert view format table tools help',
    toolbar: [
        { name: 'history', items: [ 'undo', 'redo' ] },
        { name: 'styles', items: [ 'styles' ] },
        { name: 'formatting', items: [ 'bold', 'italic' ] },
        { name: 'alignment', items: [ 'alignleft', 'aligncenter', 'alignright', 'alignjustify' ] },
        { name: 'indentation', items: [ 'outdent', 'indent' ] },
        { name: 'upload', items: [ 'quickimage', 'media' ]}
    ]
})