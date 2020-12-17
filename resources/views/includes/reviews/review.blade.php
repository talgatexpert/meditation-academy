@foreach($reviews as $review)
    <div class="reviews__item item-review item-review--bg">
        <div class="item-review__avatar"><img src="{{$review->participant->avatar}}" alt="avatar"></div>
        <div class="item-review__info">
            <div class="item-review__name h5">{{$review->participant->name}}</div>
            <div class="item-review__date">{{$review->created_at->isoFormat('DD MMMM, YYYY')}}</div>
            <div class="item-review__text">
                <p>{{$review->body}}</p>
            </div>
        </div>
    </div>
@endforeach
