<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=">Pendaftaran Kursus Asas Mengurut 2017">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Pendaftaran Kursus Asas Mengurut 2017</title>

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
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="android-content mdl-layout__content" style="z-index:0; background-color: #fafafa;">
        <div class="android-more-section">
            <div class="android-section-title mdl-typography--display-1-color-contrast">Pendaftaran Kursus Asas Mengurut
                2017
            </div>
            <div class="android-card-container mdl-grid">
                <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">
                    <!-- Textfield with Floating Label -->

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{!! $error  !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/student-registration/process" style="padding:20px;">
                        {!! csrf_field() !!}
                        <div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                {!! Request::get('id') !!}
                            </div>
                        </div>
                        <div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" value="{!! old('fullname') !!}" name="fullname" pattern="^.{4,}$">
                                <label class="mdl-textfield__label" for="fullname">Nama penuh</label>
                                <span class="mdl-textfield__error">Sila masukkan nama anda yang sebenar.</span>
                            </div>
                        </div>
                        <div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" name="mobile_number" value="{!! old('mobile_number') !!}" type="text" pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$">
                                <label class="mdl-textfield__label" for="mobile_number">Nombor Telefon Bimbit</label>
                                <span class="mdl-textfield__error">Sila masukkan nombor telefon yang sah. Cth: +60143635185</span>
                            </div>
                        </div>
                        <div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" value="{!! old('no_ic')  !!}" pattern="^\d{6}-\d{2}-\d{4}$" name="no_ic">
                                <label class="mdl-textfield__label" for="no_ic">Nombor Kad Pengenalan (I/C)</label>
                                <span class="mdl-textfield__error">Sila masukkan nombor IC yang sah. Cth: 801103-01-5484</span>
                            </div>
                        </div>
                        <div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" value="{!! old('address') !!}" pattern="^.{15,}$" name="address">
                                <label class="mdl-textfield__label" for="address">Alamat rumah</label>
                                <span class="mdl-textfield__error">Sila masukkan alamat yang tepat untuk rujukan kami.</span>
                            </div>
                        </div>
                        <div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input readonly="true" class="mdl-textfield__input" value="{!! old('date_time_class') !!}" type="text" name="date_time_class" name="date_time_class" id="date_time">
                                <label class="mdl-textfield__label" id="label_date_time" for="date_time">Tarikh / Masa untuk Kelas</label>
                            </div>
                        </div>
                        <div>
                            <!-- Accent-colored raised button with ripple -->
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                Hantar
                            </button>
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/">Lihat pakej lain</a>
                        </div>
                        <input type="hidden" name="package_selected" value="{!! Request::get('id') !!}" />
                    </form>
                </div>
            </div>
        </div>
        @include('footer')
    </div>
</div>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.standalone.js"></script>
<script src="{!! asset('assets/js/material-datetime-picker.js') !!}" charset="utf-8"></script>
<script type="text/javascript">
    var output = {};
    var el = document.querySelector('#date_time');
    var label_date_time = document.querySelector('#label_date_time');
    var picker = new MaterialDatetimePicker({})
        .on('submit', function(d) {
            output.innerText = d;
            el.value = d.format("YYYY-MM-DD hh:mm");
            label_date_time.innerHTML = "";
        });

    el.addEventListener('click', function() {
        picker.open();
    }, false);

</script>
</body>
</html>