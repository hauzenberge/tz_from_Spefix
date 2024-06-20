<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#productModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var productId = button.data('id');

            fetch(`/products/${productId}`)
                .then(response => response.json())
                .then(data => {
                    $('#productModalLabel').text(data.name);
                    $('#productDescription').text(data.description);
                });
        });
    });
</script>