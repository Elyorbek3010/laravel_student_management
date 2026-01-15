<div>
    <!-- <h1>{{$student->student_name}}</h1> -->
    <h1>The new student was created successfuly</h1>

    <a href="{{url('/students/'. $student->id)}}">
        Show the student details
    </a>
</div>