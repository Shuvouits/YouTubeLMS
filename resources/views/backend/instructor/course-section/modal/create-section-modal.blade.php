 <!-- course section Modal -->
 <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Section</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="{{ route('instructor.course-section.store') }}">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}" />
                    <div class="">
                        <label for="section" class="form-label">Section Title</label>
                        <input type="text" class="form-control" name="section_title" id="section-title"
                            placeholder="Enter the section">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>
