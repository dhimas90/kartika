<div class="container">
    <div class="row">
        <!-- offset start -->
        <div class="col-lg-2"></div>
        <!-- offset end -->
        <div class="col-lg-8">
            <div class="card mt-3">
                <div class="card-header">
                    Ubah Data
                </div>
                <div class="card-body">
                    <?php foreach ( $edit as $row ) : ?>
                    <form action="<?= base_url('crud/update'); ?>" method="post">
                        <div class="form-group row">
                            <label for="id_number" class="col-sm-3 col-form-label">Nomor ID</label>
                                <div class="col-sm-8">
                                <input class="form-control" type="hidden" id="id" name="id" autocomplete="off" value="<?= $row['id']; ?>">
                                    <input class="form-control" type="text" id="id_number" name="id_number" autocomplete="off" value="<?= $row['id_number']; ?>">    
                                </div>              
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="date" id="date" name="date" autocomplete="off" value="<?= $row['date']; ?>">    
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="aklim" class="col-sm-3 col-form-label">Aklim</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="date" id="aklim" name="aklim" autocomplete="off" value="<?= $row['aklim']; ?>">    
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="jumlah" name="jumlah" autocomplete="off" value="<?= $row['jumlah']; ?>">    
                                </div>
                        </div>    
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" name="submit">Ubah Data</button>
                            <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        