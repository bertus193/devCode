@extends('layout')
@section('page')
<style>
.courseOut{
    -ms-transform: scale(0.675, 0.675);
    -webkit-transform: scale(0.675, 0.675);
    transform: scale(0.675, 0.675);
}
</style>
<script>
$(document).ready(function() {
    $('#btn-leave-course').click(function(event) {
        if (window.confirm("¿Estás seguro?")) {
            $.ajax({
                url: "{{ route('user.course.leave.post',['id'=>$course->id]) }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log(data)
                    window.location="{{ route('course',['id'=>$course->id]) }}";
                }
            });
        }
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

    $('#btn-join-course').click(function(event) {
        $.ajax({
            url: "{{ route('user.course.join.post',['id'=>$course->id]) }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log(data)
                window.location="{{ route('course',['id'=>$course->id]) }}";
            }
        });
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
</script>
<div class="inner-body">
    <div class="inner-box">
        @if($course != null)
            <h1>{{$course->name}}</h1>
            <p style="margin-top: 20px;">{{$course->description}}</p>
            
            <?php
                $status = 1;
                if(isset($user)){
                    foreach($user->courses as $course_aux){
                        if($course_aux->id == $course->id){
                            $status = 2;
                        }
                    }
                } else{
                    $status = 3;
                }
                
            ?>

            <p style="height: 200px;">
            </p>


            @if($status == 2)
            <form style="text-align: center;" action="#">
                <button class="btn btn-primary" type="submit">Hacer examen</button>
            </form><br>
            <p style="text-align: right;">
            <button id="btn-leave-course" class="btn btn-danger courseOut" type="submit">Salirse del curso</button>
            </p>
            @elseif($status == 3)
            <form action="{{route('user.register.get')}}">
                <button class="btn btn-success" type="submit">¡Quiero inscribirme!</button>
            </form>
            @else
                <button id="btn-join-course" class="btn btn-success" type="submit">¡Quiero inscribirme!</button>
            @endif
        @else
            El curso indicado no existe.
        @endif
    </div>
</div>

@stop
