<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.admin.head')
    @yield('title')
    <style>
        .switch input[type="checkbox"],
        .switch input[type="radio"] {
          box-sizing: border-box;
          /* 1 */
          padding: 0;
          /* 2 */
        }
        .switch [type="checkbox"]:not(:checked),
        .switch [type="checkbox"]:checked {
          position: absolute;
          left: -9999px;
          visibility: hidden;
        }

        [type="checkbox"] {
          /* checkbox aspect */
        }

        .switch,
        .switch * {
          -webkit-user-select: none;
          -moz-user-select: none;
          -khtml-user-select: none;
          -ms-user-select: none;
        }

        .switch label {
          cursor: pointer;
        }

        .switch label input[type=checkbox] {
          opacity: 0;
          width: 0;
          height: 0;
        }

        .switch label input[type=checkbox]:checked + .lever {
          background-color: #E14A29;
        }

        .switch label input[type=checkbox]:checked + .lever:after {
          background-color: #E64A19;
        }

        .switch label .lever {
          content: "";
          display: inline-block;
          position: relative;
          width: 40px;
          height: 15px;
          background-color: #818181;
          border-radius: 15px;
          margin-right: 10px;
          transition: background 0.3s ease;
          vertical-align: middle;
          margin: 0 16px;
        }

        .switch label .lever:after {
          content: "";
          position: absolute;
          display: inline-block;
          width: 21px;
          height: 21px;
          background-color: #F1F1F1;
          border-radius: 21px;
          box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
          left: -5px;
          top: -3px;
          transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
        }

        .switch input[type=checkbox]:checked:not(:disabled) ~ .lever:active:after {
          box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1);
        }

        .switch input[type=checkbox]:not(:disabled) ~ .lever:active:after {
          box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08);
        }

        .switch label input[type=checkbox]:checked + .lever:after {
          left: 24px;
        }

        .switch input[type=checkbox][disabled] + .lever {
          cursor: default;
        }

        .switch label input[type=checkbox][disabled] + .lever:after,
        .switch label input[type=checkbox][disabled]:checked + .lever:after {
          background-color: #BDBDBD;
        }

    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('partials.admin.navbar')
        @include('partials.admin.nav')
        @if (session('status') === 1)
            <div class="alert alert-info" id="success-alert" role="alert" style="position:fixed;z-index: 100;right: 20px;">{{ session('message') }}</div>
        @endif
          @if(session('status') === 0)
            <div class="alert alert-danger" id="success-alert" role="alert" style="position:fixed;z-index: 100;right: 20px;">{{ session('message') }}</div>
        @endif
        @yield('content')
        @include('partials.admin.footer')
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="{{ url('assets/js/jquery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('assets/js/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ url('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('assets/js/admin/app.min.js')}}"></script>
    <script type="text/javascript">
      $("#success-alert").fadeTo(2000,500).slideUp(800, function() {
        $("#success-alert").alert('close');
      })
    </script>
    <script>
        jQuery(document).ready(function($){

            $('#category_id').change(function(){
                    $.get("/admin/producto/grouplist/" + $(this).val(), 
                    function(data) {

                        var item = $('#select_groups');
                        var item2 = $('#select_subgroups');
                        item.empty();
                        item2.empty();
                        item2.append("<option value=''>Selecione un sub-grupo</option>");
                        var groups = data;
                        for (var i = 0; i < groups.length; i++) {
                          if (i === 0) {
                            item.append("<option value=''>Selecione un grupo</option>");
                          }
                            item.append("<option value='"+ data[i].id +"'>" + data[i].name + "</option>");
                        }

                    });
            });

            $('#select_groups').change(function(){
                    $.get("/admin/producto/subgrouplist/" + $(this).val(), 
                    function(data) {

                        var item = $('#select_subgroups');
                        item.empty();
                        var subgroups = data;
                        for (var i = 0; i < subgroups.length; i++) {
                            item.append("<option value='"+ data[i].id +"'>" + data[i].name + "</option>");
                        }
                    });
            });

        });

    </script>
    @yield('footer')
</body>
</html>
