$(function () {


    svg4everybody();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function _ajax_request(url, data, callback, method) {
        return $.ajax({
            url: url,
            type: method,
            data: data,
            success: callback
        });
    }

    $.extend({
        put: function (url, data, callback) {
            return _ajax_request(url, data, callback, 'PUT');
        },
        delete: function (url, data, callback) {
            return _ajax_request(url, data, callback, 'DELETE');
        }
    });
    $(document).on('click', '.js-ajax-reviews', function (e) {
            e.preventDefault();
            let that = $(this);
            let url = $(this).data('next-page');
            if (url !== "" && url !== null) {
                $.get(url)
                    .done(function (response) {
                        if (response.status === 'OK') {
                            $('.js-ajax-reviews-load').append(response.reviews);
                            that.data('next-page', response.next_page);
                            if (response.next_page == null) {
                                that.data('next-page', "");
                                that.hide()
                            }
                        }

                    }).fail(function (xhr) {
                    var response = $.parseJSON(xhr.responseText);
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                });
            }
        }
    );
    $('.js-subscribe').submit(function (e) {
        e.preventDefault();
        let url = $(this).data('subscribe-url');
        let email = $(this).find('#email-subscribe').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let $input = $(this).find('#email-subscribe');

        $.ajax({
            type: "POST",
            url: url,
            data: {email: email},
        }).done(function (response) {
            $input.val('');
        }).fail(function (xhr) {
            var response = $.parseJSON(xhr.responseText);
            if (response.status === 'ERROR' && response.errors) {
                $input.find('.field__input').removeClass('error');
                $input.find('label.error').remove();
                $.each(response.errors, function (field, message) {
                    var $input = $input.addClass('error');
                    $('<label class="error">' + message + '</label>').insertAfter($input);
                });

            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        });
    });

    // tags
    $('.js-tag').on('click', function (e) {
        e.preventDefault();
        var type = $(this).attr('href').substring(1);
        $('.js-article:not(".active")').fadeOut(0);
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            if ($('.js-tag.active').length > 0) {
                $('.js-article[data-type="' + type + '"').removeClass('active').fadeOut(0);
            } else {
                $('.js-article').removeClass('active').fadeIn();
            }
        } else {
            $(this).addClass('active');
            $('.js-article[data-type="' + type + '"').addClass('active').fadeIn(0);
        }
    });

    // hamb
    $('.js-hamb').on('click', function () {
        $(this).toggleClass('open');
        $('.js-mobile-nav').toggleClass('open');
        $(this).closest('.header').toggleClass('open');
        if ($(this).hasClass('open')) {
            fixHeaderPopup();
        } else {
            showScroll();
        }
    });

    // styler
    $('input[type="checkbox"], input[type="radio"]').styler();


    // placeholder
    $(document).on('change', 'input, textarea', function () {
        if ($(this).val()) {
            $(this).addClass('value');
        } else {
            $(this).removeClass('value');
        }
    });

    // gallery slider
    var sliderGallery = $('.js-gallery-slider')
    sliderGallery.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        dotsEach: true,
        loop: true,
        margin: 50,
        smartSpeed: 550,
        autoplay: false,
    });

    // classes slider
    var sliderClasses = $('.js-classes-slider')
    sliderClasses.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        dotsEach: true,
        loop: true,
        margin: 50,
        smartSpeed: 550,
        autoplay: false,
    });

    // team slider
    var sliderTeam = $('.js-team-slider')
    sliderTeam.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        dotsEach: true,
        loop: true,
        margin: 100,
        smartSpeed: 550,
        autoplay: false,
    });

    // reviews slider
    var sliderReviews = $('.js-reviews-slider')
    sliderReviews.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        dotsEach: true,
        loop: true,
        margin: 50,
        smartSpeed: 550,
        autoplay: false,
    });

    // interview slider
    var sliderInterview = $('.js-interview-slider')
    sliderInterview.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        dotsEach: true,
        loop: true,
        margin: 50,
        smartSpeed: 550,
        autoplay: false,
    });

    // validate
    $('.js-valid').each(function () {
        $(this).validate({
            submitHandler: function (form) {
                return false;
            }
        });
    });

    // Динамические формы, обрабатываемые через AJAX
    $('.js-popup-ajax form').each(function () {
        var $form = $(this);
        $form.on('submit', function (e) {
            e.preventDefault();
            var $btn = $form.find('button[type=submit]');
            $btn.prop('disabled', true);
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize()
            }).done(function (response) {
                $btn.prop('disabled', false);
                if (response.status === 'OK') {
                    if (response.redirect) {
                        window.location.replace(response.redirect);
                    } else {
                        $form.parent('.js-popup').removeClass('open');
                        $('#popup-message .popup__title').html(response.popup.title);
                        $('#popup-message .popup__text').html(response.popup.text);
                        $('.popup-bg, #popup-message').addClass('open');
                    }
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            }).fail(function (xhr) {
                $btn.prop('disabled', false);
                var response = $.parseJSON(xhr.responseText);
                if (response.status === 'ERROR' && response.errors) {
                    $form.find('.field__input').removeClass('error');
                    $form.find('label.error').remove();
                    $.each(response.errors, function (field, message) {
                        var $input = $form.find('input[name=' + field + ']').addClass('error');
                        $('<label class="error">' + message + '</label>').insertAfter($input);
                    });
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            });
        });
        $form.on('reset', function () {
            $form.find('.field__input').removeClass('error value');
            $form.find('label.error').remove();
        });
    });

    // Опрос в истории успеха участников
    $('#reasons .js-poll').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        if (localStorage.getItem('poll-reasons') !== 'yes') {
            $.post($this.closest('.reasons').data('poll-url'), {
                name: $this.data('poll-name'),
                options: [$this.data('poll-option')]
            }).always(function (response) {
                if (response.status === 'OK') {
                    localStorage.setItem('poll-reasons', 'yes');
                }
                window.location.href = $this.attr('href');
            });
        } else {
            window.location.href = $this.attr('href');
        }
    });

    // profile
    var currentAvatar = '';
    $('.js-change-avatar').on('click', function () {
        $(this).fadeOut(0);
        $('.js-avatars-dropdown').fadeIn();
        currentAvatar = $('.js-current-avatar img').attr('src');
    });

    $('.js-avatars a').on('click', function () {
        var avatar = $(this).children('img').attr('src');
        $('.js-current-avatar img').attr('src', avatar);
    });
    $('.js-save-avatar').on('click', function () {
        let imageSrc = $('.js-current-avatar img').attr('src');
        $('.js-change-avatar').fadeIn();
        $('.js-avatars-dropdown').fadeOut(0);
    });

    $('.js-user-update').on('submit', function (e) {
        e.preventDefault();
        let $form = $(this);
        let imageSrc = $form.find('.js-current-avatar img').attr('src');
        let url = $form.data('user-update-url');
        let name = $form.find('.js-user-name').val();
        let $commentVisible = $form.find('.js-comment-visible');
        let commentVisibleCondition = $commentVisible.is(':checked');
        $.post({
            url: url,
            data: {image: imageSrc, name: name, comment: commentVisibleCondition},
        })
            .done(function (response) {
                if (response.status === 'OK') {
                    if ($('.letters').length > 0) {
                        $('.letters').children().remove();
                        $('.letters').append(response.content);
                        events.checkbox = response.visible;
                        events.img = response.img;

                        $form.find('.js-comment-visible').prop('checked', response.visible);
                        if (response.visible) {
                            $commentVisible.addClass('checked');
                        } else {
                            $commentVisible.addClass('remove');
                        }
                    }
                    $('.popup-bg, .js-popup').removeClass('open');
                    $('.js-popup-bg').removeClass('open');
                    $('.js-profile div').text(response.name);
                    showScroll();
                    $('.js-change-avatar').fadeIn();
                    $('.js-avatars-dropdown').fadeOut(0);
                }
            })
            .fail(function (xhr) {
                var response = $.parseJSON(xhr.responseText);
                if (response.status === 'ERROR' && response.errors) {
                    $form.find('.field__input').removeClass('error');
                    $form.find('label.error').remove();
                    $.each(response.errors, function (field, message) {
                        var $input = $form.find('input[name=' + field + ']').addClass('error');
                        $('<label class="error">' + message + '</label>').insertAfter($input);
                    });
                    hideScroll();
                    return false
                } else {
                    // alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }

            });


    });

    $('.js-cancel-avatar').on('click', function () {
        $('.js-change-avatar').fadeIn();
        $('.js-avatars-dropdown').fadeOut(0);
        $('.js-current-avatar img').attr('src', currentAvatar);
    });

    // Всплывающие окна
    $('.js-registration').on('click', function () {
        $('#popup-registration form').trigger('reset');
        $('.popup-bg, #popup-registration').addClass('open');
        fixHeaderPopup();
    });
    $('.js-profile').on('click', function () {
        $('.popup-bg, .js-popup-profile').addClass('open');
        fixHeaderPopup();
    });
    $('.js-call').on('click', function () {
        $('#popup-callback form').trigger('reset');
        $('.popup-bg, #popup-callback').addClass('open');
        fixHeaderPopup();
    });
    $(document).on('click', '.js-curator-comment-reply', function (e) {
        e.preventDefault();
        $(this).closest('.comment__info').find('.comment-curator-reply-form').toggle();
    });




    let  events = {
        checkbox: $('.js-comment-visible').is('checked'),
        img: $('.js-current-avatar img').attr('src')
    };
    //
    $('.js-popup-bg').on('click', function (event) {
        if ($(event.target).closest('.js-popup').length)
            return;
        let checkbox = $('.js-comment-visible');
        let userName = $('.js-user-update').find('.js-user-name');

        $.get( "/participant-get", function( data ) {
            if (data.status === 'OK') {
                events.checkbox = data.visible;
                if (events.checkbox === true) {
                    checkbox.prop('checked', true);
                    checkbox.addClass('checked');
                } else {
                    checkbox.prop('checked', false);
                    checkbox.removeClass('checked')
                }
                userName.val(data.name);
                userName.addClass('value');
            }
        });


        $('.js-current-avatar img').attr('src', events.img);


        $('.popup-bg, .js-popup').removeClass('open');
        $('.js-user-update input').removeClass('error');
        $('.js-user-update label.error').remove();
        $('.js-change-avatar').fadeIn();
        $('.js-avatars-dropdown').fadeOut(0);


        showScroll();
        event.stopPropagation();
    });
    $('.js-popup-close').on('click', function () {

        let checkbox = $('.js-comment-visible');
        let userName = $('.js-user-update').find('.js-user-name');

        $.get( "/participant-get", function( data ) {
            if (data.status === 'OK') {
                events.checkbox = data.visible;
                if (events.checkbox === true) {
                    checkbox.prop('checked', true);
                    checkbox.addClass('checked');
                } else {
                    checkbox.prop('checked', false);
                    checkbox.removeClass('checked')
                }
                userName.val(data.name);
                userName.addClass('value');
            }
        });
        $('.js-user-update input').removeClass('error');
        $('.js-user-update label.error').remove();
        $('.js-change-avatar').fadeIn();
        $('.js-avatars-dropdown').fadeOut(0);
        $('.js-current-avatar img').attr('src', events.img);
        showScroll();


        $('.popup-bg, .js-popup').removeClass('open');

    });

    // fix header
    if ($(window).scrollTop() > 50) {
        $('.js-header').addClass('fixed');
    }
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('.js-header').addClass('fixed');
        } else {
            $('.js-header').removeClass('fixed');
        }
    });

    // reasons
    $('.js-reason').on('click', function () {
        if ($(window).width() < 768) {
            $('.js-reason').not(this).find('.reason-info').slideUp();
            $(this).find('.reason-info').slideDown();
        } else {
            $('.js-reason').removeClass('open').not(this).fadeTo(200, 0.3);
            $(this).addClass('open');
        }
    });

    $('.js-reason').on('mouseenter', function () {
        $('.js-reason').not(this).fadeTo(200, 0.3);
        $(this).fadeTo(200, 1);
    });

    // accordion
    $(document).on('click', '.js-accordion-link', function () {
        $(this).toggleClass('open');
        $(this).closest('.js-accordion').toggleClass('open').find('.js-accordion-drop').slideToggle();
        if ($(this).hasClass('open') && $(this).hasClass('item-letter__link')) {
            $(this).find('span').text('Скрыть письмо');
        } else {
            $(this).find('span').text('Показать письмо');
            var top = $(this).closest('.js-accordion').offset().top - $('.js-header').outerHeight()
            $('html, body').animate({scrollTop: top}, '300');
        }
    });

    // Чтение письма
    $(document).on('click', '.item-letter__link', function () {
        var $letter = $(this).closest('.letters__item');
        if ($letter.hasClass('new')) {
            $.ajax({
                type: 'PATCH',
                url: $letter.data('read-url')
            }).done(function (response) {
                if (response.status === 'OK') {
                    $letter.removeClass('new');
                    $letter.find('.item-letter__status').remove();
                    if (response.hasOwnProperty('new_messages')) {
                        var $userNumber = $('.header__user .user__number');
                        if (response.new_messages > 0) {
                            $userNumber.html(response.new_messages);
                        } else {
                            $userNumber.remove();
                        }
                    }
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            }).fail(function (xhr) {
                var response = $.parseJSON(xhr.responseText);
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            });
        }
    });

    $("[data-fancybox]").fancybox({
        afterShow: function (content, slide) {
            var video = slide.$slide.find(this.src);
            video[0].play();
            video.on('ended', function () {
                $.fancybox.close();
            });
        }
    });

    // result
    $('.js-result').on('click', function () {
        $(this).toggleClass('open');
        $('.js-result-hidden').fadeToggle();
    });

    // anchors
    $(document).on("scroll", onScroll);

    $('.js-anchors a').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        var id = $(this).attr('href');
        $('.js-anchors a').removeClass('active');
        $(id).addClass('active');
        $(this).addClass('active');
        var target = this.hash,
            anchors = target;
        $target = $(target);
        scrollTop = 0;
        if ($(id).hasClass('section--white')) {
            scrollTop = $target.offset().top - 200
        } else {
            scrollTop = $target.offset().top + 2
        }
        $('html, body').stop().animate({
            'scrollTop': scrollTop
        }, 500, 'swing', function () {
            //window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    })

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('.js-anchors a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            var refPosition = refElement.position().top;
            if (refElement.hasClass('section--white')) {
                refPosition = refPosition - 200
            }
            if (refPosition <= scrollPos && refPosition + refElement.height() > scrollPos) {
                $('.js-anchors a').removeClass("active");
                currLink.addClass("active");
                var id = $('.js-anchors a.active').attr('href');
                $('.screen').removeClass('active');
                $(id).addClass('active');
            }
        });
    }

    // up
    $(window).scroll(function () {
        if ($(window).scrollTop() > 715) {
            $('.js-up').addClass('show');
        } else {
            $('.js-up').removeClass('show');
        }
    });

    $('.js-up').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });

    // mask
    //$('input[type="tel"]').mask('+7 (000) 000-00-00', {clearIfNotMatch: true});

    // Аудио-плеер
    var audioPlayer = $('#audio-player').get(0);
    $('.step-info__audio .audio__btn').click(function () {
        if (audioPlayer.paused) {
            audioPlayer.play();
            $(this).addClass('play');
        } else {
            audioPlayer.pause();
            $(this).removeClass('play');
        }
    });
    $(audioPlayer).bind('timeupdate', function () {
        var minutes = Math.floor(this.currentTime / 60);
        minutes = (minutes >= 10) ? minutes : '0' + minutes;
        var seconds = Math.floor(this.currentTime % 60);
        seconds = (seconds >= 10) ? seconds : '0' + seconds;
        $('.step-info__audio .audio__current-time').text(minutes + ':' + seconds);
        $('.step-info__audio .audio__progress').css('width', ((this.currentTime * 100) / this.duration) + '%');
        if (this.currentTime >= this.duration) {
            $('.step-info__audio .audio__btn').removeClass('play');
        }
    });
    $('.step-info__audio .audio__progress').click(function (e) {
        var percent = (e.pageX - $(this).offset().left) / $(this).outerWidth() * 100;
        audioPlayer.currentTime = (percent * audioPlayer.duration) / 100;
    });

    // Форма отчета на шаге
    $(document).on('submit', 'form.report-form', function (e) {
        e.preventDefault();
        var $form = $(this);
        var $btn = $form.find('button[type=submit]');
        $btn.prop('disabled', true);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function (response) {
            $btn.prop('disabled', false);
            if (response.status === 'OK') {
                $form.remove();
                // Обновляем комментарии
                $('.item-step__comments').data('last-id', response.lastId);
                $('.comments__amount').text(response.reportsCount);
                $('.comments__items').html(response.comments);
                $('.comments__more').css('display', response.showMore ? 'inline-flex' : 'none');
            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        }).fail(function (xhr) {
            $btn.prop('disabled', false);
            var response = $.parseJSON(xhr.responseText);
            if (response.status === 'ERROR' && response.errors) {
                var $textarea = $form.find('.field__textarea').addClass('error');
                $form.find('label.error').remove();
                $('<label class="error">' + response.errors[Object.keys(response.errors)[0]] + '</label>').insertAfter($textarea);
            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        });
    });

    // Динамическая подгрузка комментариев на шаге
    $('.comments__more').click(function () {
        var $comments = $('.item-step__comments');
        $.get($comments.data('load-url'), {
            id: $comments.data('last-id'),
            step: $comments.data('step')
        }).done(function (response) {
            if (response.status === 'OK') {
                $comments.data('last-id', response.lastId);
                $('.comments__amount').text(response.reportsCount);
                $('.comments__items').append(response.comments);
                $('.comments__more').css('display', response.showMore ? 'inline-flex' : 'none');
            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        }).fail(function (xhr) {
            var response = $.parseJSON(xhr.responseText);
            alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
        });
    });

    // Ответ на отчет на шаге
    var reportReply = null;
    $('.item-step__comments').on('click', 'a.comment-reply', function () {
        var $comment = $(this).closest('.comments__item');
        var $replyForm = $comment.find('.comment-reply-form form');
        var commentId = $comment.data('comment-id');
        let that = $(this);
        if (commentEdit) {
            $('.comment-edit-form').hide();
            $('.comment-edit-form .field__textarea').val('').removeClass('error value');
            $('.comment-edit-form label.error').remove();
            commentEdit = null;
        }
        if (reportReply) {
            if (commentId === reportReply) {
                $replyForm.find('.field__textarea').val('').removeClass('error value');
                $replyForm.find('label.error').remove();
                $replyForm.parent().hide();
                reportReply = null;
            } else {
                $('.comment-reply-form').hide();
                $('.comment-reply-form .field__textarea').val('').removeClass('error value');
                $('.comment-reply-form label.error').remove();
                $replyForm.parent().show();
                reportReply = commentId;
            }
        } else {
            $replyForm.parent().show();
            reportReply = commentId;
        }
        $replyForm.unbind('submit').submit(function (e) {
            e.preventDefault();
            var $btn = $replyForm.find('button[type=submit]');
            $btn.prop('disabled', true);
            $.ajax({
                type: $replyForm.attr('method'),
                url: $replyForm.attr('action'),
                data: $replyForm.serialize()
            }).done(function (response) {
                $btn.prop('disabled', false);
                if (response.status === 'OK') {
                    if ($(".comments__items").find('#report-' + response.reportId + '-comments').children().length === 0) {
                        $('#report-' + response.reportId + '-comments').append(response.comment);
                        that.closest('.comment').find('.comment-delete').remove();
                        that.closest('.comment').find('.comment-edit').remove();
                    } else if ($(".comments__items").find('#report-' + response.reportId + '-comments').length > 0)
                        $('#report-' + response.reportId + '-comments').append(response.comment);
                    else {
                        that.closest('.comment-block').append(response.comment)
                    }
                    $replyForm.find('.field__textarea').val('').removeClass('error value');
                    $replyForm.find('label.error').remove();
                    $replyForm.parent().hide();
                    reportReply = null;
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            }).fail(function (xhr) {
                $btn.prop('disabled', false);
                var response = $.parseJSON(xhr.responseText);
                if (response.status === 'ERROR' && response.errors) {
                    var $textarea = $replyForm.find('.field__textarea').addClass('error');
                    $replyForm.find('label.error').remove();
                    $('<label class="error">' + response.errors[Object.keys(response.errors)[0]] + '</label>').insertAfter($textarea);
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            });
        });
    });

    // Ответ куратора на комментарий на шаге
    // var $curatorReplyForm = $('.comment-curator-reply-form form');
    // $('.comment-curator-reply-form form').unbind('submit');
    $(document).on('submit', '.comment-curator-reply-form form', function (e) {
        e.preventDefault();
        let $curatorReplyForm = $(this);
        var $btn = $curatorReplyForm.find('button[type=submit]');
        $btn.prop('disabled', true);
        $.ajax({
            type: $curatorReplyForm.attr('method'),
            url: $curatorReplyForm.attr('action'),
            data: $curatorReplyForm.serialize()
        }).done(function (response) {
            $curatorReplyForm.unbind('submit');
            $btn.prop('disabled', false);
            if (response.status === 'OK') {
                if ($('#report-' + response.reportId + '-comments').length !== 0) {
                    $('#report-' + response.reportId + '-comments').append(response.comment);
                } else {
                    $('[data-comment-id=' + response.reportId + ']').after(response.comment)
                }
                $curatorReplyForm.parent().hide();
                $curatorReplyForm.find('textarea').val('').text('')

            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        }).fail(function (xhr) {
            $btn.prop('disabled', false);
            var response = $.parseJSON(xhr.responseText);
            if (response.status === 'ERROR' && response.errors) {
                var $textarea = $curatorReplyForm.find('.field__textarea').addClass('error');
                $curatorReplyForm.find('label.error').remove();
                $('<label class="error">' + response.errors[Object.keys(response.errors)[0]] + '</label>').insertAfter($textarea);
            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        });
    });

    // Редактирование отчета\комментария на шаге
    var commentEdit = null;
    $('.item-step__comments').on('click', 'a.comment-edit', function () {
        var $comment = $(this).closest('.comments__item');
        var $editForm = $comment.find('.comment-edit-form form');
        var $textarea = $editForm.find('.field__textarea');
        var commentId = $comment.data('comment-id');
        if (reportReply) {
            $('.comment-reply-form').hide();
            $('.comment-reply-form .field__textarea').val('').removeClass('error value');
            $('.comment-reply-form label.error').remove();
            reportReply = null;
        }
        if (commentEdit) {
            if (commentId === commentEdit) {
                $editForm.find('.field__textarea').val('').removeClass('error value');
                $editForm.find('label.error').remove();
                $editForm.parent().hide();
                commentEdit = null;
            } else {
                $('.comment-edit-form').hide();
                $('.comment-edit-form .field__textarea').val('').removeClass('error value');
                $('.comment-edit-form label.error').remove();
                $textarea.val($comment.find('.comment__text p').html()).addClass('value');
                $editForm.parent().show();
                commentEdit = commentId;
            }
        } else {
            $textarea.val($comment.find('.comment__text p').text()).addClass('value');
            $editForm.parent().show();
            commentEdit = commentId;
        }
        $editForm.unbind('submit').submit(function (e) {
            e.preventDefault();
            var $btn = $editForm.find('button[type=submit]');
            $btn.prop('disabled', true);
            $.ajax({
                type: $editForm.attr('method'),
                url: $editForm.attr('action'),
                data: $editForm.serialize()
            }).done(function (response) {
                $btn.prop('disabled', false);
                if (response.status === 'OK') {
                    $comment.replaceWith(response.comment);
                    $editForm.find('.field__textarea').val('').removeClass('error value');
                    $editForm.find('label.error').remove();
                    $editForm.parent().hide();
                    commentEdit = null;
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            }).fail(function (xhr) {
                $btn.prop('disabled', false);
                var response = $.parseJSON(xhr.responseText);
                if (response.status === 'ERROR' && response.errors) {
                    $textarea.addClass('error');
                    $editForm.find('label.error').remove();
                    $('<label class="error">' + response.errors[Object.keys(response.errors)[0]] + '</label>').insertAfter($textarea);
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            });
        });
    });

    // Удаление отчета\комментария на шаге
    $(document).on('click', '.item-step__comments a.comment-delete', function (e) {
        e.preventDefault();
        var $comment = $(this).closest('.comments__item');
        let $commentLevel1 = $comment.closest('.comments__items');
        let childCommentId = $(this).closest('.comment-block').data('child-comment-id');
        let parentCommentId = $(this).closest('.comments__items').find('[data-comment-id=' + childCommentId + ']');


        if (confirm('Вы действительно хотите удалить свой комментарий?')) {
            $.delete($comment.data('delete-url')).done(function (response) {
                if (response.status === 'OK') {
                    $comment.remove();

                    let getUrl = window.location.href.split('/');
                    if (getUrl[3] === "step-7-gratitude"){
                        window.location.reload()
                    }else {
                        let blocks = parentCommentId.find('.comment__bottom');
                        let commentRemoveButton = '<div class="comment__icons"><a class="comment__icon comment-edit" href="javascript:void(0);" title="Редактировать свой комментарий">\n' +
                            '                        <svg class="icon icon-edit"><use xlink:href="/assets/img/spritesvg.svg#edit"></use></svg>\n' +
                            '                    </a>' +
                            '<a class="comment__icon comment-delete" href="javascript:void(0);" title="Удалить свой комментарий">\n' +
                            '                        <svg class="icon icon-delete"><use xlink:href="/assets/img/spritesvg.svg#delete"></use></svg>\n' +
                            '                    </a></div>';
                        if ($('#report-' + parentCommentId.data('comment-id') + '-comments').children().length <= 0) {
                            blocks.append(commentRemoveButton);
                            let url = $('[data-load-url]').data('loadUrl');
                            parentCommentId.attr('data-delete-url', url + '/' + parentCommentId.data('comment-id'));
                        }

                        $('.comments__amount').text(response.reportsCount);
                        let html = '<form action="' + $('.comments').data('store-url') + '" method="POST"  class="step-info__form form report-form">' +
                            '<div class="form__field field field--wide">' +
                            '<textarea class="field__textarea" name="body" required maxlength="2000"></textarea>' +
                            '<div class="field__label">Ваш отчет</div>\n' +
                            '</div>' +
                            '<input type="hidden" name="one_signal_client_id" id="oneSignalClientId" value="">'+
                            '<button type="submit" class="form__btn btn" onclick="return startPusher()"><span>Отправить отчет</span></button>' +
                            '</form>';
                        if ($('.report-form').length === 0 && $('[data-comment-id=' + parentCommentId.data('comment-id') + ']').length === 0) {
                            $('.js-form-report').append(html);
                        }
                    }
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            }).fail(function (xhr) {
                var response = $.parseJSON(xhr.responseText);
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            });

        }
    });

    // Лайк комментарию на шаге
    $('.item-step__comments').on('click', 'a.js-like', function () {
        var $comments = $('.item-step__comments');
        var $comment = $(this).closest('.comments__item');
        var $like = $(this);
        $.post($comments.data('like-url'), {
            comment_id: $comment.data('comment-id')
        }).done(function (response) {
            if (response.status === 'OK') {
                $like.toggleClass('active', response.active);
                $like.find('span').text(response.total);
            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        }).fail(function (xhr) {
            var response = $.parseJSON(xhr.responseText);
            if (response.status === 'ERROR' && response.errors) {
                alert(response.errors[Object.keys(response.errors)[0]]);
            } else {
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            }
        });
    });


    // Прокрутка комментариев в конец, если искомый комментарий не найден
    if (window.location.hash.substr(1, 7) === 'comment') {
        if (!$('a[name="' + window.location.hash.substr(1) + '"]').length) {
            $('html, body').animate({
                scrollTop: $('a.comments__more').offset().top - 100
            }, 500);
        }
    }

    // Опросы на страницах заданий
    var $questionare = $('form.questionare');
    $questionare.submit(function (e) {
        e.preventDefault();
        var options = $('input[type="checkbox"]:checked', $questionare).map(function () {
            return $(this).data('poll-option');
        }).get();
        if (options.length) {
            $.post($questionare.data('poll-url'), {
                name: $questionare.data('poll-name'),
                options: options
            }).done(function (response) {
                if (response.status === 'OK') {
                    $questionare.find('.questionare__title').html('Спасибо, что помогаете нам <br>стать лучше!');
                    $questionare.find('.questionare__group').remove();
                    $questionare.find('.questionare__btn').remove();
                } else {
                    alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
                }
            }).fail(function (xhr) {
                var response = $.parseJSON(xhr.responseText);
                alert(response.message ? response.message : 'Случилась непредвиденная ошибка.');
            });
        }
    });
    $questionare.find('.questionare__btn').click(function (e) {
        e.preventDefault();
        $questionare.submit();
    });
});

// fix header popup
function fixHeaderPopup() {
    if ($('.js-header').hasClass('fixed')) {
        hideScroll();
        $('.js-header').addClass('fixed-scroll');
    } else {
        hideScroll();
    }
}

// fix scroll
function hideScroll() {
    var _this = document;
    _this.body.classList.add('no-scroll');

    _this.scrollTop = window.pageYOffset; // запоминаем текущую прокрутку сверху
    _this.body.style.position = 'fixed';
    if (hasScrollbar()) {
        // с учетом горизонтального скролла. Чтобы небыло рывка при открытии модального окна
        _this.body.style.width = 'calc(100% - ' + getScrollbarSize() + 'px)';
    } else {
        _this.body.style.width = '100%';
    }
    _this.body.style.top = -_this.scrollTop + 'px';
}

function getScrollbarSize() { // получение ширины скролла
    var outer = document.createElement('div');
    outer.style.visibility = 'hidden';
    outer.style.width = '100px';
    outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps

    document.body.appendChild(outer);

    var widthNoScroll = outer.offsetWidth;
    // force scrollbars
    outer.style.overflow = 'scroll';

    // add innerdiv
    var inner = document.createElement('div');
    inner.style.width = '100%';
    outer.appendChild(inner);

    var widthWithScroll = inner.offsetWidth;

    // remove divs
    outer.parentNode.removeChild(outer);
    return widthNoScroll - widthWithScroll;
}

function hasScrollbar() { // проверка на боковой скролл
    return document.body.scrollHeight > document.body.clientHeight;
}

function showScroll() {
    var _this = document;
    _this.body.classList.remove('no-scroll');
    _this.body.style.position = '';
    _this.body.style.width = '';
    _this.body.style.top = '';
    window.scroll(0, _this.scrollTop);
    $('.js-header').removeClass('fixed-scroll');
}


//# sourceMappingURL=../maps/main.js.map
