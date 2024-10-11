<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label>Name</label><input type="text" name="name" required>
    <label>Email</label><input type="email" name="email" id="email" required>
    <label>Mobile</label><input type="text" name="mobile" required>
    <button type="submit">Add User</button>
</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#email').on('blur', function() {
            var email = $(this).val();
            if (!validateEmail(email)) {
                alert('Invalid email format');
            }
        });

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    });
</script>
