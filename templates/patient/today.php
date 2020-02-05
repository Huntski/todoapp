<div class="head">
    <a href="logout" class="head__logout">logout</a>
    <span class="head__time">Tuesday 9:01 2019</span>
</div>

<div class="schedule__nav">
    <button class="schedule__nav__button active">Today</button>
    <a href="<?=$patient_url?>/year"><button class="schedule__nav__button">Year</button></a>
</div>

<div class="todos">
    <?php
    foreach($todos as $todo) :
        ?>
    <a class="todos__todo" href="<?=$patient_url . '/task/' . $todo->id?>">
        <div class="todo__time">
            <span class="todo__start"><?=$todo->start?></span>
            <span class="todo__finish"><?=$todo->finish?></span>
        </div>

        <div class="todo__done">
            <?php if ($todo->done) : ?>
            <img class="todo__done__checked" src="<?=$uri?>img/todo/checked.svg" alt="checkbox img">
            <?php else : ?>
            <div class="todo__done__unchecked"></div>
            <?php endif; ?>
        </div>

        <div class="todo__info <?php if ($todo->done) echo 'done'?>">
            <span class="todo__info__title"><?=$todo->title?></span>
        </div>
    </a>
    <?php
    endforeach;
    ?>
</div>