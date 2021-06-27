@include('header')
@if (session()->get('uname') !== null)
    @yield('header-main-logged')
@else
    @yield('header-main')
@endif

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            {{-- @include('instructor.sidebar') --}}
        </div>
        <div class="col-md-9 ">

            <h1>Create post</h1>

            <form action="" method="POST">

                <div class="form-group has-error">
                    <label for="category">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option selected>--Select a Category--</option>
                        @foreach ($catall as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="title">Title </label>
                    <input type="text" class="form-control" name="title" placeholder="Your Title" />
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="description" placeholder="Type Your text Here"></textarea>
                </div>

                <div class="form-group my-2">
                    <button type="submit" class="btn btn-primary me-3">
                        Create
                    </button>
                    <button class="btn btn-outline-danger">
                        Cancel
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>
@include('footer')
