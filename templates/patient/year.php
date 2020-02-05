<div class="year__head">
    <a href="<?=$patient_url?>" class="year__head__return">
        <img src="<?=$uri?>img/todo/return_arrow.svg">Return today
    </a>
    <span class="year__head__time">Tuesday  9:01 2019</span>
</div>

<div class="year__slide">
    <!-- <div class="items"> -->
        <span>January</span>
        <span class="active">February</span>
        <span>March</span>
        <span>April</span>
        <span>May</span>
        <span>June</span>
        <span>July</span>
        <span>August</span>
        <span>September</span>
        <span>October</span>
        <span>November</span>
        <span>December</span>
    <!-- </div> -->
</div>

<div class="day__selection">
    <?php
    $today = 8;
    $weekDays = ['mo', 'tu', 'we', 'th', 'fr', 'sa', 'su'];
    $days = 31;

    foreach ($weekDays as $day) :
        ?><span class="day weekday"><?=$day?></span><?php
    endforeach;

    for ($i = 0; $i < $days; $i++) :
        ?><span class="day <?php if ($i == $today) echo 'today'; ?>"><?=$i?></span><?php
    endfor;
    ?>
</div>