<h4> Share yours ideas </h4>



                <div class="row">
                    <form method="post" action="{{route('ideas.store')}}">
                        @csrf
                    <div class="mb-3">
                        <textarea class="form-control" name="idea" id="idea" rows="3"></textarea>
                         @error('idea')
                            <span class="fs-6 text-danger d-block">{{$message}} </span>
                         @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-dark"> Share </button>
                    </div>
                    </form>
                </div>


