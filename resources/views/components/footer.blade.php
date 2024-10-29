<script>
    function confirmation(id, type) {
        var userResponse = confirm("Are you sure?\nOnce deleted, you will not be able to recover this record!");
        if (userResponse) {
            $.ajax({
                url: '/api/delete',
                type: 'POST',
                data: {
                    push_id: id,
                    push_type: type
                },
                success: function(data) {
                    window.location.href = data;
                },
                error: function(err) {
                   alert(err);
                }
            });
        } else {
          
        }
    }
</script>


<script>
    function dev() {
        Swal.fire({
            title: "Under Development",
            text: "Please try again later. Thank you.",
            icon: "error"
        });
    }
</script>

<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap">
            -
            <div class="nk-footer-copyright"> &copy; 2024 Property Management System (GSO) <a href="#" target="_blank" style="color: #b4543d"></a> ❤️ All Rights Reserved.</div>
            
        </div>
    </div>
</div>
