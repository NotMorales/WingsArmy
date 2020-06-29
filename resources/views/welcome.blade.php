@extends('layouts.app')

@section('content')

<main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Control de meseros y mesas</h1>
        <p class="lead text-muted">Este software tiene el propósito funcional, y sólo se usará dentro de
            las instalaciones del restaurante “Wing’s Army”, de servir como un sistema gestor del personal
            de dicho restaurante, esto para aumentar la sinergia del equipo de trabajo de la franquicia y
            evitar problemas con la toma de pedidos y por ende agilizar la respuesta de los pedidos hacia
            los clientes, obteniendo así, mejores resultados en la satisfacción del cliente.</p>
        <p>
          <a href="https://github.com/NotMorales/WingsArmy" class="btn btn-primary my-2" target="_blank">Control de versiones</a>
          <a href="https://docs.google.com/document/d/1OmhcxvAzrM22snmqN3l4NUyttVXV7CAu/edit" class="btn btn-primary my-2" target="_blank">Documento de despliegue</a>
        </p>
      </div>
    </section>

    <div class="row">
        <div class="col-lg-4" style="text-align: center">
            <img class="rounded-circle" src="{{asset('aguirre.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Aguirre Fuentes Luis</h2>
            <p>
                <strong>Correo: </strong>luizeduardo.fuentesaguirre@gmail.com<br>
                <strong>Matricula: </strong>zS17016273<br>
                <strong>Telefono: </strong>921-145-3967
            </p>
            <p><a target="_blank" class="btn btn-primary" href="https://www.facebook.com/profile.php?id=100019031589271" role="button"><i data-feather="facebook"></i>Seguir</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" style="text-align: center">
          <img class="rounded-circle" src="{{asset('morales2.jpg')}}" alt="Generic placeholder image" width="140" height="140">
          <h2>Morales Velazquez Luis</h2>
          <p>
            <strong>Correo: </strong>morales.lamv@gmail.com<br>
            <strong>Matricula: </strong>zS17016232<br>
            <strong>Telefono: </strong>921-147-9791
        </p>
          <p><a target="_blank" class="btn btn-primary" href="https://www.facebook.com/luis.morales.velazquez/" role="button"><i data-feather="facebook"></i>Seguir</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" style="text-align: center">
          <img class="rounded-circle" src="{{asset('valerio.jpg')}}" alt="Generic placeholder image" width="140" height="140">
          <h2>Valerio Vargas Carlos</h2>
          <p>
            <strong>Correo: </strong>cvalerio99@hotmail.com<br>
            <strong>Matricula: </strong>zS17016281<br>
            <strong>Telefono: </strong>921-250-5799
        </p>
          <p><a target="_blank" class="btn btn-primary" href="https://www.facebook.com/carlos.daniel.3760" role="button"><i data-feather="facebook"></i>Seguir</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


  </main>
  <hr class="featurette-divider">

  <footer class="container">
    <p>&copy; 2020 Universidad Veracruzana. &middot; Desarrollo de aplicaciones &middot; Equipo: Wing´s Army</p>
  </footer>
</main>

@endsection
