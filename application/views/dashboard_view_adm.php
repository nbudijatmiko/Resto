<!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                    <a class="logo-box" href="index.html"><span>ecaps</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                    <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                        <ul class="dropdown-menu dropdown-lg dropdown-content">
                                            <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                            <li class="slimscroll dropdown-notifications">
                                                <ul class="list-unstyled dropdown-oc">
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                            <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                                <small class="notification-date">20:00</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                            <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                                <small class="notification-date">06:07</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                            <span class="notification-info">4 new special offers from the apps you follow!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                            <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://via.placeholder.com/36x36" alt="" class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Calendar</a></li>
                                            <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Account Settings</a></li>
                                            <li><a href="#">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->
                <!-- Page Inner -->
                
                
            

                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Dashboard</h3>
                    </div>

                    <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                            <div class="panel panel-white">
                                <!-- panel start -->
                                <div class="panel-body">

                                    <div >
                                        <h2>Product List</h2>
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button><br>
                                            <br>
                                        <table class="table table-striped" id="tabelMakanan">
                                          <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama Makanan</th>
                                              <th>Kategori</th>
                                              <th>Harga</th>
                                              <th>Gambar</th>
                                              <th>Status</th>
                                              <th>Detail</th>
                                              <th>Detail</th>
                                              <th>Detail</th>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                      </div>
                                </div>
                                <!-- panel END -->

                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->    
                </div><!-- /Page Inner -->

                <!-- MODAL SECTION -->

    </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
       <script src="https://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4="
  crossorigin="anonymous"></script>
        <!-- <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/uniform/js/jquery.uniform.standalone.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/switchery/switchery.min.js');?>"></script>
        <script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
        
        <script src="<?php echo base_url('assets/js/pages/table-data.js');?>"></script> -->
        

    <!-- <script>
        $(document).ready(function(){
            $.ajax({
      url: "<?php echo ("getMakanan")?>",
      type: "GET",
      dataType: "JSON",
      success: function(response){
        $('#menu_makanan').html();
        for (var i = 0; i <response.length; i++) {
          $('#menu_makanan').append(
            '<tr>'+
              '<td>'+(i+1)+'</td>'+
              '<td>'+response[i].id_makanan+'</td>'+
              '<td>'+response[i].nama_makanan+'</td>'+
              '<td>'+response[i].kategori+'</td>'+
              '<td>'+response[i].harga+'</td>'+
              '<td>'+response[i].detail+'</td>'+
              '<td>'+response[i].status+'</td>'+
              '<td>'+response[i].gambar+'</td>'+
            '</tr>'
            );
        }        
      }
    })
        })
    </script> -->
         <script>

    $(document).ready(function(){  
    

      //   $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      // {
      //     return {
      //         "iStart": oSettings._iDisplayStart,
      //         "iEnd": oSettings.fnDisplayEnd(),
      //         "iLength": oSettings._iDisplayLength,
      //         "iTotal": oSettings.fnRecordsTotal(),
      //         "iFilteredTotal": oSettings.fnRecordsDisplay(),
      //         "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
      //         "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
      //     }
      // }

      // var table = $("#tabelMakanan").dataTable({
      //     initComplete: function() {
      //         var api = this.api();
      //         $('#tabelMakanan_filter input')
      //             .off('.DT')
      //             .on('input.DT', function() {
      //                 api.search(this.value).draw();
      //         });
      //     },
      //         oLanguage: {
      //         sProcessing: "loading..."
      //     },
      //         processing: true,
      //         serverSide: true,
      //         ajax: {"url": "<?php echo base_url().'index.php/con_makanan/get_guest_json'?>", "type": "POST"},
      //               columns: [
      //                                           {"data": "id_makanan"},
      //                                           {"data": "nama_makanan"},
      //                                           {"data": "kategori"},
      //                                           //render harga dengan format angka
      //                   {"data": "harga", render: $.fn.dataTable.render.number(',', '.', '')},
      //                   {"data": "gambar"},
      //                   {"data": "status"},
      //                   {"data": "detail"},
      //                   {"data": "action"}
      //             ],
      //           order: [[1, 'asc']],
      //     rowCallback: function(row, data, iDisplayIndex) {
      //         var info = this.fnPagingInfo();
      //         var page = info.iPage;
      //         var length = info.iLength;
      //         $('td:eq(0)', row).html();
      //     }

      // })
    });
      
    </script>
    <script>
            // end setup datatables
      // // get Edit Records
      //       $('#tabelMakanan').on('click','.edit_record',function(){
      //       var kode=$(this).data('kode');
      //                   var nama=$(this).data('nama');
      //                   var harga=$(this).data('harga');
      //                   var kategori=$(this).data('kategori');
      //       $('#ModalUpdate').modal('show');
      //       $('[name="kode_barang"]').val(kode);
      //                   $('[name="nama_barang"]').val(nama);
      //                   $('[name="harga"]').val(harga);
      //                   $('[name="kategori"]').val(kategori);
      // });
      //       // End Edit Records
      //       // get Hapus Records
      //       $('#tabelMakanan').on('click','.hapus_record',function(){
      //       var kode=$(this).data('kode');
      //       $('#ModalHapus').modal('show');
      //       $('[name="kode_barang"]').val(kode);
      // });
      //       // End Hapus Records  

        // $.ajax({
        //   url: " <?php echo base_url('index.php/tampilMakanan') ?>",
        //   type: "GET",
        //   dataType: "JSON",
        //   // success: function(data){
        //   //   $('#tabelMakanan').html();
        //   //   for (var i =0; i < data.length; i++) {
                
        //   //       $('#tabelMakanan').append(
        //   //       '<tr>'+
        //   //         '<td>'+(i+1)+'</td>'+
        //   //         '<td>'+data[i].nama_makanan+'</td>'+
        //   //         '<td>'+data[i].kategori+'</td>'+
        //   //         '<td>'+data[i].harga+'</td>'+
        //   //         '<td>'+data[i].gambar+'</td>'+
        //   //         '<td>'+data[i].status+'</td>'+
        //   //         '<td>'+data[i].detail+'</td>'+            
        //   //         '</tr>'
        //   //       )           
        //   //   }            
        //   // }
        // })

    
  
</script>

<!-- <script>
    $('#bug').hide()    
</script> -->


        
    </body>
</html>