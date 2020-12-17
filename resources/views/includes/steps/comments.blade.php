<div class="item-step__comments comments" data-load-url="{{ route('steps.comments.index') }}" data-store-url="{{ route('steps.comments.store') }}" data-like-url="{{ route('steps.like') }}" data-last-id="{{ $lastId }}" data-step="{{ $step }}">
    <div class="comments__info">
        <div class="comments__amount h1 h1--green">{{ $reportsCount }}</div>
        <div class="comments__text">отчетов всего было <br>написано для этого задания</div>
    </div>
    <div class="comments__items">
        @include('includes.steps.comments-items')
    </div>

    <a class="comments__more btn" href="javascript:void(0);" style="display:{{ $showMore ? 'inline-flex' : 'none' }};"> <span>Показать еще</span></a>
</div>
