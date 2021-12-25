$(function() {
    _token_value = $('meta[name="csrf-token"]').attr('content');
    if (_token_value != '') {
        $('#users_listing').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "users_listing",
                "type": "POST",
                "dataType": "JSON",
                "data": { _token: _token_value }
            },
            "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "email" },
                { "data": "is_admin" },
                { "data": "options" }
            ],
        });
    } else {
        setTimeout(function() {
            // window.location.reload();
            alert('Something went wrong. Please try again.');
        }, 1000);
    }
});