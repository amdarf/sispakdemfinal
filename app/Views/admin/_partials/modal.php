<!-- Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Deleted data cannot be recovered.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="penyakitHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman index/table penyakit</p>
        <p>Klik <i class="fa fa-plus"></i> pada pojok kanan atas untuk menambahkan penyakit</p>
        <p>Klik <i class="fa fa-edit"></i> pada action penyakit untuk mensunting penyakit</p>
        <p>Klik <i class="fa fa-trash"></i> pada action penyakit untuk menghapus penyakit</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tambahpenyakitHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman untuk menambahkan / menyunting penyakit</p>
        <p>Klik <i class="fa fa-arrow-left"></i> pada pojok kanan atas untuk kembali ke daftar penyakit</p>
        <p>Isi semua kolom / field input kemudian klik submit untuk menambahkan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pencegahanHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman index/table pencegahan</p>
        <p>Klik <i class="fa fa-plus"></i> pada pojok kanan atas untuk menambahkan Pencegahan</p>
        <p>Klik <i class="fa fa-edit"></i> pada action Pencegahan untuk mensunting Pencegahan</p>
        <p>Klik <i class="fa fa-trash"></i> pada action Pencegahan untuk menghapus Pencegahan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tambahpencegahanHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman untuk menambahkan / menyunting Pencegahan</p>
        <p>Klik <i class="fa fa-arrow-left"></i> pada pojok kanan atas untuk kembali ke daftar Pencegahan</p>
        <p>Isi semua kolom / field input kemudian klik submit untuk menambahkan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="gejalaHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman index/table gejala</p>
        <p>Klik <i class="fa fa-plus"></i> pada pojok kanan atas untuk menambahkan Gejala</p>
        <p>Klik <i class="fa fa-edit"></i> pada action Gejala untuk mensunting Gejala</p>
        <p>Klik <i class="fa fa-trash"></i> pada action Gejala untuk menghapus Gejala</p>
        <hr>
        <h5>Penjelasan level gejala</h5>
        <p><b>level gejala 1</b>: adalah level gejala penbuka, level yang pertama kali aktif/terlihat/anable, kemudia akan mengaktifkan level selanjutnya (1,2)</p>
        <p><b>level gejala 2</b> : adalah level gejala selanjutnya, level gejala yang aktif ketika gejala dengan kategori yang sama pada level sebelumnya (1) telah dipilih/diceklis/yes</p>
        <p><b>level gejala 3</b> : adalah level gejala selanjutnya, level gejala yang aktif ketika gejala dengan kategori yang sama pada level sebelumnya (1) telaha dipilih, dan akan mengaktifkan level selanjutnya (4,5)</p>
        <p><b>level gejala 4</b> : sama seperti level 2 tapi dengan tingkat selanjutnya</p>
        <p><b>level gejala 5</b> : sama seperti level 3 tapi dengan tingkat selanjutnya</p>
        <p>dst</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tambahgejalaHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman untuk menambahkan / menyunting Gejala</p>
        <p>Klik <i class="fa fa-arrow-left"></i> pada pojok kanan atas untuk kembali ke daftar Gejala</p>
        <p>Isi semua kolom / field input kemudian klik submit untuk menambahkan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="kategoriHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman index/table kategori</p>
        <p>Klik <i class="fa fa-plus"></i> pada pojok kanan atas untuk menambahkan Kategori</p>
        <p>Klik <i class="fa fa-edit"></i> pada action Kategori untuk mensunting Kategori</p>
        <p>Klik <i class="fa fa-trash"></i> pada action Kategori untuk menghapus Kategori</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tambahkategoriHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Halaman ini adalah halaman untuk menambahkan / menyunting Kategori</p>
        <p>Klik <i class="fa fa-arrow-left"></i> pada pojok kanan atas untuk kembali ke daftar Kategori</p>
        <p>Isi semua kolom / field input kemudian klik submit untuk menambahkan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>