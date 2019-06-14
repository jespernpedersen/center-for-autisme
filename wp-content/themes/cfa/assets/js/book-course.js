$(document).ready(function() {

    $('.course-item .btn').on('click', '.send-report', function(event) {

        var $button = $(this);

        // set ajax data
        var data = {
            'action': 'send_bug_report',
            'post_id': $button.data('post_id'),
            'report': $('.report-a-bug-message').val()
        };

        $.post(settings.ajaxurl, data, function(response) {

            console.log('ok');

        });

    });
});