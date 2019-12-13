@php
$totalpengaduan = DB::table('pengaduan')->count();
$totaluser = DB::table('users')->count();
$totalustadz = DB::table('ustadz')->count();
$totalpengaduansudah = DB::table('pengaduan')->where('status', '=', 'Diterima')->count();
$totalpengaduantolak = DB::table('pengaduan')->where('status', '=', 'Ditolak')->count();
$totalpengaduandiproses = DB::table('pengaduan')->where('status', '=', 'Diproses')->count();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta content='#222' name='theme-color'/>
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/logofavicon.png')}}">
  <title>Aplikasi Penggaduan Santri</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Your custom styles (optional) -->
  <!-- MDBootstrap Datatables  -->
  <link href="{{asset('mdbpro/css/addons/datatables.min.css')}}" rel="stylesheet">
  <link href="{{asset('mdbpro/css/addons-pro/stepper.min.css')}}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('mdbpro/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('mdbpro/css/mdb.css')}}" rel="stylesheet">
  <link href="{{asset('mdbpro/css/style.css')}}" rel="stylesheet">



</head>


<body class="fixed-sn light-skin">
  @include('layouts.menu')
  @include('layouts.sidebar')
  <!--Main layout-->
  <main>
    <div class="container">

      @yield('content')

    </div>

  </main>
  <!--/Main layout-->
  @include('layouts.footer')

</body>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="{{asset('mdbpro/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdbpro/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdbpro/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdbpro/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdbpro/js/main.js')}}"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="{{asset('mdbpro/js/addons/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdbpro/js/addons-pro/stepper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('sweetalert2/package/dist/sweetalert2.all.min.js')}}"></script>
<script>
  new WOW().init();
  </script>
<script>
//bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
type: 'bar',
data: {
labels: ["Pengaduan", "Diterima","Diproses", "Ditolak"],
datasets: [{
label: 'Total',
data: [{{$totalpengaduan}},{{$totalpengaduansudah}}, {{$totalpengaduandiproses}}, {{$totalpengaduantolak}}],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)',
'rgba(255, 159, 64, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'rgba(255, 159, 64, 1)'
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>
<script>
(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>
<script>
  // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
<script>
  $(function () {
        $('.material-tooltip-main').tooltip({
          template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
        });
      })
</script>
<script>
  $('.datepicker').pickadate({
    format: 'yyyy/mm/dd',
    formatSubmit: 'yyyy/mm/dd'
//     hiddenPrefix: 'prefix__',
// hiddenSuffix: '__suffix'
  });
</script>
<script>
  $('.hapus').click(function(){
      var hapus_id = $(this).attr('hapus-id'); 
      var link = $(this).attr('link');
      Swal.fire({
  title: 'Yakin?',
  text: "Data Ingin dihapus!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus!'
}).then((result) => {
  if (result.value) { 
    window.location = "/"+ link +"/"+ hapus_id +"/delete"
  }
})
    });
</script>
<script>
  toastr.options = {
      // "positionClass" : "md-toast-top-center"
    }
  @if(Session::has('sukses'))
    toastr.success('Data berhasil dihapus');  
  @endif
</script>
<script>
  toastr.options = {
      // "positionClass" : "md-toast-top-center"
    }
  @if(Session::has('suksesedit'))
    toastr.success('Data berhasil diedit');  
  @endif
</script>
<script>
  toastr.options = {
      // "positionClass" : "md-toast-top-center"
    }
  @if(Session::has('suksestambah'))
    toastr.success('Data berhasil ditambah');  
  @endif
</script>
<script>
  toastr.options = {
      // "positionClass" : "md-toast-top-center"
    }
  @if(Session::has('suksesprofile'))
    toastr.success('User berhasil diedit');  
  @endif
</script>
<script>
  $(document).ready(function(){
		$('#datatable').DataTable();
    $('.dataTables_length').addClass('bs-select');
	});
</script>
<script>
 $(document).ready(function () {
$('#datatable1').DataTable({
"order": [[ 0, "desc" ]]
});
$('.dataTables_length').addClass('bs-select');
});
</script>
<script>
 $(document).ready(function () {
$('#datatable2').DataTable({
"order": [[ 0, "desc" ]]
});
$('.dataTables_length').addClass('bs-select');
});
</script>
<script>
$(document).ready(function () {
$('.stepper').mdbStepper();
})

function someFunction22() {
setTimeout(function () {
$('#horizontal-stepper-fix').nextStep();
}, 2000);
}
</script>
<script>
// SideNav Initialization
$(".button-collapse").sideNav();

new WOW().init();
</script>
@include('sweetalert::alert')

</html>