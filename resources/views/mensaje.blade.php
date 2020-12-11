@if(session()->has('mensaje'))
    <div class="alert {{ session('alert-type', 'alert-success') }} alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <a class="alert-link" href="#">Notificación: </a> {{ session('mensaje') }}
    </div>
@endif