
$(document).ready(function () {
    // Listen for input changes in the "name" field
    $('#name').on('input', function () {
        var name = $(this).val();
        var slug = name.toLowerCase() // Convert to lowercase
            .replace(/ /g, '-')       // Replace spaces with hyphens
            .replace(/[^\w-]+/g, ''); // Remove non-word characters
        $('#slug').val(slug);        // Set the slug input value
    });
});
