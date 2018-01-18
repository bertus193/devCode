@extends('layout')
@section('page')
<style>
.courseOut{
    -ms-transform: scale(0.675, 0.675);
    -webkit-transform: scale(0.675, 0.675);
    transform: scale(0.675, 0.675);
}
.course__agenda {
    margin: 0 auto;
    padding: 0;
    width: 100%;
    display: -webkit-box;
    display: -moz-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: box;
    display: flex;
    -webkit-box-lines: multiple;
    -moz-box-lines: multiple;
    -o-box-lines: multiple;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -moz-box-pack: center;
    -o-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
}
.course__agenda li {
    width: 30%;
    height: 100%;
    list-style: none;
    text-align: center;
    padding: 1rem;
    -webkit-box-pack: center;
    -moz-box-pack: center;
    -o-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
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
            
            <center style="margin: 45px 0 45px 0;">
            @if(count($course->topics) == 0)
                <h5 style="margin: 80px;">Parece que este curso no tiene temas...</h5>
            @else          
                <h3>Temas:</h3>

                <ul class="course__agenda">
                @for($i = 1; $i <= count($course->topics); $i++)
                    <li class="row middle">
                            <a>
                            {{$i}}.- {{$course->topics[$i-1]->name}}
                            </a>
                    </li>
                @endfor  
                </ul>
            @endif
            </center>


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
