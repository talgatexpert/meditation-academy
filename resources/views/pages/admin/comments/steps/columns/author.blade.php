<span title="{{ $comment->participant_id ? 'Участник' : 'Куратор' }}">{{ $comment->participant_id ? $comment->participant->name : $comment->curator->name }}</span>
