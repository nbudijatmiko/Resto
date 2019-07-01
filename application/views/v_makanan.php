                <!-- Page Inner -->
                
                
            

                <div class="page-inner">

                    <div class="page-title">
                        <h3 class="breadcrumb-header">Dashboard </h3>

                    </div>


                    <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                            <div class="panel panel-white">
                                <!-- panel start -->
                                <div class="panel-body">
                                    <input type="text" name="" id="mbuh">

                                    <div class="table-responsive">
                                        <h2>MENU LIST</h2>
                                            <button  id="addData" class="btn btn-success" data-toggle="modal" data-target="#ModalAdd"><span class="fa fa-plus"></span> Add New</button><br>

                                            
                                            <br>
                                        <table id="tabelMakanan" class="table " >
                                          <thead >
                                            <tr >
                                              <th>No</th>
                                              <th align="center" width="240px">Nama Makanan</th>
                                              <th>Kategori</th>
                                              <th>Harga</th>
                                              <th>Gambar</th>
                                              <th>Status</th>
                                              <th>Detail</th>
                                              <th colspan="2">Aksi</th>
                                            </tr>
                                          </thead>
                                          <tbody id="menu_makanan">
                                              
                                          </tbody>
                                        </table>
                                      </div>
                                      <p id="coba"></p>
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
        </div><!-- /Page Content -->
        </div><!-- /Page Container -->


        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                           
                            <input type="hidden" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
                                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus" onclick="">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

                <!-- modal Tambah -->
        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Menu Makanan</h3>
            </div>
            
                <div class="modal-body">
                <form class="form-horizontal" id="formMakanan">
                            <input type="hidden" name="idMakanan" id="idMakanan" class="form-control" style="width:70px;" required readonly>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Makanan</label>
                        <div class="col-xs-9">
                            <input name="namaMakanan" id="namaMakanan" class="form-control" type="text" placeholder="Nama Makanan" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga" id="harga" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Detail</label>
                        <div class="col-xs-9">
                            <input name="detail" id="detail" class="form-control" type="text" placeholder="" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Kategori</label>
                        <div class="col-xs-5">
                            <select style="margin-bottom:15px; width: 200px;" class="form-control" id="kategori" name="kategori"> </select>
                        </div>
                        <input type="text" id="gambar" name="gambar">
                    </div>
                </form>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4 class="panel-tittle" style="text-align:center;"> Pilih gambar</h4></div>
                        <div class="panel-body" style="padding:10px; margin-top:-11px;">
                          <input type="file" class="form-control" id="upload_image">
                        </div>
                        <div class="panel-footer" id="sec-gambar" style="display:none;">
                          <center><img id="gambarProduk" src="" class="img-thumbnail" style="background-color: transparent; width: 38%">
                          </center>
                          
                        </div>
                    </div>

                    <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                    </div>
            
            </div>
            </div>
        </div>
        </div>
        <!-- END OF MODAL TAMBAH -->

        <!-- MODAL EDIT -->

        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">UPDATE DATA</h3>

            </div>
            
                <div class="modal-body">
                <form class="form-horizontal" id="formEditMakanan">
                            <input type="hidden" name="idMakananE" id="idMakananE" class="form-control" style="width:70px;" required readonly>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="namaMakananE" >Nama Makanan</label>
                        <div class="col-xs-9">
                            <input name="namaMakananE" id="namaMakananE" class="form-control" type="text" placeholder="Nama Makanan" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="hargaE" >Harga</label>
                        <div class="col-xs-9">
                            <input name="hargaE" id="hargaE" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="detailE" class="control-label col-xs-3" >Detail</label>
                        <div class="col-xs-9">
                            <input name="detailE" id="detailE" class="form-control" type="text" placeholder="" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="kategoriE">Kategori</label>
                        <div class="col-xs-5">
                            <select style="margin-bottom:15px; width: 200px;" class="form-control" id="kategoriE" name="kategoriE"> </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="statusE" class="col-xs-3 control-label">Status</label>
                        <div class="col-xs-3">
                            <select style="margin-bottom:15px; width: 200px;" class="form-control" id="statusE" name="statusE"> 
                            <option value="1">Ready</option>
                            <option value="2">Sold Out</option>
                            </select>
                        </div>
                        
                    </div>
                    </form>
                    </form>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4 class="panel-tittle" style="text-align:center;"> Pilih gambar</h4></div>
                        <div class="panel-body" style="padding:10px; margin-top:-11px;">
                          <input type="file" class="form-control" id="upload_image">
                        </div>
                        <div class="panel-footer" id="sec-gambar" style="display:none;">
                          <center><img id="gambarProduk" src="" class="img-thumbnail" style="background-color: transparent; width: 38%">
                          </center>
                          
                        </div>
                    </div>

                    <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-info" id="btn_edit">Update</button>
                    </div>
            
            </div>
            </div>
        </div>
        </div>
        <!-- END OF MODAL EDIT -->


                <!-- MODAL UPLOAD GAMBAR -->

        <div id="modalUpload" data-keyboard="false" class="modal fade" role="dialog" tabindex="-1">
          <div class="modal-dialog" style="width: 445px; height: 300px;" role="document">
            <div class="modal-content" style="padding: 10px 20px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="profile-header">
                  <center><strong><h4>CROP AND UPLOAD</h4></strong></center>
                </div>
              </div>
              <div class="modal-body"><div id="gambar_upload"></div></div>
              <div class="modal-footer">
                <center>
                  <button type="button" class="btn btn-succes crop_image">
                    <strong><i class="fa fa-upload" ></i>UPLOAD</strong>
                  </button>
                </center>
              </div>
            </div>
          </div>
        </div>
            <!-- END OF UPLOAD -->