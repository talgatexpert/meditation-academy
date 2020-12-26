<div class="comments__item  comment comment-level-1" data-comment-id="{{ $report->id }}" @if ($report->canBeEditedByOwner())data-delete-url="{{ route('steps.comments.destroy', [$report]) }}"@endif>
    <a name="comment-{{ $report->id }}"></a>
    <div class="comment__avatar-wrap">
        <div class="comment__avatar">
            <img src="{{ $report->participant->avatar }}" alt="avatar">
        </div>
    </div>
    <div class="comment__info">
        <div class="comment__name h5">{{ $report->participant->name }}</div>
        <div class="comment__date">{{ $report->created_at->isoFormat('DD MMMM, YYYY') }}</div>
        <div class="comment__text"><p>{{ $report->body }}</p></div>
        <div class="comment__bottom">
            <a class="comment__like js-like{{ (Auth::guard('participant')->guest() ? ' no-border' : '') . ($report->isLiked() ? ' active' : '') }}" href="javascript:void(0);">
                <svg class="icon icon-heart"><use xlink:href="/assets/img/spritesvg.svg#heart"></use></svg>
                <span>{{ $report->likes->count() }}</span>
            </a>
            @if((Auth::check() && (Auth::user()->isCurator() || Auth::user()->isManager())) || (Auth::guard('participant')->check() &&  $report->participant_id === Auth::guard('participant')->id()))
                <a class="comment__answer page-link @if(Auth::check() && (Auth::user()->isCurator() || Auth::user()->isManager())) js-curator-comment-reply @else comment-reply   @endif" href="javascript:void(0);">Ответить на комментарий</a>
            @endif
            @if ($report->canBeEditedByOwner())
                <div class="comment__icons">
                    <a class="comment__icon comment-edit" href="javascript:void(0);" title="Редактировать свой комментарий">
                        <svg class="icon icon-edit"><use xlink:href="/assets/img/spritesvg.svg#edit"></use></svg>
                    </a>
                    <a class="comment__icon comment-delete" href="javascript:void(0);" title="Удалить свой комментарий">
                        <svg class="icon icon-delete"><use xlink:href="/assets/img/spritesvg.svg#delete"></use></svg>
                    </a>
                </div>
            @endif
        </div>

        @if (Auth::check() && (Auth::user()->isCurator() || Auth::user()->isManager()))
            <div class="comment-curator-reply-form" style="margin-top:10px; @if($report->id == request('curator_reply')) display:block @else display: none @endif">
                <form action="{{ route('steps.comments.store') }}" method="POST" class="step-info__form form">
                    <div class="form__field field field--wide">
                        <textarea class="field__textarea" name="body" maxlength="2000"></textarea>
                        <div class="field__label">Ответ {{ Auth::user()->isManager() ? 'менеджера' : 'куратора'}}</div>
                    </div>
                    <input type="hidden" name="curator_reply" value="{{ $report->id }}">
                    <input type="hidden" name="step" value="{{ $step }}">
                    <button type="submit" class="form__btn btn"> <span>Отправить</span></button>
                </form>
            </div>
        @endif
        @if (Auth::guard('participant')->check() && $report->participant_id === Auth::guard('participant')->id())
            <div class="comment-reply-form" style="margin-top:10px;display:none;">
                <form action="{{ route('steps.comments.store') }}" method="POST" class="step-info__form form">
                    <div class="form__field field field--wide">
                        <textarea class="field__textarea" name="body" maxlength="2000"></textarea>
                        <div class="field__label">Ваш ответ</div>
                    </div>
                    <input type="hidden" name="parent_id" value="{{ $report->id }}">
                    <input type="hidden" name="step" value="{{ $step }}">
                    <button type="submit" class="form__btn btn"> <span>Отправить</span></button>
                </form>
            </div>
        @endif
        @if ($report->canBeEditedByOwner())
            <div class="comment-edit-form" style="margin-top:10px;display:none;">
                <form action="{{ route('steps.comments.update', [$report]) }}" method="POST" class="step-info__form form">
                    <div class="form__field field field--wide">
                        <textarea class="field__textarea" name="body" maxlength="2000"></textarea>
                        <div class="field__label">Ваш комментарий</div>
                    </div>
                    {{ method_field('PUT') }}
                    <button type="submit" class="form__btn btn"> <span>Отправить</span></button>
                </form>
            </div>
        @endif
    </div>
</div>

