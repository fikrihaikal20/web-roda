<body>
     <!-- table anggota-->
     <div class="row">                    
                        <table class="table table-bordered mx-5">
                            <thead class="text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                <th scope="row" class="text-center"><?php echo $i++; ?></th>
                                <td><?php echo $user['nama'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['kelas']?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/detail/') . $user['id']; ?>"><span class="badge badge-info">Detail</span></a>
                                    <a href="<?php echo base_url('admin/edit/') . $user['id']; ?>"><span class="badge badge-warning">Edit</span></a>
                                    <a href="<?php echo base_url('admin/delete/') . $user['id']; ?>"><span class="badge badge-danger">Delete</span></a>
                                    
                                </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
</body>