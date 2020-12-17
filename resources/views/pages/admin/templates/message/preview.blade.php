<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>{!! $title !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/assets/css/main.min.css?v5" rel="stylesheet">
</head>
<body>
<div class="letters">
    <div class="letters__item item-letter js-accordion open">
        <div class="item-letter__top">
            <h3 class="item-letter__title h3">{!! $title !!}</h3>
            <div class="item-letter__date">{{ now()->isoFormat('DD MMMM, kk:mm') }}</div>
        </div>
        <div class="item-letter__dropdown letter-info js-accordion-drop" style="display: block">
            {!! $body !!}
        </div>
    </div>
</div>
</body>
</html>
