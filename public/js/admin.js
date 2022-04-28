$(document).ready(function () {
    $('.delete-btn').click(function () {
        let res = confirm('Подтвердите действие');
        if (!res) {
            return false;
        }
    })

    console.log('ssaaa')
})
