/* auto generate slug   */

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


/*   Dynamic form addd */

$(document).ready(function () {
    // Add new input field for course goal
    $('#addGoalInput').on('click', function (e) {
        e.preventDefault(); // Prevent default behavior

        $('#goalContainer').append(`
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                <input type="text" class="form-control" name="course_goals[]" placeholder="Enter Course Goal" />
                <button type="button" class="btn btn-danger removeGoalInput">-</button>
            </div>
        `);
    });

    // Remove an input field
    $(document).on('click', '.removeGoalInput', function () {
        $(this).closest('div').remove();
    });
});

    /* dynamic dependent jquery   */

    $(document).ready(function () {
        $('#category').on('change', function () {
            var categoryId = $(this).val();

            if (categoryId) {
                $.ajax({
                    url: '/instructor/get-subcategories/' + categoryId,
                    type: 'GET',

                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Dynamically fetch CSRF token
                    },

                    success: function (data) {

                        console.log(data);
                        $('#subcategory').empty(); // Clear previous options
                        $('#subcategory').append('<option value="" disabled selected>Select a subcategory</option>');

                        $.each(data, function (key, value) {
                            $('#subcategory').append('<option value="' + parseInt(value.id) + '">' + value.name + '</option>');
                        });
                    },
                    error: function () {
                        alert('Failed to load subcategories.');
                    }
                });
            } else {
                $('#subcategory').empty();
                $('#subcategory').append('<option value="" disabled selected>Select a subcategory</option>');
            }
        });
    });



    /* video Preview  */


    $(document).ready(function () {
        $('#video').on('change', function (e) {
            const file = e.target.files[0];

            if (file) {
                const fileType = file.type;
                const validTypes = ['video/mp4', 'video/webm', 'video/ogg'];

                // Validate the file type
                if (!validTypes.includes(fileType)) {
                    alert('Please upload a valid video file (MP4, WebM, OGG).');
                    $('#video').val(''); // Clear the input
                    return;
                }

                // Show video preview
                const videoPreview = document.getElementById('videoPreview');
                videoPreview.src = URL.createObjectURL(file);
                videoPreview.style.display = 'block';
                videoPreview.load();
                videoPreview.onloadeddata = function () {
                    URL.revokeObjectURL(this.src); // Free up memory
                };
            }
        });
    });



