window.$ = require('jquery')
import 'admin-lte'

import 'tinymce';

tinymce.init({
    selector: '.text-editor',
    menubar: false,
    statusbar: false,
    plugins: 'lists',
    tootlbar: 'numlist bullist',
});

$(() => {
    $('.btn-delete').on('click', () => {
        return confirm('Are you sure you want to delete this?');
    })
});
