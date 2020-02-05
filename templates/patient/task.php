<div class="task__head">
    <a href="<?=$patient_url?>" class="task__head__return"><img src="<?=$uri?>img/todo/return_arrow.svg" alt=""></a>
    <img onclick="danger" src="<?=$uri?>img/todo/danger.svg" alt="" class="task__head__danger">
</div>

<div class="task__info">
    <img class="task__image" alt="task image" src="<?=$todo->image?>">
    <span class="task__title"><?=$todo->title?></span>
    <span class="task__desc"><?=$todo->description?></span>
</div>

<div class="task__controlls">
    <a href=""></a>
    <button>Audio</button>
    <a href=""></a>
</div>

<div class="success modal">
    <div class="success__box">
        <span class="success__desc">Well done!</span>
        <img class="success__vinky" src="<?=$uri?>img/todo/large__vinky.svg" alt="vinky :\">
        <a class="success__link" href="">
            <img class="success__vink" src="<?=$uri?>img/todo/green__vink.svg" alt="vinky">
            <div class="todo__info success__done">
                <span class="todo__info__title"><?=$todo->title?></span>
            </div>
        </a>
    </div>
</div>

<div class="success modal">
    <div class="success__box">
        <span class="success__desc">Well done!</span>
        <img class="success__vinky" src="<?=$uri?>img/todo/large__vinky.svg" alt="vinky :\">
        <a class="success__link" href="">
            <img class="success__vink" src="<?=$uri?>img/todo/green__vink.svg" alt="vinky">
            <div class="todo__info success__done">
                <span class="todo__info__title"><?=$todo->title?></span>
            </div>
        </a>
    </div>
</div>