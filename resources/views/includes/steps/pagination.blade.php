<div class="wave wave--pagination"></div>
<ul class="pagination pagination--steps">
    <li class="pagination__item">
        <a class="pagination__link" href="javascript:void(0);"></a>
    </li>
    <li class="pagination__item{{ request()->is('step-1-meditation-posture') ? ' active' : '' }}">
        <a class="pagination__link" href="{{ route('steps.1') }}">1</a>
    </li>
    @php $step2Disabled = Auth::guard('participant')->check() && !Auth::guard('participant')->user()->isStepAvailable(2); @endphp
    <li class="pagination__item{{ (request()->is('step-2-meditation-hands') ? ' active' : ($step2Disabled ? ' disabled' : '')) }}">
        <a class="pagination__link" href="{{ $step2Disabled ? 'javascript:void(0);' : route('steps.2') }}">2</a>
    </li>
    @php $step3Disabled = Auth::guard('participant')->check() && !Auth::guard('participant')->user()->isStepAvailable(3); @endphp
    <li class="pagination__item{{ (request()->is('step-3-dynamic-meditation') ? ' active' : ($step3Disabled ? ' disabled' : '')) }}">
        <a class="pagination__link" href="{{ $step3Disabled ? 'javascript:void(0);' : route('steps.3') }}">3</a>
    </li>
    @php $step4Disabled = Auth::guard('participant')->guest() || (Auth::guard('participant')->check() && !Auth::guard('participant')->user()->isStepAvailable(4)); @endphp
    <li class="pagination__item{{ (request()->is('step-4-breathing') ? ' active' : ($step4Disabled ? ' disabled' : '')) }}">
        <a class="pagination__link" href="{{ $step4Disabled ? 'javascript:void(0);' : route('steps.4') }}">4</a>
    </li>
    @php $step5Disabled = Auth::guard('participant')->guest() || (Auth::guard('participant')->check() && !Auth::guard('participant')->user()->isStepAvailable(5)); @endphp
    <li class="pagination__item{{ (request()->is('step-5-happyday') ? ' active' : ($step5Disabled ? ' disabled' : '')) }}">
        <a class="pagination__link" href="{{ $step5Disabled ? 'javascript:void(0);' : route('steps.5') }}">5</a>
    </li>
    @php $step6Disabled = Auth::guard('participant')->guest() || (Auth::guard('participant')->check() && !Auth::guard('participant')->user()->isStepAvailable(6)); @endphp
    <li class="pagination__item{{ (request()->is('step-6-counting') ? ' active' : ($step6Disabled ? ' disabled' : '')) }}">
        <a class="pagination__link" href="{{ $step6Disabled ? 'javascript:void(0);' : route('steps.6') }}">6</a>
    </li>
    @php $step7Disabled = Auth::guard('participant')->guest() || (Auth::guard('participant')->check() && !Auth::guard('participant')->user()->isStepAvailable(7)); @endphp
    <li class="pagination__item{{ (request()->is('step-7-gratitude') ? ' active' : ($step7Disabled ? ' disabled' : '')) }}">
        <a class="pagination__link" href="{{ $step7Disabled ? 'javascript:void(0);' : route('steps.7') }}">7</a>
    </li>
    <li class="pagination__item">
        <a class="pagination__link" href="javascript:void(0);"></a>
    </li>
</ul>
