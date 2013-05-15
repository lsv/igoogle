var Feeder = {

    Config: {
        url: '',
        plussign: 'icon-plus-sign',
        minussign: 'icon-minus-sign'
    },

    init: function() {
        var that = this;

        $('#igoogle').find('.tab-pane.active').find('.loading').each(function() {
            that.loadfeed($(this));
        });

        $('a.viewgroup').click(function() {
            var $group = $(this).parent().parent().parent();
            if ($group.find('.items').is(':visible')) { // We are closing
                $group.find('.header').addClass('noborder').find('i').removeClass(that.Config.minussign).addClass(that.Config.plussign);
                $group.find('.items').hide();
            } else { // We are opening
                $group.find('.header').removeClass('noborder').find('i').removeClass(that.Config.plussign).addClass(that.Config.minussign);
                $group.find('.items').show();
            }

        });

        $(document).on('click', 'a.viewitem', function() {
            var $item = $(this).parent().find('div');
            if ($item.is(':visible')) { // We are closing
                $item.hide().parent().find('i').removeClass(that.Config.minussign).addClass(that.Config.plussign);
            } else { // We are opening
                $item.show().parent().find('a.title').addClass('isread').parent().find('i').removeClass(that.Config.plussign).addClass(that.Config.minussign);
            }
        });

        $('.tabbable').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $('#igoogle').find('.tab-pane.active').find('.loading').each(function() {
                that.loadfeed($(this));
            });
        })
    },

    loadfeed: function($elm) {
        var that = this;
        $.post(
            that.Config.url,
            {
                href: encodeURIComponent($elm.data('href')),
                items: $elm.data('items'),
                age: $elm.data('age')
            },
            function(data) {
                var $a = $elm.parent().parent().find('.header').find('span').find('a');
                /*
                if (data.title) {
                    $a.html(data.title);
                }
                */

                if (data.url) {
                    $a.attr('href', data.url);
                }

                if (data.items) {
                    var $html = $('<ul class="unstyled"></ul>');
                    $.each(data.items, function(num, el) {
                        $html.append(
                            $(
                                '<li>' +
                                '<a class="btn viewitem"><i class="icon-plus-sign"></i>' +
                                '<a class="title" target="_blank" href="' + el.link + '">' + el.title + '</a>' +
                                '<div>' + el.description + '</div>' +
                                '</li>'
                            )
                        );
                    });

                    $elm.parent().html($html);
                }

            },
            'json'
        );
    }

};

$(function() {
    Feeder.init();
});