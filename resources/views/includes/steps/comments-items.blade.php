@foreach ($comments as $report)
    @if($report->participant)
        @if(($report->participant->comment_visible && Auth::guard('participant')->guest()) || (Auth::guard('participant')->check() || Gate::any([\App\Models\User::ABILITY_ADMIN,\App\Models\User::ABILITY_GUEST, \App\Models\User::ABILITY_MANAGER, \App\Models\User::ABILITY_CURATOR])))
            @include('includes.steps.comment', ['report' => $report])
            <div id="report-{{ $report->id }}-comments" data-child-comment-id="{{ $report->id }}" class="comment-block">
                @foreach ($report->comments as $comment)
                    @include('includes.steps.comment-level-2')
                    @if (count($comment->children) > 0)
                        @foreach ($comment->children as $child)
                            @include('includes.steps.comment-level-2', ['comment'=>$child, 'report' => $report])
                        @endforeach
                    @endif
                @endforeach
            </div>
        @endif
    @endif
@endforeach
