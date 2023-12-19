<script>
    $(document).ready(function () {
        $('.form-application-pdf').click(function(e) {
            e.preventDefault()
            var form = document.querySelector('form.form-application')
            HTMLFormElement.prototype.submit.call(form);
        })
    });
</script>