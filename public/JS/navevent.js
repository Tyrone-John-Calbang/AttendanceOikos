let button = document.querySelector('.btn-nav');
let sidebar = document.querySelector('.sidebar');
button.onclick = function () {
    sidebar.classList.toggle('active');
}

function logout(){
    Swal.fire({
        position: 'center',
        icon: 'question',
        title: 'Are you sure you want to log-out',
        cancelButtonText:'No',
        showConfirmButton: true,
        confirmButtonColor: 'green',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href='/admin/logout';
        }
    });
}