<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reçu de location</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/logoIfnti.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/logoIfnti.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Best Programer</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('light-bootstrap/css/recuecontrat.css') }}" rel="stylesheet" />
</head>

<div class="government-header">
    <div class="left-block">
        <h3>MINISTÈRE DE L'ADMINISTRATION TERRITORIALE</h3>
        <h3>DE LA DÉCENTRALISATION ET DU DÉVELOPPEMENT</h3>
        <h3>DES TERRITOIRES</h3>
        <p>Travail-Liberté-Patrie</p>
    </div>
    <div class="right-block">
        <h3>RÉPUBLIQUE TOGOLAISE</h3>
        <h3>REGION CENTRALE</h3>
        <h3>COMMUNE DE TCHAOUDJO 1</h3>
        <h3>N°/CT1</h3>
    </div>
</div>

<div class="header">
    <h1>Reçu de location</h1>
    <p>Marché de Tchaoudjo1</p>
</div>

<div class="receipt">
    <h2>Détails de la location</h2>

    <div class="receipt-info">
        <span>Date :</span>
        <span>{{ $receipt['date'] }}</span>
    </div>

    <div class="receipt-info">
        <span>Nom du vendeur :</span>
        <span>{{ $receipt['commercant']->nom }}</span>
    </div>

    <div class="receipt-info">
        <span>Place attribuée :</span>
        <span>Place N°{{ $receipt['place']->id }}</span>
    </div>

    <div class="receipt-info">
        <span>Type de Logie :</span>
        <span>Logie</span>
    </div>

    <div class="receipt-items">
        <div class="item">
            <span>Montant de la location :</span>
            <span class="price">{{ $receipt['prixad'] }}</span>
        </div>

        <div class="item">
            <span>Caution :</span>
            <span class="price">Caution</span>
        </div>
    </div>

    <div class="total">
        <span>Total :</span>
        <span class="price">{{ $receipt['prixad'] }}</span>
    </div>
</div>
{{-- <form action="{{route('imprimer')}}" method="get">
    <input type="submit" value="Imprimer le reçu">
</form> --}}
</body>
<!--   Core JS Files   -->
<script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
</html>
