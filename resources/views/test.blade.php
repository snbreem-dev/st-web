<p>Welcome to {{$course}} course</p>
<p>Welcome to {{$colleges[0]}}</p>
<p>@store('My Store')</p>
<h1>Welcome to Laravel {{$name}}</h1>

@if( $gpa < 60)
    <p>Fail</p>
@else
    <p>Success</p>
@endif

<ul>
    @for($i=0; $i<count($names); $i++)
        <li>
            <a href="#">{{$names[$i]}}</a>
        </li>
        <br>
    @endfor
</ul>

<br>

@foreach($subjects_marks as $key => $value)
    Subject name : {{$key}} , mark: {{$value}} <br>
@endforeach

@foreach($students_marks as $student)
    @foreach($student as $mark)
        {{$mark}}
    @endforeach
    <br>
@endforeach

<ul>
    @foreach($students_subject_marks as $student)
        <li>
            Arabic Mark: {{$student['arabic']}}, English Mark: {{$student['english']}}
        </li>
    @endforeach
</ul>

@auth
    <p>You are logged in</p>
@endauth

@guest
    <p>You are a guest</p>
@endguest
