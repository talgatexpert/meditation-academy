<form class="questionare" data-poll-url="{{ route('poll') }}" data-poll-name="steps">
    <h3 class="questionare__title h3">Какая информация о медитации <br>вам интересна?</h3>
    <div class="questionare__group">
        <label class="questionare__checkbox checkbox">
            <input type="checkbox" data-poll-option="researches">Научные исследования медитации
        </label>
        <label class="questionare__checkbox checkbox">
            <input type="checkbox" data-poll-option="experience">Личный опыт освоения медитации
        </label>
        <label class="questionare__checkbox checkbox">
            <input type="checkbox" data-poll-option="stories">Рассказы людей о влиянии медитации на жизнь
        </label>
        <label class="questionare__checkbox checkbox">
            <input type="checkbox" data-poll-option="techniques">Больше разных техник и подходов
        </label>
        <label class="questionare__checkbox checkbox">
            <input type="checkbox" data-poll-option="philosophy">Философская сторона вопроса
        </label>
        <label class="questionare__checkbox checkbox">
            <input type="checkbox" data-poll-option="facts">Интересные факты из жизни просветленных мастеров
        </label>
        <label class="questionare__checkbox checkbox">
            <input type="checkbox" data-poll-option="other">Другие темы
        </label>
    </div>
    <button class="questionare__btn secondary-btn"> <span>Отправить ответы</span></button>
</form>
