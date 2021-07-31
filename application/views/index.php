
<div class="container">
    <i class="fa fa-list mt-3" aria-hidden="true"></i><Span>&nbsp; Daftar Record Tes</Span>
    <div class="card  mt-3">
        <!-- header -->
        <div class="card-header">
            <button class="btn btn-success pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus-square"></i>&nbsp; Tambah Data</button>
            <form action="" method="post">
                <div class="form-inline" style="width: 400px;">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cari..">
                    <button class="btn btn-primary" id="submit" type="submit" style="margin-left: 10px;">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- body -->
        <div class="card-body">
            <!-- notif -->
                <?php echo $this->session->flashdata('message'); ?>
                
                <div style="color: red;">
                    <?php echo validation_errors(); ?>
                </div>

                
            <!--  notif -->
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomor ID</th>
                            <th>Tanggal</th>
                            <th>Aklim</th>
                            <th>Jumlah</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach( $rows as $row) : ?>
                        <tr>
                            <td> <?php echo $i++;?></td>
                            <td><?php echo $row['id_number'] ?></td>
                            <td><?= date('h-m-Y', strtotime($row['date'])); ?></td>
                            <td><?= date('h-m-Y', strtotime($row['aklim'])); ?></td>
                            <td><?= $row['jumlah']; ?></td>
                            
                            <td class="text-center">
                                <a class="btn btn-success" href="<?php echo base_url(); ?>crud/edit/<?= $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a class="btn btn-danger" href=""><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination pull-right">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
                <!-- pagination end -->
            </div>
        </div>
    </div>    
</div> 
<br><br>  


<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <form action="<?= base_url('crud/add'); ?>" method="post">
                <div class="form-group row">
                    <label for="id_number" class="col-sm-3 col-form-label">Nomor ID</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id_number" name="id_number" autocomplete="off">    
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="date" id="date" name="date" autocomplete="off">    
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="aklim" class="col-sm-3 col-form-label">Aklim</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="date" id="aklim" name="aklim" autocomplete="off">    
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="jumlah" name="jumlah" autocomplete="off">    
                    </div>
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

