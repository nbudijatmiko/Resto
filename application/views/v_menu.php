<div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Form Wizard</h3> 
                    </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Personal Info</a></li>
                                            <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Product Info</a></li>
                                            <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Payment</a></li>
                                            <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Finish</a></li>
                                        </ul>
                                        <div class="progress progress-sm m-t-sm">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                            </div>
                                        </div>
                                        <form id="wizardForm">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row" id="makanan">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                           bbbbbbbbbbbbbbb
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3">
                                                    <div class="row">
                                                        <div class="col-md-12" id="">
                                                            <table id="tabelORder" class="table " >
                                                              <thead >
                                                                <tr >
                                                                  
                                                                  <th align="center" width="240px">Menu</th>
                                                                  <th>QTY</th>
                                                                  <th>Harga</th>
                                                                  <th>SubTotal</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody id="order">
                                                                  
                                                              </tbody>
                                                              <thead >
                                                                <tr >
                                                                  <th></th>
                                                                  <th align="center" width="240px"></th>
                                                                  <th></th>
                                                                  <th>Total</th>
                                                                  <th id="TotalPay"></th>
                                                                </tr>
                                                              </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab4">
                                                    <h3 style="margin-top:25px;">Thank You!</h3>
                                                    <div class="alert alert-success m-t-sm m-b-lg" role="alert">
                                                        Congratulations! You got the last step.
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p>Made with <i class="fa fa-heart"></i> by skcats</p>
                </div>
                </div><!-- /Page Inner -->
                <!-- Modal QTY -->
    
    <div class="modal fade" id="ModalPesanan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" style="vertical-align: center;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="formPesanan" class="form-horizontal">
                            <div class="form-group">
                                
                                <input type="hidden" id="id_makanan" >
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Nama Makanan</label>
                                <input type="text" id="namaMakanan" name="nama_makanan" value="" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Jumlah</label>
                                <input type="number" min="0" max="25" name="QTY" class="price" id="QTY" value="0">
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" >@ Harga</label>
                                <input type="text" id="hargaP" class="price" value="" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Sub Total</label>
                                <input type="text" id="sub" name="sub" class="" value="" readonly>
                            </div>
                        </form>                     
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button  class="btn btn-danger" id="btn_addPesanan">OK</button>
                    </div>
                    
                </div>
            </div>
    </div>
<script >
    $(":input").bind('keyup mouseup', function () {
    var y = document.getElementById("QTY").value;          
            var x = document.getElementById("hargaP").value;
            var result = x*y;
            document.getElementById('sub').value = result;
    });
    $('#btn_addPesanan').click(function(){
        alert($('#formPesanan').serialize());
        // var z = document.getElementById("id_makanan").value;
        // var a = document.getElementById("namaMakanan").value;
        // var b = document.getElementById("QTY").value;
        // var c = document.getElementById("hargaP").value;
        // var d = document.getElementById("sub").value;
        var x=$('#formPesanan').serializeArray();
        $.each(x,function(i,data){
            $('#order').append('<td>'+data.value+'</td>');
        })
        

    })
    
   
</script>