<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=">Pendaftaran Kursus Asas Mengurut 2017">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Pendaftaran Kursus Berjaya!</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="{!! asset('assets/css/material.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
        .c-btn {
            font-size: 14px;
            text-transform: capitalize;
            font-weight: 600;
            display: inline-block;
            line-height: 36px;
            cursor: pointer;
            text-align: center;
            text-transform: uppercase;
            min-width: 88px;
            height: 36px;
            margin: 10px 8px;
            padding: 0 8px;
            text-align: center;
            letter-spacing: .5px;
            border-radius: 2px;
            background: #F1F1F1;
            color: #393939;
            transition: background 200ms ease-in-out;
            box-shadow: 0 3.08696px 5.82609px 0 rgba(0, 0, 0, 0.16174), 0 3.65217px 12.91304px 0 rgba(0, 0, 0, 0.12435);
        }

        .c-btn--flat {
            background: transparent;
            margin: 10px 8px;
            min-width: 52px;
        }

        .c-btn:hover {
            background: rgba(153, 153, 153, 0.2);
            color: #393939;
        }

        .c-btn:active {
            box-shadow: 0 9.6087px 10.78261px 0 rgba(0, 0, 0, 0.17217), 0 13.56522px 30.3913px 0 rgba(0, 0, 0, 0.15043);
        }

        .c-btn--flat, .c-btn--flat:hover, .c-btn--flat:active {
            box-shadow: none;
        }
    </style>
    <link href="{!! asset('assets/css/material-datetime-picker.css') !!}" rel="stylesheet" />
</head>
<body style=" background-color: #fafafa;">

<!-- Wide card with share menu button -->
<style>
    .demo-card-wide.mdl-card {
        width: 90%;
        max-width:460px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom:50px;
    }
    .demo-card-wide > .mdl-card__title {
        color: #fff;
        height: 176px;
        background: url('https://getmdl.io/assets/demos/welcome_card.jpg') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
        color: #fff;
    }
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Terima Kasih!</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <h4>Berikut adalah maklumat permohonan anda:</h4>
        @if($obj_user_data)
        <p>
            <strong> NAMA: </strong> {!! $obj_user_data->user_fullname !!}<br/>
            <strong>NO K/P:</strong> {!! $obj_user_data->user_no_ic !!}<br/>
            <strong>No. Telefon:</strong> {!! $obj_user_data->user_mobileno !!}<br/>
            <strong>Pakej:</strong> {!! $obj_user_data->package_selected !!}<br/>
            <strong>Alamat:</strong><address>{!! $obj_user_data->user_address !!}</address>
        </p>

        <hr />
        ** Hubungi kami untuk proses pendaftaran seterusnya.
            @else
            Maaf! Id yang dimasukkan tidak sah!
        @endif

    </div>
    <div class="mdl-card__actions mdl-card--border">
        <a href="http://www.wasap.my/60143635185/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            014 363 5185
        </a>
        |
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/">Lihat pakej lain</a>
    </div>
</div>
@include('footer')
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</body>
</html>