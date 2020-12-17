@extends('layouts.master')

@section('title', 'Интервью с выпускниками курса | ' . config('app.name'))
@section('description', 'Выпускники курса ' . config('app.name') . ' рассказывают, как они пришли к медитации и как практика внимательности изменила их повседневную жизнь. Советы начинающим медитировать - как применять инструменты для контроля ума, управления эмоциями и повышения осознанности.')
@section('keywords', 'начало медитации, медитация для начинающих')
@section('class', 'bg-blue-green-repeat')

@section('content')
<div class="container container--narrow">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <span class="breadcrumbs__text">Интервью</span>
        </li>
    </ul>
    <h1 class="h2">Интервью</h1>
</div>

<div class="container container--wide">
    <div class="interview">
        <div class="interview__items">
            <a name="sasha"></a>
            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Sasha_200.png" alt="photo">@else<img src="/assets/img/interviews/Sasha_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Программист</div>
                    <div class="item-interview__name h3">Саша, 30 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>В какой-то момент я просто опешил от мысли, что все необходимое для жизни у меня уже есть. Я не понимал, что дальше делать, куда идти… А главное – зачем? Но внутри я точно знал, что быть человеком – это что-то гораздо большее, чем то, чем я живу. И я тосковал… По тому, чего не мог объяснить. Мне не хватало безусловной радости, мудрости, легкости, теплоты к людям… Я не мог найти себя.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Возможность прикоснуться к неизвестной для меня грани человеческой жизни. Инструменты настройки своего внутреннего состояния. Мне стало доступно чуть больше радости, спокойствия и понимания, что выход есть!</p>
                        </div>
                    </div>
                </div>
            </div>

            <a name="igor"></a>
            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Igor_200.png" alt="photo">@else<img src="/assets/img/interviews/Igor_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">PR-специалист</div>
                    <div class="item-interview__name h3">Игорь, 36 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Впервые я познакомился с медитацией как со способом успокоить свои мысли. Этот способ мне понравился за его натуральность и практичность. То есть медитировать для меня – это способ вырваться из насыщенной событиями жизни, чтобы успокоиться, переосмыслить что-то или по-другому посмотреть на текущую ситуацию. Я попробовал медитировать и решил продолжить обучение.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Курс – это перечень простых упражнений для тренировки внимания. Упражнения я выполнял под руководством куратора курса, который отвечал на вопросы или исправлял мои ошибки. В результате курса я получил практический опыт простых, но эффективных упражнений по занятию медитацией, которые стараюсь делать каждый день. Можно сказать, я получил полезную привычку медитировать.</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Важно сделать первый шаг. Находить для себя 5-10 минут в день и посидеть в тишине. Это правда полезно.</p>
                            <p>Ну и не боятся спрашивать совета, если что-то не получается. Вам обязательно помогут.</p>
                        </div>
                    </div>
                </div>
            </div>

            <a name="natasha"></a>
            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Natasha_200.png" alt="photo">@else<img src="/assets/img/interviews/Natasha_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Менеджер по контекстной рекламе</div>
                    <div class="item-interview__name h3">Наташа, 28 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Изначально медитация привлекла моё внимание тем, что зачастую ей приписываются возможности обрести больший контроль своего ума и некоторые сверхспособности. Я занималась йогой и интересовалась улучшением концентрации внимания, усилением осознанности, тренировкой воли. Медитация казалась органичным продолжением практики, когда йога будто бы исчерпала себя.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Курс помог мне попробовать практику в мягкой доступной форме. Медитация всегда казалась чем-то слишком сложным и недостижимым – благодаря курсу появилась возможность сделать первые шаги, не бросив из-за перегруженности или непосильности задачи. Информация подана в удобной форме, теория сразу отрабатывается на практике, техники изложены понятно и четко, ничего лишнего.</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Я советую начинающим не откладывать практику из-за её кажущейся сверхсложности, пробовать освоить, начиная с малого, но посильного. Как кто-то сказал однажды: "быстро – это медленно, но постоянно."</p>
                        </div>
                    </div>
                </div>
            </div>

            <a name="max"></a>
            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Max_200.png" alt="photo">@else<img src="/assets/img/interviews/Max_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Управление недвижимостью</div>
                    <div class="item-interview__name h3">Максим, 39 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Медитация для меня стала путём к освобождению от колеса обыденности. Путеводителем по жизни в тех или иных случаях. Сначала это был шаг в неизвестность, затем упорный труд над собой, своими привычками, убеждениями и правилами. Всё это стало сливаться с единым полем, где нет ни правил, ни программ, описывающих чётко мое "Я".</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Этот курс дал мне глоток свободы, "я" стал дышать не так ритмично, как ранее, успевая рассматривать все прелести жизни в каждом её проявлении. Это прекрасно осознавать, что дана жизнь. Особенно понимая, что она дана для того, чтобы сделать мир чище в себе и вокруг себя.</p>
                            <p>Медитация похожа на хобби, где все участники этого "кружка" коллекционируют хорошие работы "над собой", а некоторые пишут диссертацию на тему "как я проживаю эту жизнь", и стараются оставлять за собой невидимый след "пустотности жизни"</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Если в вашей голове появились уже мысли о медитации, не сомневайся ни на секунду, сегодня это именно тот день и не переноси его на "завтра". Садись и начинай медитировать, результат не заставит долго ждать. "Судьба любит рисковых трудоголиков", их ждёт успех и просветление.</p>
                        </div>
                    </div>
                </div>
            </div>

            <a name="irina"></a>
            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Irina_200.png" alt="photo">@else<img src="/assets/img/interviews/Irina_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Инженер</div>
                    <div class="item-interview__name h3">Ирина, 37 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Мой трудовой день очень насыщенный и эмоционально, и интеллектуально, связан с решением многих задач в кратчайшие сроки. В какой-то момент я поняла, что не справляюсь, что я истощена и от перегруза стала раздражительной, нервной, настроение плохое. Я решила попробовать медитацию, чтобы привести мысли и чувства в порядок, а свое состояние – сделать более спокойным и светлым, увидеть позитив в жизни.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Курс меня очень вдохновил! После выполнения заданий я чувствовала и прилив сил, и улыбку, и какое-то умиротворение. Я подумала, что если такие изменения произошли всего лишь за 7 дней, то что ждет меня дальше при ежедневной практике медитации? Какие еще интересные открытия? Спасибо кураторам, обратная связь с реальным живым человеком очень полезна и важна.</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Я сама начинающий, поэтому сложно давать советы. Наверное, постараться найти хотя бы немного времени для себя и практики в течение каждого дня. Важна регулярность, режим, это очень дисциплинирует. Не отчаиваться, не сдаваться, не ждать результата, а просто пробовать медитировать и пребывать в этом делании. Удачи и успехов!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Petr_200.png" alt="photo">@else<img src="/assets/img/interviews/Petr_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Предприниматель</div>
                    <div class="item-interview__name h3">Петр, 38 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Слово "медитация" я услышал давно, но однозначного понимания сути у меня не было.</p>
                            <p>Я увлекался различными практиками: были развивающие тренинги, психотерапия, фитнес-йога, и др., но ничто особо не вызывало жизненного интереса. Захотелось попробовать медитацию. Сначала мной двигало простое любопытство, но со временем, выполняя упражнения, пришло понимание, насколько это мощная практика, что она дает и как меняет человека. Теперь это стало частью моей жизни.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Курс дал мне понимание, что такое внимание, зачем оно нужно и как им управлять. Занимательные упражнения подобраны таким образом, чтобы материал воспринимался и усваивался наиболее эффективным образом.</p>
                            <p>Теперь я могу продолжить самостоятельно правильно выполнять упражнения и медитировать.</p>
                            <p>Ежедневная тренировка концентрации позволяет мне быть не только более эффективным в повседневной жизни и социуме, но и с разрешением личностных проблем, и духовном развитии.</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Обязательно записывайтесь на курс! Вы узнаете, что есть настоящая медитация. За эти несколько дней вы сможете самолично попробовать предложенные упражнения, выполняя которые ежедневно, ваша жизнь может измениться кардинальным образом.</p>
                            <p>В худшем случае, просто для общего развития 😊</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Ivan_200.png" alt="photo">@else<img src="/assets/img/interviews/Ivan_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">IT Аналитик</div>
                    <div class="item-interview__name h3">Иван, 37 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Хочу научиться управлять своим состоянием ума по своему желанию, безотносительно внешних факторов. Медитация, кмк и есть этот инструмент.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Курс мне позволил продвинутся по пути к реализации своей цели – управление своим состоянием. Упражнения подобраны для курса таким образом, что с одной стороны, легко понять начинающему, как выполнять упражнение, с другой стороны, я мог четко отследить, что мне предстоит еще большой путь по освоению управлению вниманием, так как во всех упражнениях я наблюдал отвлечения ума и посторонние мысли. Спасибо!</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Не сдаваться, пробовать еще раз и еще раз, если можете.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Ksenia_200.png" alt="photo">@else<img src="/assets/img/interviews/Ksenia_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Преподаватель йоги</div>
                    <div class="item-interview__name h3">Ксения, 38 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Хотела сделать свою жизнь спокойнее, комфортнее, счастливее. Это толкало на разные поиски, приводило к разным практикам, и медитация стала одной из таких практик. К счастью эффективной.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Когда я пришла на курс, у меня уже был некий опыт медитации. Поэтому он освежил практические навыки и очень хорошо подготовил к предстоящему ретриту молчания.</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>С одной стороны, отбросить какие-либо ожидания. За недельный курс жизнь не поменяется кардинально. И даже за месяцы регулярной медитации. Но стоит помнить о том, что это реальный рабочий инструмент и кое-какие бонусы от его использования (элементарное спокойствие ума, ясность внимания и способность к самонаблюдению) рано или поздно проявятся обязательно. Поэтому запастись терпением и просто двигаться вперед.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Misha_200.png" alt="photo">@else<img src="/assets/img/interviews/Misha_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Врач</div>
                    <div class="item-interview__name h3">Миша, 39 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Наверное, как все верные решения в жизни – это было спонтанным и вынужденным. Был сложный период, когда прежние ориентиры и ценности перестали работать. Искал что-то, что могло бы разрешить конфликты и уменьшить непонимание себя и отношений с другими. Обычно, в таких ситуациях люди приходят к психотерапевту. Я пришел к медитации. С тех пор проблем стало сильно меньше, а смысла – больше.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Конкретные техники саморегуляции, снижение эмоциональной напряженности. Раньше бешеный табун мыслей устраивал цирковое представление по вечерам, теперь он, как правило, мирно щиплет травку. А если вдруг решает пуститься в галоп – у меня есть средства для успокоения этих рысаков.</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Просто начните. Без ожиданий. Отбросьте, все, что вы когда-то слышали. Будьте максимально внимательны и открыты. Регулярность практики - один из важнейших ингредиентов её успеха. И ещё - не упустите свой шанс. Тем более, что для прохождения курса требуется только ваше внимание и время. И эти ресурсы вы вкладываете в свое развитие и изменения.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="interview__item item-interview item-interview--bg">
                <div class="item-interview__img">
                    @agent('mobile')<img src="/assets/img/interviews/Artem_200.png" alt="photo">@else<img src="/assets/img/interviews/Artem_360.png" alt="photo">@endagent
                </div>
                <div class="item-interview__info">
                    <div class="item-interview__position page-link">Инструктор по йоге, предприниматель</div>
                    <div class="item-interview__name h3">Артем, 35 лет</div>
                    <div class="item-interview__text">
                        <div class="js-crop-text-wrap">
                            <span class="item-interview__subtitle">Почему решили научиться медитировать?</span>
                            <p>Об остановке внутреннего диалога, контроле внимания и состоянии медитации я узнал, когда только начал заниматься йогой. Научиться медитировать – одна из ключевых задач у того, кто практикует йогу и тем более преподает. Однако, обучаясь в современных школах йоги, у известных мастеров, у меня не получалось реализовать эту задачу практически на протяжении многих лет.</p>
                            <span class="item-interview__subtitle">Что дал вам курс</span>
                            <p>Курс Академии медитации дал мне новый опыт и понимание, как и в каком направлении двигаться, чтобы научиться медитировать по-настоящему, с остановкой внутреннего диалога и пребыванием в состоянии повышенной ясности.</p>
                            <span class="item-interview__subtitle">Ваш совет начинающим</span>
                            <p>Совет новичкам: начните. Не ждите, что вы научитесь медитировать за неделю или за месяц. Это увлекательный путь, длинною в жизнь, на котором каждый день встречаются препятствия, приобретается новый опыт, и копятся силы для преодоления трудностей. Тяжело в учении, легко в бою. Эта фраза отлично выражает то, как практика медитации влияет на нашу жизнь. Сделайте медитацию привычкой. Это самое лучшее, чем можно себе помочь. Ну а в Академии есть всё для успешного продвижения и роста на этом Пути.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="interview__nav-btns">
            <a class="interview__btn nav-btn nav-btn--icon-left" href="{{ route('home') }}#interview">
                <svg class="icon icon-arrow">
                    <use xlink:href="/assets/img/spritesvg.svg#arrow"></use>
                </svg>На главную
            </a>
        </div>
    </div>
</div>
@endsection
