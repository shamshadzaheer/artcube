window.$ = require('jquery')
import 'admin-lte'

$(() => {
    $('.btn-delete').on('click', () => {
        return confirm('Are you sure you want to delete this?');
    })
});
