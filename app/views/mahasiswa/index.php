<section class="pb-32 pt-36">

  <div class="container">
    <div class="flex flex-wrap">
      <div class="mb-10 w-full px-4">
        <h4 class="mb-3 text-lg font-bold uppercase text-primary">
          Daftar Mahasiswa
        </h4>
        <table class="border-collapse min-w-full bg-white border border-primary">
            <thead>
                <tr>
                    <th class="py-3 px-4 text-left border border-primary">Nama</th>
                    <th class="py-3 px-4 text-left border border-primary">NIM</th>
                    <th class="py-3 px-4 text-left border border-primary">Jurusan</th>
                    <th class="py-3 px-4 text-left border border-primary">Tahun Masuk</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach ($data['mhs'] as $mhs) : ?>
                <tr>
                    <td class="py-3 px-4 text-left border border-primary"><?= $mhs['nama']; ?></td>
                    <td class="py-3 px-4 text-left border border-primary"><?= $mhs['nim']; ?></td>
                    <td class="py-3 px-4 text-left border border-primary"><?= $mhs['jurusan']; ?></td>
                    <td class="py-3 px-4 text-left border border-primary"><?= $mhs['tahun']; ?></td>
                </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>
      </div>
    </div>
  </div>

</section>