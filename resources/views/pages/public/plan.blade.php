@extends('layout')
@section('page')
<style type="text/css">
.tab{
    float:left;
    height:60px;
    width:25%;
    padding-top:20px;
    box-sizing:border-box;
    text-align:center;
    cursor:pointer;
    transition:background .4s;
}

.tab:first-child{
    border-radius: 5px;
}

.tab:last-child{
    border-radius: 5px;
}

.tab:hover{
    background-color:rgba(0,0,0,.1);
    border-radius: 5px;
}

.activeTab{
    background:#eeeeee;
}

.form{
    float:left;
    height:86%;
    width:100%;
    box-sizing:border-box;
    padding:40px;
}

.textbox{
    height:50px;
    width:100%;
    border-radius:3px;
    border:rgba(0,0,0,.3) 2px solid;
    box-sizing:border-box;
    padding:10px;
    margin-bottom:30px;
}

.textbox:focus{
    outline:none;
    border:rgba(24,149,215,1) 2px solid;
    color:rgba(24,149,215,1);
}
.icon-center {
    margin-left: auto;
    margin-right: auto;
    display: block;
}
#maincontainer {
    width: auto;
    height: auto;
    margin: auto;
}
#leftcolumn {
    float:left;
    display:inline-block;
    width: 100px;
    height: 100%;
}
#contentwrapper {
    float:left;
    display:inline-block;
    width: -moz-calc(100% - 100px);
    width: -webkit-calc(100% - 100px);
    width: calc(100% - 100px);
    height: 100%;
}
.userInPlan{
    margin-top: 25%;
    padding: 25px;
    text-align: center;
}
</style>

<script>
$(document).ready(function() {
    $('#btn-payment').click(function(event) {
        $.ajax({
            url: "{{ route('user.pay.post',['id'=>$plan->id]) }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log(data)
                if(data.response && data.response == "OK"){
                    window.location="{{route('plan.all')}}"
                } else if(data.error){
                    publicErrorMsg(data.error)
                }    
            }
        });
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
</script>

<div class="inner-body">
  @if($plan != null)
    <div class="row" style="margin-right: 0;margin-left: 0;">
        <div class="card col-md-6">
            <center>
                <h4 style="margin-top: 15px;"> Plan {{$plan->type}} </h4>
                <h5> $ {{$plan->monthly_price}}/mes </h5>
                <h5> {{$plan->benefits}} </h5>
            </center>
            
            <hr/>
        
            @if($signed_in == 1)
                @if($user->plan->id == $plan->id)
                    <div class="alert alert-dismissible alert-success userInPlan">
                        Ya estás registrado en este plan</a>
                    </div>
                @elseif($plan->id == 3)
                <div align="center" style="margin: 25px;">
                    <input id='btn-payment' type="submit" value="Inscribirse en el plan gratuito" class="btn btn-success" />
                </div>
                @else
                    <ul style="list-style-type:none;">
                        <li class="tab">Regístrate</li>
                        <li class="tab activeTab" >Pago</li>
                    </ul>

                    <div class="form">
                        <div id="errorMsg"></div>
                        <label> Nombre como aparece en la tarjeta </label>
                        <input id="name" type="text" placeholder="Nombres" class="textbox" />
                        <label> Correo electrónico </label>
                        <input id="email" type="email" placeholder="Correo Electrónico" class="textbox" />
                        <label> Número de Tarjeta </label>
                        <input id="numbercount" type="text" placeholder="0000 0000 0000 0000" class="textbox" />
                        <div class="exp">
                        <label>Fecha de Expiración</label>
                        <br>
                        <div class="form-group">
                                <div class="col-xs-3">
                                <select class="form-control" name="expiry-month" id="expiry-month">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                </div>
                                <div class="col-xs-3">
                                <select class="form-control" name="expiry-year">
                                    @for ($i = date("Y"); $i <= date("Y") + 20; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                </div>
                        </div>
                        <div class="exp">
                            <label>CVC/CVV</label>
                            <input size="4" maxlength="4" id="paymentCVV" class="input profile-complete-form__active" type="text" name="cvc" placeholder="CVC/CVV">
                        </div>
                            <center>
                                <input id='btn-payment' type="submit" value="Realizar pago" class="btn btn-success" />
                            </center>
                        </div>
                    </div>
                @endif
            @else
                <ul style="list-style-type:none;">
                <li class="tab activeTab">Regístrate</li>
                <li class="tab" >Pago</li>
                </ul>
                <div style="text-align: center;margin: 50px;">
                    <form action="{{route('user.register.get')}}">
                        <button class="btn btn-success" type="submit">Regístrate primero ;)</button>
                    </form>
                </div>
            @endif
        </div>
        <div class="card col-md-5" style="margin-left: 20px;">
            <h4 style="text-align:center;margin: 15px 0 -5px 0">Beneficios</h4>
            <hr>
            @if($plan->id != 3)
                <div id="maincontainer">
                    <div id="leftcolumn">
                        {{ HTML::image('images/benefits/icon_accessible.png', 'accessible', array('class'=>'icon-center', 'width' => '50px', 'height' => '50px' )) }}
                    </div>
                    <div id="contentwrapper">
                        <h6> Acceso ilimitado </h6>
                        <p> Accede a todos los cursos en cualquier momento, desde cualquier lugar y aprende a tu ritmo por un año.</p>
                    </div>
                </div>
                <div id="maincontainer">
                    <div id="leftcolumn">
                        {{ HTML::image('images/benefits/icon_discussion.png', 'discussion', array('class'=>'icon-center', 'width' => '50px', 'height' => '50px' )) }}
                    </div>
                    <div id="contentwrapper">
                        <h6> Respondemos tus Preguntas </h6>
                        <p>Contamos con un equipo de soporte académico pendiente de tus preguntas y una comunidad colaborativa.</p>
                    </div>
                </div>
                <div id="maincontainer">
                    <div id="leftcolumn">
                        {{ HTML::image('images/benefits/icon_courses.png', 'coures', array('class'=>'icon-center', 'width' => '50px', 'height' => '50px' )) }}
                    </div>
                    <div id="contentwrapper">
                        <h6> Certificado de Completitud </h6>
                        <p> Contamos con un equipo de soporte académico pendiente de tus preguntas y una comunidad colaborativa.</p>
                    </div>
                </div>
                <div id="maincontainer">
                    <div id="leftcolumn">
                        {{ HTML::image('images/benefits/icon_certificate.png', 'certificate', array('class'=>'icon-center', 'width' => '50px', 'height' => '50px' )) }}
                    </div>
                    <div id="contentwrapper">
                        <h6> Certificado de Completitud </h6>
                        <p> Obtén un certificado digital de completitud al aprobar un examen.</p>
                    </div>
                </div>
                <div id="maincontainer">
                    <div id="leftcolumn">
                        {{ HTML::image('images/benefits/icon_payment.png', 'payment', array('class'=>'icon-center', 'width' => '50px', 'height' => '50px' )) }}
                    </div>
                    <div id="contentwrapper">
                        <h6> Múltiples medio de Pago </h6>
                        <p> Aceptamos pagos con tarjeta de crédito, débito, Paypal, Western Union, entre otros.</p>
                    </div>
                </div>
            @else
            <div class="alert alert-dismissible alert-warning userInPlan">
                Este plan no tiene beneficios
            </div>
            @endif
        </div>
    </div>
    @else
        <div class="inner-box">
            El plan indicado no existe.
        </div>
    @endif
</div>
@stop
