const createActiveMenu = () => {
    let url, menuLinks;
    url = new URL(window.location.href);
    menuLinks = document.querySelectorAll('.menu-link')
    menuLinks.forEach(menu => {
        let link
        link = new URL(menu.getAttribute('href'))
        if (link.pathname === url.pathname) {
            menu.classList.add('active')
        }
    })
}
const showSuccessfulness = () => {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Thank you Your request has been received',
        showConfirmButton: false,
        timer: 1500
    })
}
createActiveMenu()
