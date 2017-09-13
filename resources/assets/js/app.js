require('./bootstrap');

import Echo from 'laravel-echo'


window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

window.Echo.channel('chat-demo')
    .listen('RedisEvent', (e) => {
        $("#our-msg").append('<p><b>' + e.name + ': </b> ' + e.msg + '</p>');
        $(document).scrollTop($(document).height());
    });




$("#btn-test").click(function () {
    $.ajax({
        type: "POST",
        url: '/post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            name: $("#name").val(),
            content:$("#content").val()
        },
        dataType: 'JSON',
        success: function() {
            alert("toan");
        }
    });
    $("#content").val('');
    $("#name").val('');
    return false;
});
