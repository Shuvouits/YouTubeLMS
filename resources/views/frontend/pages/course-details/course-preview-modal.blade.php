  <!-- Modal -->
  <div class="modal fade modal-container" id="previewModal" tabindex="-1" role="dialog"
  aria-labelledby="previewModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header border-bottom-gray">
              <div class="pr-2">
                  <p class="pb-2 font-weight-semi-bold">Course Preview</p>
                  <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="previewModalTitle">{{$course->course_name}}</h5>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="la la-times"></span>
              </button>
          </div><!-- end modal-header -->
          <div class="modal-body">

            <div class="col-md-12 mt-3">
                <input type="hidden" class="form-control video_url" name="url" placeholder="Enter the YouTube video URL"
                value="{{ old('url', $course->video_url) }}" required>

            <iframe class="videoPreview" style="margin-top: 15px; width: 100%; height: 400px;"
                frameborder="0" allowfullscreen></iframe>

            </div>


          </div><!-- end modal-body -->
      </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->




@push('scripts')
<script>


document.addEventListener("DOMContentLoaded", function () {
    let videoInputs = document.querySelectorAll(".video_url"); // সব ভিডিও ইনপুট খুঁজে বের করো

    videoInputs.forEach(videoInput => {
        let videoPreview = videoInput.closest('.col-md-12').querySelector(".videoPreview"); // সংশ্লিষ্ট প্রিভিউ iframe

        // ইউটিউব ভিডিও আইডি এক্সট্রাক্ট ফাংশন
        function extractYouTubeVideoID(url) {
            let regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/;
            let match = url.match(regex);
            return match ? match[1] : null;
        }

        // ভিডিও প্রিভিউ আপডেট ফাংশন
        function updateVideoPreview() {
            let url = videoInput.value;
            let videoId = extractYouTubeVideoID(url);

            if (videoId) {
                videoPreview.src = `https://www.youtube.com/embed/${videoId}`;
                videoPreview.style.display = "block";
            } else {
                videoPreview.src = "";
                videoPreview.style.display = "none";
            }
        }

        // ইনপুট পরিবর্তন হলে প্রিভিউ আপডেট করো
        videoInput.addEventListener("input", updateVideoPreview);

        // প্রথমবার যদি ভিডিও ইউআরএল থাকে, তাহলে প্রিভিউ দেখাও
        if (videoInput.value.trim() !== "") {
            updateVideoPreview();
        }
    });
});



</script>
@endpush

