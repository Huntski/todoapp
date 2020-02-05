let loading = document.querySelector('.loading'),
    main = document.querySelector('.main')

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(function() {
        loading.style.display = 'none'
        main.style.display = 'flex'
    }, 1)
})
