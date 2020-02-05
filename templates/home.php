<div class="home-container">
    <div class="home__header">
        <h2 class="home__logout"><a href="./logout">Logout</a></h2>
        <input type="checkbox" id="show_search" style="display: none">
        <h1 class="home__title">List of patients</h1>
        <div class="patients"></div>
        <div class="search">
            <input type="search" class="search__input">
            <label for="show_search">
                <img class="search__icon" src="img/search_icon-dark.svg" alt="search icon">
            </label>
        </div>
    </div>
    <div class="patients-list">
        <?php
        foreach (getPatients() as $patient) :
            ?>
            <a class="patient" href="patient/<?=$patient->id?>">
                <div class="patient__image">
                    <img src="img/patients/<?=$patient->image?>" alt="<?=$patient->image?>">
                </div>
                <h3 class="patient__name"><?=$patient->firstname.' '.$patient->tussenvoegsels.$patient->lastname?></h3>
            </a>
            <?php
        endforeach;
        ?>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

// -------------------------------------------------------------------- Functions

function searchUnfocus () {
    search_icon.src = 'img/search_icon-dark.svg'
    search_input.value = ''
    search()
}

function search () {
    let requestUrl = baseurl + 'search/' + search_input.value
    console.log(requestUrl)
    $.ajax({
        datatype: 'html',
        url: requestUrl
    }).done(function(response) {
        patient_list.innerHTML = response
    }).fail(function() {
        console.error("Ajax Request Failed")
    })
}

// -------------------------------------------------------------------- Variables

let url = window.location,
    // baseurl = url.protocol + "//" + url.host + '/school/todoapp/', // hosted
    baseurl = url.protocol + "//" + url.host + '/todoapp/', // localhost
    search_checkbox = document.querySelector('#show_search'),
    search_icon = document.querySelector('.search__icon'),
    search_input = document.querySelector('.search__input'),
    patient_list = document.querySelector('.patients-list')

// -------------------------------------------------------------------- Events

search_checkbox.addEventListener('change', _ => {
    if (search_checkbox.checked) {
        search_icon.src = 'img/search_icon-pink.svg'
        search_input.focus()
        return
    }
    searchUnfocus()
})

search_input.addEventListener('input', search)

// --------------------------------------------------------------------

</script>