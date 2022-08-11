$('#js-ajax-test').click(() => {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'test'
        },
        success: function (msg) {
            alert(msg.message);
        }
    })
});
