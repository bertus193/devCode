@extends('layout')
@section('page')
<style>
#bg{
  position:relative;
  top:20px;
  height:600px;
  width:800px;

  margin-left:auto;
  margin-right:auto;
  border:#fff 15px solid;
}

.floating-box {
    display: inline-block;
}

.module{
  position:relative;
  top:15%;
  height:90%;
  width:450px;
  margin-left:auto;
  margin-right:auto;
  border-radius:5px;
  background:RGBA(255,255,255,1);

  -webkit-box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .45);
  box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .45);

}

.module ul{
  list-style-type:none;
  margin:0;
}

.tab{
  float:left;
  height:60px;
  width:25%;
  padding-top:20px;
  box-sizing:border-box;
  background:#eeeeee;
  text-align:center;
  cursor:pointer;
  transition:background .4s;
}

.tab:first-child{
  -webkit-border-radius: 5px 0px 0px 0px;
  border-radius: 5px 0px 0px 0px;
}

.tab:last-child{
  -webkit-border-radius: 0px 5px 0px 0px;
  border-radius: 0px 5px 0px 0px;
}

.tab:hover{
  background-color:rgba(0,0,0,.1);
}

.activeTab{
  background:#fff;
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

.button{
  height:50px;
  width:100%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 0px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
  background:#90c843;
  color:#FFF;
  font-weight:bold;
  font-size: 12pt;
  transition:background .4s;
  cursor:pointer;
}

.button:hover{
  background:#80b438;
}
#maincontainer {
  width: 400px;
  height: 80px;
  margin: 0 auto;
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

</style>
<div class="inner-body">
  @if($plan != null)
  <div class="floating-box col-md-5">
    <div class="card mb-4">
      <center>
        <h4> Plan {{$plan->type}} </h4>
        <h5> $ {{$plan->monthly_price}}/mes </h5>
        <h5> {{$plan->benefits}} </h5>
      </center>
      <hr/>
      <!--<div class="module">-->
      <ul style="list-style-type:none;">
        <li class="tab activeTab">1-REGÍSTRATE</li>
        <li class="tab" >2-PAGO</li>
      </ul>
      <form class="form">
        <label> Nombre como aparece en la tarjeta </label>
        <input type="text" placeholder="Nombres" class="textbox" />
        <label> Correo electrónico </label>
        <input type="text" placeholder="Correo Electrónico" class="textbox" />
        <label> Número de Tarjeta </label>
        <input type="text" placeholder="0000 0000 0000 0000" class="textbox" />
        <div class="exp" style="width:25%; display: inline-block;">
        <label>Fecha de Expiración</label>
        <br>
        <select class="input" name="exp_month" id="exp_month">
          <option value disabled>Mes</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
        <label>&nbsp</label>
        <select class="input" name="exp_year" id="exp_year">
          <option value disabled>Año</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
          <option value="2026">2026</option>
          <option value="2027">2027</option>
          <option value="2028">2028</option>
          <option value="2029">2029</option>
        </select>
        </div>
          <div class="exp" style="width:50%; display: inline-block;">
            <label>CVC/CVV</label>
            <input size="4" maxlength="4" id="paymentCVV" class="input profile-complete-form__active" type="text" name="cvc" placeholder="CVC/CVV">
          </div>
          <input type="button" value="Realizar pago" class="button" />
        </form>
      </div>
    </div>
    <div class="floating-box col-md-5">
      <div class="card md-4">
        <h4>Beneficios</h4>
        <div id="maincontainer">
    			<div id="leftcolumn"><img src='images\benefits\icon_accessible.png' width=100 height=100></div>
    			<div id="contentwrapper">
            <h6> Acceso ilimitado </h6>
            <p> Accede a todos los cursos en cualquier momento, desde cualquier lugar y aprende a tu ritmo por un año.</p>
    			</div>
    		</div>
        <div id="maincontainer">
    			<div id="leftcolumn"><img src='images\benefits\icon_discussion.png' class="center"></div>
    			<div id="contentwrapper">
            <h6> Respondemos tus Preguntas </h6>
            <p>Contamos con un equipo de soporte académico pendiente de tus preguntas y una comunidad colaborativa.</p>
    			</div>
    		</div>
        <div id="maincontainer">
    			<div id="leftcolumn"><img src='images\benefits\icon_discussion.png' class="center"></div>
    			<div id="contentwrapper">
            <h6> Certificado de Completitud </h6>
            <p> Contamos con un equipo de soporte académico pendiente de tus preguntas y una comunidad colaborativa.</p>
    			</div>
    		</div>
        <div id="maincontainer">
    			<div id="leftcolumn"><img src='images\benefits\icon_certificate.png' class="center"></div>
    			<div id="contentwrapper">
            <h6> Certificado de Completitud </h6>
            <p> Obtén un certificado digital de completitud al aprobar un examen.</p>
    			</div>
    		</div>
        <div id="maincontainer">
    			<div id="leftcolumn"><img src='images\benefits\icon_payment.png' class="center"></div>
    			<div id="contentwrapper">
            <h6> Múltiples medio de Pago </h6>
            <p> Aceptamos pagos con tarjeta de crédito, débito, Paypal, Western Union, entre otros.</p>
    			</div>
    		</div>
      </div>
    </div>
  </div>
  @else
  <div class="inner-box">
    El plan indicado no existe.
  </div>
  @endif
</div>
@stop
