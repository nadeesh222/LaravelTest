<h4> Share yours ideas </h4>



                <div class="row">
                    <form method="post" action="{{route('idea.create')}}">
                        @csrf
                    <div class="mb-3">
                        <textarea class="form-control" name="idea" id="idea" rows="3"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-dark"> Share </button>
                    </div>
                    </form>
                </div>


