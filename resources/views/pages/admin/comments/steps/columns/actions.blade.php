<a href="{{  route('admin.comments.steps.create', ['target_id' => $comment->id]) }}" class="btn btn-outline btn-xs green" title="Ответить в отчете" data-target="#modal" data-toggle="modal"><i class="fa fa-reply"></i></a>
<a href="{{ route('admin.comments.steps.edit', [$comment]) }}" class="btn btn-outline btn-xs yellow" title="Редактировать {{ $comment->isReport() ? 'отчет' : 'комментарий' }}" data-target="#modal" data-toggle="modal"><i class="fa fa-edit"></i></a>
@if (!$comment->reportHasComments())
    <a href="{{ route('admin.comments.steps.destroy', [$comment]) }}" data-method="DELETE" class="btn btn-outline btn-xs red confirm-btn" title="Удалить {{ $comment->isReport() ? 'отчет' : 'комментарий' }}"><i class="fa fa-trash"></i></a>
@endif
