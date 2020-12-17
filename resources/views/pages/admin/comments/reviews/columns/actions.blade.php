<a href="{{ route('admin.comments.reviews.create', ['target_id' => $comment->id])}}" class="btn btn-outline btn-xs green" title="Ответить в отзыве" data-target="#modal" data-toggle="modal"><i class="fa fa-reply"></i></a>
<a href="{{  route('admin.comments.reviews.edit', [$comment]) }}" class="btn btn-outline btn-xs yellow" title="Редактировать отзыв" data-target="#modal" data-toggle="modal"><i class="fa fa-edit"></i></a>
@if($comment->publish == 0 && $comment->parent_id == NULL)
    <form action="{{  route('admin.comments.reviews.publish', [$comment]) }}" class="display-inline" method="post">
        @csrf
        <button type="submit" class="btn btn-outline btn-xs yellow" title="Опубликовать отзыв"><i class="fa fa-newspaper-o"></i></button>
    </form>
@elseif($comment->publish == 1 && $comment->parent_id == NULL)
    <form action="{{  route('admin.comments.reviews.unpublish', [$comment]) }}" class="display-inline" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-outline btn-xs red confirm" title="Заблокировать отзыв"><i class="fa fa-ban"></i></button>
    </form>
@endif
@if (!$comment->reportHasComments())
    <a href="{{ route('admin.comments.reviews.destroy', [$comment]) }}" data-method="DELETE" class="btn btn-outline btn-xs red confirm-btn" title="Удалить {{ $comment->isReport() ? 'отчет' : 'комментарий' }}"><i class="fa fa-trash"></i></a>
@endif
