<h1>Welcome to Laravel {{$name}} {{$age}}</h1>

<br>

@for($i=0; $i<count($names); $i++)
    {{$names[$i]}} <br>
@endfor

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
