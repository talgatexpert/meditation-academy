<p class="help-block">
    @foreach (\App\Models\MessageTemplate::getVariables() as $var => $data)
        <a href="javascript:void(0);" class="hot-insert" title="{{ $data['title'] }}" data-target="{{ $target }}" data-var="{{ $var }}">{{ $data['name'] }}</a> &nbsp;
    @endforeach
</p>
