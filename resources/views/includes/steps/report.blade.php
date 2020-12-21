@if (isset($final) && $final)
    <form action="{{ route('store_final') }}" method="POST" class="step-info__form form final-report-form">
        @csrf
        @method('post')
        <h4 class="form__subtitle h4">Какую медитацию вы выбрали?</h4>
        <div class="form__group">
            <label class="form__checkbox checkbox">
                <input type="checkbox" name="checkbox-6">Медитация на ладонях (Шаг 2)
            </label>
            <label class="form__checkbox checkbox">
                <input type="checkbox" name="checkbox-7">“Динамическая” медитация (Шаг 3)
            </label>
            <label class="form__checkbox checkbox">
                <input type="checkbox" name="checkbox-8">“Поплавок” (Шаг 4)
            </label>
            <label class="form__checkbox checkbox">
                <input type="checkbox" name="checkbox-9">Счет цифр (Шаг 6)
            </label>
        </div>

        <h4 class="form__subtitle h4">Почему сделали такой выбор и <br>удалось ли почувствовать благодарность в конце?</h4>
        <div class="form__field field field--wide">
            <textarea class="field__textarea" name="body" required maxlength="2000"></textarea>
            <div class="field__label">Ваш отчет</div>
        </div>
        <h4 class="form__subtitle h4">Каким был для вас наш курс?<br>Что удалось, а что не получилось? </h4>
        <div class="form__field field field--wide">
            <textarea class="field__textarea" name="comment" required></textarea>
            <div class="field__label">Ответ публикуется на главной странице</div>
        </div>
        <input type="hidden" name="one_signal_client_id" id="oneSignalClientId" value="">
        <button type="submit" class="form__btn btn"> <span>Отправить финальный отчет</span></button>
    </form>
@else
    <form action="{{ route('steps.comments.store') }}" method="POST" class="step-info__form form report-form">
        <div class="form__field field field--wide">
            <textarea class="field__textarea" name="body" required maxlength="2000"></textarea>
            <div class="field__label">Ваш отчет</div>
        </div>
        <input type="hidden" name="one_signal_client_id" id="oneSignalClientId" value="">

        <button type="submit" class="form__btn btn"> <span>Отправить отчет</span></button>
    </form>
@endif




