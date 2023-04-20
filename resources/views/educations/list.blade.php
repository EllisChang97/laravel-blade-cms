@extends ('layout.console')

@section ('content')

<section class="w3-padding">
    
    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Degree</th>
            <th>Institution</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($educations as $education)
            <tr>
                <td>{{$education->degree}}</td>
                <td>{{$education->institution}}</td> 
                <td><a href="/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/educations/add" class="w3-button w3-green">New Education</a>

</section>

@endsection