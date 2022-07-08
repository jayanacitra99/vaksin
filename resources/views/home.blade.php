<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vaksin Rekomendasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('')}}adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('')}}adminlte/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('')}}adminlte/plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('')}}adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('')}}adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('')}}adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
    
<div class="wrapper">
    <table class="borderless">
        <tr>
            <td rowspan="2" style="width: 40%; height: 100%">
                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Vaksin Rekomendasi</h3>
                      </div>
                    </div>
                    <div class="card-body">
                      <?php
                        $astraP = 0; $astraN = 0;
                        $sinovacP = 0; $sinovacN = 0;
                        $modernaP = 0; $modernaN = 0;
                        $pfizerP = 0; $pfizerN = 0;
                      ?>
                      @foreach ($astra as $item)
                          @if ($item->labelNB == 1)
                            <?php $astraP = $astraP + 1;?>
                          @elseif($item->labelNB == 0)
                            <?php $astraN = $astraN + 1;?>
                          @endif
                      @endforeach
                      @foreach ($sinovac as $item)
                          @if ($item->labelNB == 1)
                            <?php $sinovacP = $sinovacP + 1;?>
                          @elseif($item->labelNB == 0)
                            <?php $sinovacN = $sinovacN + 1;?>
                          @endif
                      @endforeach
                      @foreach ($moderna as $item)
                          @if ($item->labelNB == 1)
                            <?php $modernaP = $modernaP + 1;?>
                          @elseif($item->labelNB == 0)
                            <?php $modernaN = $modernaN + 1;?>
                          @endif
                      @endforeach
                      @foreach ($pfizer as $item)
                          @if ($item->labelNB == 1)
                            <?php $pfizerP = $pfizerP + 1;?>
                          @elseif($item->labelNB == 0)
                            <?php $pfizerN = $pfizerN + 1;?>
                          @endif
                      @endforeach
                      <?php
                        $sinovacR = $sinovacP;
                        $astraR = $astraP;
                        $modernaR = $modernaP;
                        $pfizerR = $pfizerP;
                      ?>
                      <canvas id="rekomendasi" sinovacR="{{$sinovacR}}" astraR="{{$astraR}}" modernaR="{{$modernaR}}" pfizerR="{{$pfizerR}}" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 100%;"></canvas>
                    </div>
                    
                    <!-- /.card-body -->
                </div>
            </td>
            <td>
                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Vaksin Astra Zeneca</h3>
                      </div>
                    </div>
                    <div class="card-body">
                      <canvas id="astra" astraP="{{$astraP}}" astraN="{{$astraN}}" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 100%;"></canvas>
                      <button class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-astra"> UPLOAD DATA </button>
                      <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#detail-astra"> SHOW DETAIL </button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </td>
            <td>
                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Vaksin Sinovac</h3>
                      </div>
                    </div>
                    <div class="card-body">
                      <canvas id="sinovac" sinovacP="{{$sinovacP}}" sinovacN="{{$sinovacN}}" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 100%;"></canvas>
                      <button class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-sinovac"> UPLOAD DATA </button>
                      <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#detail-sinovac"> SHOW DETAIL </button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Vaksin Moderna</h3>
                      </div>
                    </div>
                    <div class="card-body">
                      <canvas id="moderna" modernaP="{{$modernaP}}" modernaN="{{$modernaN}}" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 100%;"></canvas>
                      <button class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-moderna"> UPLOAD DATA </button>
                      <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#detail-moderna"> SHOW DETAIL </button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </td>
            <td>
                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Vaksin Pfizer</h3>
                      </div>
                    </div>
                    <div class="card-body">
                      <canvas id="pfizer" pfizerP="{{$pfizerP}}" pfizerN="{{$pfizerN}}" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 100%;"></canvas>
                      <button class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-pfizer"> UPLOAD DATA </button>
                      <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#detail-pfizer"> SHOW DETAIL </button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </td>
        </tr>
    </table>
</div>
<!-- ./wrapper -->
<div class="modal fade" id="modal-sinovac">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('importSinovac')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="file" name="file" id="file" accept=".csv">
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="modal-astra">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('importAstra')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="file" name="file" id="file" accept=".csv">
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="modal-moderna">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('importModerna')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="file" name="file" id="file" accept=".csv">
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="modal-pfizer">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('importPfizer')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="file" name="file" id="file" accept=".csv">
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="detail-sinovac">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Vaksin Sinovac</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tablesinovac" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Label</th>
            <th>Label NB</th>
            <th>Text</th>
            <th>Clean Message</th>
            <th>Message Lower</th>
            <th>Token</th>
            <th>Spell</th>
            <th>Filter</th>
            <th>Message Stemmed</th>
            <th>Message String</th>
            <th>Message n Gram</th>
          </tr>
          </thead>
          <tbody>
            <?php $no = 1?>
            @foreach ($sinovac as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->label}}</td>
                <td>
                  @if ($item->labelNB == 1)
                      Positive
                  @else
                      Negative
                  @endif
                </td>
                <td>{{$item->text}}</td>
                <td>{{$item->clean_msg}}</td>
                <td>{{$item->msg_lower}}</td>
                <td>{{$item->token}}</td>
                <td>{{$item->spell}}</td>
                <td>{{$item->filter}}</td>
                <td>{{$item->msg_stemmed}}</td>
                <td>{{$item->msg_string}}</td>
                <td>{{$item->msg_n_gram}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="detail-astra">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Vaksin Astra</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tableastra" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Label</th>
            <th>Label NB</th>
            <th>Text</th>
            <th>Clean Message</th>
            <th>Message Lower</th>
            <th>Token</th>
            <th>Spell</th>
            <th>Filter</th>
            <th>Message Stemmed</th>
            <th>Message String</th>
            <th>Message n Gram</th>
          </tr>
          </thead>
          <tbody>
            <?php $no = 1?>
            @foreach ($astra as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->label}}</td>
                <td>
                  @if ($item->labelNB == 1)
                      Positive
                  @else
                      Negative
                  @endif
                </td>
                <td>{{$item->text}}</td>
                <td>{{$item->clean_msg}}</td>
                <td>{{$item->msg_lower}}</td>
                <td>{{$item->token}}</td>
                <td>{{$item->spell}}</td>
                <td>{{$item->filter}}</td>
                <td>{{$item->msg_stemmed}}</td>
                <td>{{$item->msg_string}}</td>
                <td>{{$item->msg_n_gram}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="detail-sinovac">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Vaksin Moderna</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tablemoderna" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Label</th>
            <th>Label NB</th>
            <th>Text</th>
            <th>Clean Message</th>
            <th>Message Lower</th>
            <th>Token</th>
            <th>Spell</th>
            <th>Filter</th>
            <th>Message Stemmed</th>
            <th>Message String</th>
            <th>Message n Gram</th>
          </tr>
          </thead>
          <tbody>
            <?php $no = 1?>
            @foreach ($moderna as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->label}}</td>
                <td>
                  @if ($item->labelNB == 1)
                      Positive
                  @else
                      Negative
                  @endif
                </td>
                <td>{{$item->text}}</td>
                <td>{{$item->clean_msg}}</td>
                <td>{{$item->msg_lower}}</td>
                <td>{{$item->token}}</td>
                <td>{{$item->spell}}</td>
                <td>{{$item->filter}}</td>
                <td>{{$item->msg_stemmed}}</td>
                <td>{{$item->msg_string}}</td>
                <td>{{$item->msg_n_gram}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="detail-pfizer">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Vaksin Pfizer</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tablepfizer" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Label</th>
            <th>Label NB</th>
            <th>Text</th>
            <th>Clean Message</th>
            <th>Message Lower</th>
            <th>Token</th>
            <th>Spell</th>
            <th>Filter</th>
            <th>Message Stemmed</th>
            <th>Message String</th>
            <th>Message n Gram</th>
          </tr>
          <?php $no = 1?>
          </thead>
          <tbody>
            @foreach ($pfizer as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->label}}</td>
                <td>
                  @if ($item->labelNB == 1)
                      Positive
                  @else
                      Negative
                  @endif
                </td>
                <td>{{$item->text}}</td>
                <td>{{$item->clean_msg}}</td>
                <td>{{$item->msg_lower}}</td>
                <td>{{$item->token}}</td>
                <td>{{$item->spell}}</td>
                <td>{{$item->filter}}</td>
                <td>{{$item->msg_stemmed}}</td>
                <td>{{$item->msg_string}}</td>
                <td>{{$item->msg_n_gram}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- jQuery -->
<script src="{{asset('')}}adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('')}}adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('')}}adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('')}}adminlte/dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="{{asset('')}}adminlte/plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('')}}adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('')}}adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#tablesinovac").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "pageLength": 5,
      "columnDefs": [
            {"targets": 4,"visible": false,},
            {"targets": 5,"visible": false,},
            {"targets": 6,"visible": false,},
            {"targets": 7,"visible": false,},
            {"targets": 8,"visible": false,},
        ],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tablesinovac_wrapper .col-md-6:eq(0)');
    $("#tableastra").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "pageLength": 5,
      "columnDefs": [
            {"targets": 4,"visible": false,},
            {"targets": 5,"visible": false,},
            {"targets": 6,"visible": false,},
            {"targets": 7,"visible": false,},
            {"targets": 8,"visible": false,},
        ],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tableastra_wrapper .col-md-6:eq(0)');
    $("#tablemoderna").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "pageLength": 5,
      "columnDefs": [
            {"targets": 4,"visible": false,},
            {"targets": 5,"visible": false,},
            {"targets": 6,"visible": false,},
            {"targets": 7,"visible": false,},
            {"targets": 8,"visible": false,},
        ],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tablemoderna_wrapper .col-md-6:eq(0)');
    $("#tablepfizer").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "pageLength": 5,
      "columnDefs": [
            {"targets": 4,"visible": false,},
            {"targets": 5,"visible": false,},
            {"targets": 6,"visible": false,},
            {"targets": 7,"visible": false,},
            {"targets": 8,"visible": false,},
        ],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tablepfizer_wrapper .col-md-6:eq(0)');
  });
  @if(Session::has('message'))
    var type = "{{ Session::get('alert', 'info') }}";
    switch (type) {
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
  $(function () {
    var donutChartCanvas = $('#rekomendasi').get(0).getContext('2d');
    var RekomAstra = $('#rekomendasi').attr('astraR');
    var RekomSinovac = $('#rekomendasi').attr('sinovacR');
    var RekomModerna = $('#rekomendasi').attr('modernaR');
    var RekomPfizer = $('#rekomendasi').attr('pfizerR');
    var donutData        = {
      labels: [
          'Astra',
          'Sinovac',
          'Moderna',
          'Pfizer'
      ],
      datasets: [
        {
          data: [RekomAstra,RekomSinovac,RekomModerna,RekomPfizer],
          backgroundColor : ['#f56954', '#3c8dbc', '#f39c12', '#00c0ef'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  $(function () {
    var donutChartCanvas = $('#astra').get(0).getContext('2d');
    var AstraNeg = $('#astra').attr('AstraN');
    var AstraPos = $('#astra').attr('AstraP');
    var donutData        = {
      labels: [
          'NEGATIVE',
          'POSITIVE',
      ],
      datasets: [
        {
          data: [AstraNeg,AstraPos],
          backgroundColor : ['#f56954', '#3c8dbc'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  $(function () {
    var donutChartCanvas = $('#sinovac').get(0).getContext('2d');
    var SinovacNeg = $('#sinovac').attr('sinovacN');
    var SinovacPos = $('#sinovac').attr('sinovacP');
    var donutData        = {
      labels: [
          'NEGATIVE',
          'POSITIVE',
      ],
      datasets: [
        {
          data: [SinovacNeg,SinovacPos],
          backgroundColor : ['#f56954', '#3c8dbc'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  $(function () {
    var donutChartCanvas = $('#moderna').get(0).getContext('2d');
    var ModernaNeg = $('#moderna').attr('ModernaN');
    var ModernaPos = $('#moderna').attr('ModernaP');
    var donutData        = {
      labels: [
          'NEGATIVE',
          'POSITIVE',
      ],
      datasets: [
        {
          data: [ModernaNeg,ModernaPos],
          backgroundColor : ['#f56954', '#3c8dbc'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
  $(function () {
    var donutChartCanvas = $('#pfizer').get(0).getContext('2d');
    var PfizerNeg = $('#pfizer').attr('PfizerN');
    var PfizerPos = $('#pfizer').attr('PfizerP');
    var donutData        = {
      labels: [
          'NEGATIVE',
          'POSITIVE',
      ],
      datasets: [
        {
          data: [PfizerNeg,PfizerPos],
          backgroundColor : ['#f56954', '#3c8dbc'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })
</script>

</body>
</html>
