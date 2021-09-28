<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/glide.core.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/glide.theme.min.css') }}" rel="stylesheet">
    <title>#ConSOCalSuperBowl</title>
  </head>
  <body>
    <div class="container">
      <div class="row r-100 align-content-around justify-content-between">
        <div class="col-md-12 text-center logo">
          <a href="http://socasesores.com/landingNFL/public/"><img src="{{ url('img/soc_blanco.png') }}" alt="" class="img-fluid"></a>
        </div>
        <div class="col-12">
          <h1 class="text-center">#ConSOCalSuperBowl</h1>
        </div>
        <div class="col-12 noticias">
          <div class="row justify-content-center">
            <div class="col-12 d-sm-none">
              <div class="glide">
                <div data-glide-el="track" class="glide__track">
                  <ul class="glide__slides">
                    <li class="glide__slide">
                      <div class="content" style="background-image: url({{url('img/Tasa-hipotecaria.jpg')}})"></div>
                    </li>
                    <li class="glide__slide">
                      <div class="content" style="background-image: url({{url('img/Tasa-hipotecaria.jpg')}})"></div>
                    </li>
                    <li class="glide__slide">
                      <div class="content" style="background-image: url({{url('img/Tasa-hipotecaria.jpg')}})"></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
              <a href="">
                <div class="content" style="background-image: url({{url('img/Tasa-hipotecaria.jpg')}})"></div>
              </a>
            </div>
            <div class="col-md-3 d-none d-sm-block">
              <a href="">
                <div class="content" style="background-image: url({{url('img/Tasa-hipotecaria.jpg')}})"></div>
              </a>
            </div>
            <div class="col-md-3 d-none d-sm-block">
              <a href="">
                <div class="content" style="background-image: url({{url('img/Tasa-hipotecaria.jpg')}})"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12">
          <p class="white text-center">Te llevamos al Super Bowl, ¡participa!</p>
        </div>
        <div class="col-12 buttons text-center">
          <a href="" class="link link-b" id="a1">Asesor</a>
          <p class="white d-none d-sm-inline">Soy</p>
          <a href="" class="link link-g" id="c1">Cliente</a>
        </div>
        <div class="col-12 buttons text-center asesor d-none">
          <div>
            <p class="white">Soy Asesor</p>
          </div>
          <a href="" class="link link-b" data="a-hipotecario" data-toggle="modal" data-target=".bd-example-modal-lg_asesor">Hipocatecario</a>
          <a href="" class="link link-b" data="a-empresarial" data-toggle="modal" data-target=".bd-example-modal-lg_asesor">Empresarial</a>
          <a href="" class="link link-b" data="a-seguros" data-toggle="modal" data-target=".bd-example-modal-lg_asesor">Seguros</a>
        </div>
        <div class="col-12 buttons text-center cliente d-none">
          <div>
            <p class="white">Soy Cliente</p>
          </div>
          <a href="" class="link link-g" data="c-hipotecario" data-toggle="modal" data-target=".bd-example-modal-lg_cliente">Hipocatecario</a>
          <a href="" class="link link-g" data="c-empresarial" data-toggle="modal" data-target=".bd-example-modal-lg_cliente">Empresarial</a>
          <a href="" class="link link-g" data="c-seguros" data-toggle="modal" data-target=".bd-example-modal-lg_cliente">Seguros</a>
        </div>
        <div class="col-12">
          <p class="text-center mb-0"><a href="" style="color: #fff">Bases y Condiciones</a></p>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg_asesor" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10">
                <h2>#ConSOCalSuperBowl</h2>
                <p>Te llevamos al Super Bowl, sube una foto demostrando tu pasión por la NFL y participa para ganar un viaje para el Super Bowl!</p>
              </div>
              <div class="col-md-5 flex-column d-flex justify-content-between">
                <div class="row">
                  <p><b>Dinámica</b></p>
                  <p>
                    Para participar, debes seguir a SOC Asesores en Facebook, Twitter, Instagram, Linkedin, tik tok, YouTube.<br><br>
                    <span>1)</span> Sube tu foto con tu cliente #SOC al momento de la firma del crédito. <br><br>
                    <span>2)</span> Comparte tu foto en redes sociales con el #ConSOCalSuperBowl.
                  </p>
                </div>
                <div class="row bottom-text">
                  <p><b><i>SOC te invita a que juntos participemos, entre más clientes suban sus fotos más oportunidades tienes de ganar.</i></b></p>
                  <p>Participa del 1 de octubre 2021 al 15 de Enero 2022. <br><br>*Se verificará que se hayan realizado todos los pasos anteriores.</p>
                </div>
              </div>
              <div class="col-md-7">
                <form method="POST" action="{{route('insertAsesor')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control required_1" name="nombre" id="nombre" placeholder="Nombre completo del titular del crédito" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control required_2" name="email" id="email" placeholder="correo@gmail.com" required>
                  </div>
                  <div class="form-group">
                    <label for="telefono">Número de teléfono</label>
                    <input type="text" class="form-control required_3" name="telefono" id="telefono" placeholder="55 0000 0000" required>
                  </div>
                  <div class="form-group">
                    <label for="oficina">Nombre de oficina</label>
                    <input type="text" class="form-control required_4" name="oficina" id="oficina" placeholder="Oficina SOC donde se firmó el crédito" required>
                  </div>
                  <div class="form-group monto">
                    <label for="monto">Monto del crédito</label>
                    <input type="number" class="form-control" name="monto" id="monto" placeholder="Crédito de máximo 50 millones">
                  </div>
                  <div class="form-group tipo d-none">
                    <label for="tipo">Tipo de Seguro</label>
                    <select class="form-control" id="tipo" name="tipo">
                      <option value="null" hidden selected></option>
                      <option value="Seguro de vida">Seguro de vida</option>
                      <option value="Gastos médicos mayores">Gastos médicos mayores</option>
                      <option value="Seguro de hogar">Seguro de hogar</option>
                      <option value="Seguros PyME">Seguros PyME</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="imagen">Subir fotografía</label>
                    <input type="file" class="form-control required_5" name="imagen" id="imagen" required>
                  </div>
                  <div class="form-group">
                    <label for="folio_sisec">Folio SISEC</label>
                    <input type="text" class="form-control required_6" name="folio_sisec" id="folio_sisec" placeholder="-" required>
                  </div>
                  <div class="alert d-none">
                    <div class="alert alert-danger" role="alert">
                      Tienes que completar todos los campos
                    </div>
                  </div>
                  <input type="hidden" value="" name="prestamo" class="prestamo">
                  <div class="form-group text-right">
                    <a href="" class="next next_1">Siguiente ></a>
                  </div>
                  <div class="confirmation d-none">
                    <p>Cuento con:</p>
                    <ul>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="visa" class="custom-control-input" id="visa" required>
                          <label class="custom-control-label" for="visa">Visa</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="pasaport" class="custom-control-input" id="pasaporte" required>
                          <label class="custom-control-label" for="pasaporte">Pasaporte</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="vacuna" class="custom-control-input" id="vacuna" required>
                          <label class="custom-control-label" for="vacuna">Vacuna anti COVID-19</label>
                        </div>
                      </li>
                    </ul>
                    <p class="derechos">Al dar clic en enviar, aceptas las <a href="https://socasesores.com/terminos-y-condiciones" target="_blank">Condiciones de uso</a> y el <a href="https://socasesores.com/aviso-de-privacidad" target="_blank">Aviso de privacidad</a>.</p>
                    <div class="alert alert-success d-none" role="alert">
                      <strong>Enviando</strong> informacion...
                    </div>
                    <input type="submit" value="Quiero participar" id="enviar">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg_cliente" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10">
                <h2>#ConSOCalSuperBowl</h2>
                <p>Te llevamos al Super Bowl, sube una foto demostrando tu pasión por la NFL y participa para ganar un viaje para el Super Bowl!</p>
              </div>
              <div class="col-md-5 flex-column d-flex justify-content-between">
                <div class="row">
                  <p><b>Dinámica</b></p>
                  <p>
                    Para participar, debes seguir a SOC Asesores en Facebook, Twitter, Instagram, Linkedin, tik tok, YouTube.<br><br>
                    <span>1)</span> Sube tu foto con tu asesor #SOC al momento de la firma de tu crédito y agrega una pequeña descripción de tu experiencia con SOC.<br><br>
                    <span>2)</span> Comparte tu foto en redes sociales con el #ConSOCalSuperBowl.
                  </p>
                </div>
                <div class="row bottom-text">
                  
                  <p>Participa del 1 de octubre 2021 al 15 de Enero 2022. <br><br>*Se verificará que se hayan realizado todos los pasos anteriores.</p>
                </div>
              </div>
              <div class="col-md-7">
                <form method="POST" action="{{route('insertCliente')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control required_11" name="nombre" id="nombre" placeholder="Nombre completo del titular del crédito" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control required_12" name="email" id="email" placeholder="correo@gmail.com" required>
                  </div>
                  <div class="form-group">
                    <label for="telefono">Número de teléfono</label>
                    <input type="text" class="form-control required_13" name="telefono" id="telefono" placeholder="55 0000 0000" required>
                  </div>
                  <div class="form-group">
                    <label for="oficina">Nombre de oficina</label>
                    <input type="text" class="form-control required_14" name="oficina" id="oficina" placeholder="Oficina SOC donde se firmó el crédito" required>
                  </div>
                  <div class="form-group tipo d-none">
                    <label for="tipo">Tipo de Seguro</label>
                    <select class="form-control" id="tipo" name="tipo">
                      <option value="null" hidden selected></option>
                      <option value="Seguro de vida">Seguro de vida</option>
                      <option value="Gastos médicos mayores" value="0">Gastos médicos mayores</option>
                      <option value="Seguro de hogar">Seguro de hogar</option>
                      <option value="Seguros PyME">Seguros PyME</option>
                    </select>
                  </div>
                  <div class="form-group monto">
                    <label for="monto">Monto del crédito</label>
                    <input type="number" class="form-control" name="monto" id="monto" placeholder="Crédito de máximo 50 millones">
                  </div>
                  <div class="form-group">
                    <label for="monto">Subir fotografía</label>
                    <input type="file" class="form-control required_15" name="imagen" id="imagen" required>
                  </div>
                  <div class="form-group">
                    <label for="monto">Descripción</label>
                    <input type="text" class="form-control required_16" name="descripcion" id="monto" placeholder="Mi experiencia con SOC…" required>
                  </div>
                  <div class="alert d-none">
                    <div class="alert alert-danger" role="alert">
                      Tienes que completar todos los campos
                    </div>
                  </div>
                  <input type="hidden" value="" name="prestamo" class="prestamo">
                  <div class="form-group text-right">
                    <a href="" class="next next_2">Siguiente ></a>
                  </div>
                  <div class="confirmation d-none">
                    <p>Cuento con:</p>
                    <ul>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="visa_2" class="custom-control-input" id="visa_2" required>
                          <label class="custom-control-label" for="visa_2">Visa</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="pasaporte_2" class="custom-control-input" id="pasaporte_2" required>
                          <label class="custom-control-label" for="pasaporte_2">Pasaporte</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="vacuna_2" class="custom-control-input" id="vacuna_2" required>
                          <label class="custom-control-label" for="vacuna_2">Vacuna anti COVID-19</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="folio_2" class="custom-control-input" id="folio_2" required>
                          <label class="custom-control-label" for="folio_2">Folio SISEC</label>
                        </div>
                      </li>
                    </ul>
                    <p class="derechos">Al dar clic en enviar, aceptas las <a href="https://socasesores.com/terminos-y-condiciones" target="_blank">Condiciones de uso</a> y el <a href="https://socasesores.com/aviso-de-privacidad" target="_blank">Aviso de privacidad</a>.</p>
                    <div class="alert alert-success d-none" role="alert">
                      <strong>Enviando</strong> información...
                    </div>
                    <input type="submit" value="Quiero participar" id="enviar_2">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if (isset($confirmacion))
      <div class="modal fade modal-confirmation" tabindex="-1" role="dialog"
      aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3>#ConSOCalSuperBowl</h3>
                <div class="folio-container mb-4 text-center">
                  <p>Folios de participación:</p>
                  @if (isset($folios))
                  <p class="mb-0 text-center d-inline"><b><i>{{$folios}}</i></b></p><br><br>
                   <a href="imprimir/{{$folios}}" class="imprimir">Descargar folios</a>
                  @endif
                  @if (isset($folio_1))
                  <p class="mb-0 text-center d-inline"><b><i>{{$folio_1}}</i></b></p><br><br>
                   <a href="imprimir/{{$folio_1}}" class="imprimir">Descargar folio</a>
                    
                  @endif
                </div>
                <img src="{{ url('img/Grupo_743.png') }}" alt="" class="img-fluid">
                <p class="participacion">Felicidades ya estas participando por un viaje al Super Bowl LVI.</p>
                <p>La ganadora o ganador será anunciado el día 15 de febrero de 2022 a las 18 hrs en la página de Facebook de SOC Asesores.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if (isset($error))
      <div class="modal fade modal-confirmation" tabindex="-1" role="dialog"
      aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-12">
                Error
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script src="{{ url('js/glide.min.js') }}"></script>
    <script>
      $(".link").click(function(event) {
        event.preventDefault();
        var data = $(this).attr('data');
        $('.prestamo').val(data);
      });
    </script>
  </body>
</html>