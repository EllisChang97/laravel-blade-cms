@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Education</h2>

    <form method="post" action="/console/educations/edit/{{$education->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="text" name="degree" id="degree" value="{{old('degree', $education->degree)}}" required>
            
            @if ($errors->first('degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="institution">Institution:</label>
            <input type="text" name="institution" id="institution" value="{{old('institution', $education->institution)}}" required>

            @if ($errors->first('institution'))
                <br>
                <span class="w3-text-red">{{$errors->first('institution')}}</span>
            @endif
        </div>


        <button type="submit" class="w3-button w3-green">Edit Education</button>

    </form>


    <a href="/console/educations/list">Back to Education List</a>

</section>

@endsection
