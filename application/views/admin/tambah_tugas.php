
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">                    
                        <div class="card card-success">                         
                            <div id="detail" class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/add_tugas') ?>">
                                    <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <form method="post" enctype="multipart/form-data" action="<?= base_url('guru/add_materi') ?>">
                                            <input type="hidden" name="id">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Judul</label>
                                                    <input autocomplete="off" required type="text" list="judul" onkeyup="autofill()" id="namaguru" name="nama_guru" class="form-control">                                              
                                                </div>
                                            </div>                                            
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input required type="file" name="file" required class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Upload
                                                            file</label>
                                                    </div>                                                    
                                                </div>
                                                <?=$this->session->flashdata('error');?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Deskripsi tugas</label>
                                                <textarea class="form-control" required name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">Divisi</label>
                                                <select required id="inputState" name="divisi" class="form-control">
                                                    <option selected>Pilih disini</option>
                                                    <option value="webdev">webdev</option>
                                                    <option value="robotics">robotics</option>
                                                    <option value="programmers">programmers</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-primary">Tambah
                                                tugas ⭢</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
            </div>
        <!-- End Main Content -->
