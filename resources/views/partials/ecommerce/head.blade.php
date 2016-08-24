<link href='//fonts.googleapis.com/css?family=Noticia+Text:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=BenchNine:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap/bootstrap.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('assets/css/ecommerce/menu.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('assets/css/ecommerce/stylesheet.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{url('assets/css/ecommerce/jquery.bxslider.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{url('assets/css/ecommerce/carousel.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{url('assets/css/ecommerce/search_suggestion.css')}}" media="screen" />
<script type="text/javascript" src="{{url('assets/js/jquery-1.7.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.validate.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{url('assets/css/ecommerce/jquery-ui-1.8.16.custom.css')}}" />
<script type="text/javascript" src="{{url('assets/js/scroll-to.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/common.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery-ui-1.8.16.custom.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.cycle.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.jcarousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/search_suggestion.js')}}"></script>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->


<script type="text/javascript" src="{{url('assets/js/jquery-sliding-menu.js')}}"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
      
       $('#dollar span').hide();
    $('#dollar span.dolar').show();
        
    var indicador_activo = 'dolar';
    
    setInterval(function() {
        
        $('#dollar span').hide();
        
        if(indicador_activo == 'dolar') { 
            $('#dollar span.uf').show();
            new_activo = 'uf';            
        }

        if(indicador_activo == 'uf') { 
            $('#dollar span.euro').show();
            new_activo = 'euro';            
        }

        if(indicador_activo == 'euro') { 
            $('#dollar span.dolar').show();
            new_activo = 'dolar';            
        }
        
        indicador_activo = new_activo;            
        
    }, 10000);
    
    $('#menu-md').slidingMenu();

  });
</script>