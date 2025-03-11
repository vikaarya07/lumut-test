<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (Session::has('login.success'))
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{ Session::get('login.success') }}",
            });
        @endif

        @if (Session::has('errors'))
            Swal.fire({
                icon: "error",
                title: "Terjadi Kesalahan!",
            });
        @endif

        @if (Session::has('success'))
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ Session::get('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        @endif

        @if (Session::has('error'))
            Swal.fire({
                icon: "error",
                title: "{{ Session::get('error') }}",
            });
        @endif
    });

    document.getElementById('delete-post').addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Anda tidak dapat mengembalikan data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form').submit();
            }
        });
    });
</script>
