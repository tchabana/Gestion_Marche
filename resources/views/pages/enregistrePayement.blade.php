@extends('layouts.app', ['activePage' => 'payement', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <h1>Enregitrement d'un payement</h1>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.showNotification();

        });
    </script>
@endpush
