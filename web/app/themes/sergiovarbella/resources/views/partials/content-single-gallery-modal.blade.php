@if ($gallery && count($gallery) > 1)
    @foreach ($gallery as $key => $gallery_img)
        <div class="modal fade" id="modal{{ $key }}" tabindex="-1" aria-labelledby="modal{{ $key }}Label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> {{ $gallery_img['title'] }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ $gallery_img['full'][0] }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
