@foreach ($messages as $message)
    <div class="letters__item item-letter js-accordion{{ $message->isNew() ? ' new' : '' }}"{!! $message->isNew() ? ' data-read-url="' . route('messages.update', [$message->id]) . '"' : '' !!}>
        <div class="item-letter__top">
            <h3 class="item-letter__title h3">{{ $message->title }} {!! $message->isNew() ? '<span class="item-letter__status">Новое письмо</span>' : '' !!}</h3>
            <div class="item-letter__date">{{ $message->created_at->isoFormat('DD MMMM, kk:mm') }}</div>
        </div>
        <div class="item-letter__dropdown letter-info js-accordion-drop">
            {!! $message->body !!}
        </div>
        <a class="item-letter__link page-link page-link--gray js-accordion-link" href="javascript:void(0);"> <span>Показать письмо</span>
            <svg class="icon icon-arrow ">
                <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
            </svg>
        </a>
    </div>
@endforeach
