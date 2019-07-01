    <script type="text/javascript">
        $(document).ready(function(){


            $('#btn_hapus').on('click', function(){
            var id=$('#textkode').val();
            $.ajax({
                url: " <?php echo base_url('hapusMakanan/') ?>"+id,
                type: "POST",
                dataType: "JSON",
                data: {"data":id} ,
                    

            });
            alert('Data Terhapus')
        });

            $('#btn_simpan').click(function(){
                $.ajax({
                    type : "POST",
                    dataType :"json",
                    url: "<?php echo base_url('con_makanan/input');?>",
                    data:$("#formMakanan").serialize(),
                    success : function(data)
                    {
                        $('#menu_makanan').html('');
                        $('#ModalAdd').modal('hide');
                        showData();
                        alert(data.info);
             
                    },
                    error: function(data)
                    {
                        alert("data gagal");
             
                    }
                });
                // alert($("#formMakanan").serialize());
            });

            $('#btn_edit').click(function(){
            alert($("#formEditMakanan").serialize());
            $.ajax({
                type : "POST",
                dataType :"JSON",
                url: "<?php echo base_url('con_makanan/edit');?>",
                data: $('#formEditMakanan').serialize(),
                success:function(data){
                    $('#menu_makanan').html('');
                    $('#ModalEdit').modal('hide');
                    showData();
                    alert(data.info);
                },
                error : function(){
                    alert('Data gagal diubah');
                }
            });
          });
               


            $image_crop = $('#gambar_upload').croppie({
                enableExif :true,
                viewport:
                {
                width: 300,
                height: 300,
                type: 'square'
                },
                boundary:
                {
                width: 350,
                height:350
                }
            })

    $('#upload_image').on("change", function(){
      var reader = new FileReader();
      reader.onload = function (event){
        $image_crop.croppie('bind',{
          url: event.target.result
        }).then(function(){}); //function yang ada pada croppie. kalau mau ada function khusus setelah load image, tambahkan pada bagian ini
      }
      reader.readAsDataURL(this.files[0]);
      $('#modalUpload').modal('show');
    });

    $('.crop_image').click(function(event){
      $image_crop.croppie('result',{
        type:'canvas',
        size :'viewport'
      }).then(function(response){
        $.ajax({
          url:"<?php echo base_url('upload_gambar') ?>",
          type: "POST",
          data: {"image": response}, //karena data bukan dalam bentuk JSON, makanya diubah ke bentuk JSON
          //tuh caranya broo
          //hasil dari JSON nanti adalah path image asal.
          success : function(data){
            $('#modalUpload').modal('hide');
            $('#gambarProduk').prop("src","<?php echo base_url('assets/images/menu/')?>"+data);
            $('sec-gambar').show();
            $('#gambar').val(data);
          }
        });
      })
    });
            showData();
            
            function showData(){
                $.ajax({
                url: "<?php echo base_url('tampilMakanan')?>",
                type: "GET",

                dataType: "JSON",
                success: function(data){
                  $('#menu_makanan').html();
                  for (var i = 0; i <data.length; i++) {
                    $('#menu_makanan').append(
                      '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].nama_makanan+'</td>'+
                        '<td>'+data[i].kategori+'</td>'+
                        '<td>'+data[i].harga+'</td>'+
                        '<td>'+data[i].gambar+'</td>'+
                        '<td>'+data[i].status+'</td>'+
                        '<td>'+data[i].detail+'</td>'+
                        '<td><button class="btn btn-warning" onclick="getEditMakanan(\''+data[i].id_makanan+'\')"><i class="fa fa-edit"></i></button></td>'+
                        '<td><button class="btn btn-danger" onclick="hapusMakanan(\''+data[i].id_makanan+'\')"><i class="fa fa-eraser"></i></button></td>'+
                      '</tr>'
                    );
                }
                }
                });
            };
            showMenu();
            function showMenu(){
                $.ajax({
                url: "<?php echo base_url('tampilMakanan')?>",
                type: "GET",

                dataType: "JSON",
                success: function(data){
                  $('#makanan').html();
                  for (var i = 0; i <data.length; i++) {
                    $('#makanan').append(
                        '<div class="card col-md-3" style="width: 18rem;" >'+
                            '<img class="card-img-top" src="<?php echo base_url('assets/images/menu/cumi.jpg')?>" style="width:250px auto; height:200px;">'+
                            '<div class="card-body">'+
                            '<center><strong class="card-title" style="font-size:18px;">'+data[i].nama_makanan+'</strong>'+
                            
                            '<button type="button" class="btn btn-warning" onclick="addPesanan(\''+data[i].id_makanan+'\')"><i class="fa fa-edit"></i></button></center>'+ 
                            '</div>'+
                        '<br></div>')
                }
                }
            });
            }

            $.ajax({
              url: " <?php echo base_url('tampilKategori') ?>",
              type: "GET",
              dataType: "JSON",
              success: function(response){
                $('#kategori').html();
                for (var i = 0; i <response.length; i++) {
                  $('#kategori,#kategoriE').append(
                    '<option value='+response[i].id_kategori+'>'+response[i].kategori+'</option>'
                    );
                }        
              }
            });



          $('#addData').click(function(){
                $.ajax({
                url: "<?php echo base_url('otoID')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                if (data!= '') {
                $('#ModalAdd').modal('show');
                $('#idMakanan').val(data.hsl);
                }
            } 
            
            });

            });

        $(document).on('shown.bs.modal', '.modal', function(event){
                var zIndex=1040 + (10 * $('.modal:visible').length);
                $(this).css('z-index', zIndex);
                setTimeout(function(){
                    $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex -2)
                                        .addClass('modal-stack');
                                    },0);
        });        

        $(document).on('hidden.bs.modal', '.modal',function(){
            $('.modal:visible').length && $(document.body).addClass('modal-open');

        });

    });
    </script>
    <script type="text/javascript">
        function getEditMakanan(id){
            $.ajax({
            url: "<?php echo base_url('getEdit/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('#ModalEdit').modal('show');
                $('#idMakananE').val(data.id_makanan);
                $('#namaMakananE').val(data.nama_makanan);
                $('#kategoriE').val(data.id_kategori);
                $('#hargaE').val(data.harga);
                $('#detailE').val(data.detail);
                $('#statusE').val(data.id_status);
            }
                });
        };

        function hapusMakanan(id){
            $.ajax({
            url: "<?php echo base_url('gethapusMakanan/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('#ModalHapus').modal('show');
                $('#textkode').val(data.id_makanan);
                }
            });
        };
        function addPesanan(id){
            $.ajax({
            url: "<?php echo base_url('getEdit/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('#QTY').val('1');
                $('#ModalPesanan').modal('show');
                $('#id_makanan').val(data.id_makanan);
                $('#namaMakanan').val(data.nama_makanan);
                $('#hargaP').val(data.harga);
                $('#sub').val(data.harga);
            }
                });
        };
        

        
    </script>

        
    </body>
</html>