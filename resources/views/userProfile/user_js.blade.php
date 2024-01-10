<script>
    $(document).ready(function () {x
        $('.application_detail_modal').on('click', function(e) {
            let id_vacancy = $(this).data('vacancy')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route("application-detail") }}',
                type: 'GET',
                data : {
                    id_vacancy: id_vacancy
                },
                success: function(res) {
                    document.getElementById('vacancy_and_company').innerHTML = '<strong>'+ res.vacancy.vacancy_name +'</strong> at '+res.vacancy.company_name
                    document.getElementById('vacancy_detail').innerHTML = res.vacancy.vacancy_detail
                }
            })
        })
    });
</script>