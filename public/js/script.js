$(document).ready(() => {
    $('.js-fav-heart').on('click', e => {
        e.preventDefault()

        const $link = e.currentTarget
        // TODO: toggle the heart container

        $.ajax({
            method: 'POST',
            url: $link.attr('href')
        }).done(data => {
            
        })
    })
})
