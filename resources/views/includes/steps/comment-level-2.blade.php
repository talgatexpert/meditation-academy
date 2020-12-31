@if($comment->curator ||  $comment->participant)
<div class="comments__item comment comment--level-2{{ $comment->curator_id ? ' comment--admin' : '' }}" data-comment-id="{{ $comment->id }}" @if ($comment->canBeEditedByOwner())data-delete-url="{{ route('steps.comments.destroy', [$comment]) }}"@endif>
    <a name="comment-{{ $comment->id }}"></a>
    <div class="comment__avatar-wrap">
        <div class="comment__avatar">
            <img src="{{ $comment->curator_id ? $comment->curator->avatar : $comment->participant->avatar }}" alt="avatar">
        </div>
    </div>
    <div class="comment__info">
        <div class="comment__name h5">{{ $comment->curator_id ? $comment->curator->name : $comment->participant->name }}</div>
        <div class="comment__date">{{ $comment->created_at->isoFormat('DD MMMM, YYYY') }}</div>
        <div class="comment__text">{!! $comment->body !!}</div>
        <div class="comment__bottom">
            <a class="comment__like js-like no-border{{ $comment->isLiked() ? ' active' : '' }}" href="javascript:void(0);">
                <svg class="icon icon-heart"><use xlink:href="/assets/img/spritesvg.svg#heart"></use></svg>
                <span>{{ $comment->likes->count() }}</span>
            </a>

{{--            @if ($comment->hasCurator() && ((Auth::guard('participant')->check() && Auth::guard('participant')->id() === $comment->participant_id) || Gate::any([\App\Models\User::ABILITY_ADMIN, \App\Models\User::ABILITY_MANAGER, \App\Models\User::ABILITY_CURATOR])))--}}
{{--                <a class="comment__answer page-link comment-reply" href="javascript:void(0);">Ответить на комментарий</a>--}}

{{--            @endif--}}
            @if((Auth::check()
                 && (Auth::user()->isCurator() || Auth::user()->isManager())
                 &&  $report->reportHasCuratorReply([$report->id])
                 && $comment->hasCurator())
                 ||  (Auth::guard('participant')->check() && Auth::guard('participant')->id() === $report->participant_id))
                <a class="comment__answer page-link
                @if((Auth::check()) && (Auth::user()->isCurator() || Auth::user()->isManager()))
                    js-curator-comment-reply @else comment-reply
                @endif" href="javascript:void(0);">Ответить на комментарий</a>
            @endif
            @if ($comment->canBeEditedByOwner())
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
            <div class="comment-curator-reply-form" style="margin-top:10px; @if($comment->id == request('curator_reply')) display:block @else display: none @endif">
                <form action="{{ route('steps.comments.store') }}" method="POST" class="step-info__form form">
                    <div class="form__field field field--wide">
                        <textarea class="field__textarea js-text-curator" id="editor-{{ \Illuminate\Support\Str::uuid() }}" name="body" maxlength="2000"></textarea>
{{--                        <div class="field__label">Ответ {{ Auth::user()->isManager() ? 'менеджера' : 'куратора'}}</div>--}}
                    </div>
                    <input type="hidden" name="curator_reply" value="{{ $report->id }}">
                    <input type="hidden" name="step" value="{{  $report->step  }}">
                    <button type="submit" class="form__btn btn"> <span>Отправить</span></button>
                </form>
            </div>
        @endif

        @if(((Auth::check() && (Auth::user()->isCurator() || Auth::user()->isManager()))  &&  $report->reportHasCuratorReply([$report->id]) && is_null($comment->curator_id)) ||  (Auth::guard('participant')->check() && Auth::guard('participant')->id() === $report->participant_id))
            <div class="comment-reply-form" style="margin-top:10px;display:none;">
                <form action="{{ route('steps.comments.store') }}" method="POST" class="step-info__form form">
                    <div class="form__field field field--wide">
                        <textarea class="field__textarea js-text-curator" id="editor-{{ \Illuminate\Support\Str::uuid() }}" name="body" maxlength="2000"></textarea>
{{--                        <div class="field__label">Ваш ответ</div>--}}
                    </div>
                    @canany(Gate::any([\App\Models\User::ABILITY_MANAGER, \App\Models\User::ABILITY_CURATOR]))
                    <input type="hidden" name="curator_reply" value="{{ $report->id }}">
                    @endcanany
                    <input type="hidden" name="participant_id" value="{{ Auth::guard('participant')->check() ? Auth::guard('participant')->id() : ''}}">
                    <input type="hidden" name="parent_id" value="{{ $report->id }}">
                    <input type="hidden" name="step" value="{{ $comment->step }}">
                    <button type="submit" class="form__btn btn"> <span>Отправить</span></button>
                </form>
            </div>
        @endif
        @if ($comment->canBeEditedByOwner())
            <div class="comment-edit-form" style="margin-top:10px;display:none;">
                <form action="{{ route('steps.comments.update', [$comment]) }}" method="POST" class="step-info__form form">
                    <div class="form__field field field--wide">
                        <textarea class="field__textarea js-text-curator" id="editor-{{ \Illuminate\Support\Str::uuid() }}" name="body" maxlength="2000"></textarea>
{{--                        <div class="field__label">Ваш комментарий</div>--}}
                    </div>
                    {{ method_field('PUT') }}
                    <button type="submit" class="form__btn btn"> <span>Отправить</span></button>
                </form>
            </div>
        @endif
    </div>
</div>
@endif

