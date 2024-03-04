<script type="text/javascript">
    function refreshPage() {
        // Fungsi location.reload() akan merefresh halaman
        location.reload();
    }

    $(document).ready(function(){
        //ambil data dari php
        let gejala = <?php echo(json_encode($gejala)) ?>;
        let penyakit = <?php echo(json_encode($penyakit)) ?>;
        console.log(penyakit)
        //method up level ceklis
        $(".levelup").click(function() {
            //get value
            let value=$(this).attr('value');
            //periksa apakah ceklis/ tidak
            let checklist = $('#'+value).is(':checked');
            //jika ceklis
            if(checklist) {
                for(var gj of gejala) {
                    if(gj['id']==value){
                        //get level
                        let level = parseInt(gj['level']);
                        let levelup = level+3;
                        //get kategori
                        let kategori = gj['id_kategori'];
                        //mengaktifkan seluruh level kategori tingat 2 dan 3
                        for(var gje of gejala){
                            //aktifkan
                            if(gje['id_kategori']===kategori && parseInt(gje['level'])<levelup && (level % 2) === 1){
                                $("#"+gje['id']).prop("disabled", false);
                            }
                            //disable lvl dibawahnya
                            if(gje['id_kategori']===kategori && parseInt(gje['level'])<level){
                                $("#"+gje['id']).prop("disabled", true);
                                $("#"+gje['id']).prop("checked", false);
                                $("#"+gje['id']).prop("indeterminate", true);
                            }
                        }
                        break;
                    }
                }
            }
            //jika tidak
            else {
                for(var gj of gejala) {
                    if(gj['id']==value){
                        //get level
                        let level = parseInt(gj['level']);
                        let leveldown = true;
                        //get kategori
                        let kategori = gj['id_kategori'];
                        //mengaktifkan seluruh level kategori tingat 2 dan 3
                        for(var gje of gejala){
                            if(gje['id_kategori']===kategori && parseInt(gje['level'])===level){
                                if($("#"+gje['id']).is(':checked')){
                                    leveldown = false;
                                    break;
                                }
                            }
                        }
                        if (leveldown) {
                            for (var gjer of gejala) {
                                if ((level % 2) === 1) {//jika level ganjil
                                    //anable level dibwahnya
                                    if (gjer['id_kategori'] === kategori && parseInt(gjer['level']) >= level - 1 && parseInt(gjer['level']) < level) {
                                        $("#" + gjer['id']).prop("disabled", false);
                                        $("#" + gjer['id']).prop("indeterminate", false);
                                        $("#" + gjer['id']).prop("checked", true);
                                    }
                                    //disable level yang diklik dan diatasnya
                                    if (gjer['id_kategori'] === kategori && parseInt(gjer['level']) > level) {
                                        $("#" + gjer['id']).prop("disabled", true);
                                    }
                                } else { // jika level genap
                                    //anable level dibawahnya
                                    if (gjer['id_kategori'] === kategori && parseInt(gjer['level']) >= level - 2) {
                                        $("#" + gjer['id']).prop("disabled", false);
                                        $("#" + gjer['id']).prop("indeterminate", false);
                                    }
                                    //disabel yang diklik dan diatanya
                                    if (gjer['id_kategori'] === kategori && parseInt(gjer['level']) >= level) {
                                        $("#" + gjer['id']).prop("disabled", true);
                                    }
                                }
                            }
                        }
                        break;
                        console.log(leveldown);
                    }
                }
            }
        });

        $('#hasil_diagnosis').on('click','#submit',function(){
            let name = $('[name="nama"]').val();
            if(name != '' && name != undefined && name != null){
                let data = [];
                let precentage = [];
                // dapatkan gejala input
                for(var gj of gejala) {
                    if($('#'+gj['id']).is(':checked')){
                        data.push(gj['id']);
                    }
                }
                // cocokkan gejala input dengan gejala jenis penyakit
                for(var py of penyakit) {
                    precentage.push(calculateSameValuePercentage(py['gejala_penyakit'], data));
                }

                console.log(precentage);
                let value = maxValue = Math.max(...precentage); //get nilai terbesar
                let key = precentage.indexOf(Math.max(...precentage)) //get key nilai tebesar
                let bestMatch = penyakit[precentage.indexOf(Math.max(...precentage))]['id'];
                console.log(value);
                console.log(key); 
                console.log(bestMatch);
                getSolusi(bestMatch, key, value, name, data.toString());
            }
            else {
                Swal.fire({
                        icon: 'warning',
                        title: 'Akses ditolak',
                        html: 'Isi kolom/ <i>field</i> nama anda terlebih dahulu',
                });
            }
        });

        $('#myForm').submit(function(event) {
            event.preventDefault();
            let name = $('[name="nama"]').val();
            if(name != '' && name != undefined && name != null){
                let data = [];
                let precentage = [];
                // dapatkan gejala input
                for(var gj of gejala) {
                    if($('#'+gj['id']).is(':checked')){
                        data.push(gj['id']);
                    }
                }
                // cocokkan gejala input dengan gejala jenis penyakit
                for(var py of penyakit) {
                    precentage.push(calculateSameValuePercentage(py['gejala_penyakit'], data));
                }

                console.log(precentage);
                let value = maxValue = Math.max(...precentage); //get nilai terbesar
                let key = precentage.indexOf(Math.max(...precentage)) //get key nilai tebesar
                let bestMatch = penyakit[precentage.indexOf(Math.max(...precentage))]['id'];
                console.log(value);
                console.log(key); 
                console.log(bestMatch);
                getSolusi(bestMatch, key, value, name, data.toString());
            }
            else {
                Swal.fire({
                        icon: 'warning',
                        title: 'Akses ditolak',
                        html: 'Isi kolom/ <i>field</i> nama anda terlebih dahulu',
                });
            }
        });

        $('#hasil_diagnosis').on('click','#ulangi',function(){
            //bersihkan ceklis
            // for(var gj of gejala) {
            //     if($('#'+gj['id']).is(':checked')){
            //         $('#'+gj['id']).prop('checked', false);
            //     }
            // }
            //atur ulang
            let html = '<div class="row justify-content-center">'+
                            '<div class="col-lg-6">'+
                                '<h4>Diagnosis</h4>'+
                                '<p>Masukkan nama anda</p>'+
                                '<form action="" method="post">'+
                                    '<input type="text" name="nama"><input id="submit" type="button" value="Submit">'+
                                '</form>'+
                            '</div>'+
                        '</div>';

            $('#hasil_diagnosis').html(html);
        });

        //fungsi menghitung jumlah array yang sama antar 2 array
        function countSameValues(array1, array2) {
            var count = 0;

            for (var i = 0; i < array1.length; i++) {
                var value = array1[i];
                if (array2.includes(value)) {
                    count++;
                }
            }

            return count;
        }
        /*
            // Contoh penggunaan
            var array1 = [1, 2, 3, 4];
            var array2 = [1, 3, 5, 7, 10];
            var result = countSameValues(array1, array2);
            console.log(result); // Output: 2
        */

        //fungsi menghitung presentase kesamaan array1 terhadap array 2
        function calculateSameValuePercentage(array1, array2) {
            var count = 0;

            for (var i = 0; i < array1.length; i++) {
                var value = array1[i];
                if (array2.includes(value)) {
                    count++;
                }
            }

            var percentage = (count / array1.length) * 100;
            return percentage;
        }
        /*
            // Contoh penggunaan
            var array1 = [1, 2, 3, 4];
            var array2 = [1, 3, 5, 7, 10];
            var result = calculateSameValuePercentage(array1, array2);
            console.log(result); // Output: 50
        */
        function getSolusi(id_penyakit, key, value, name, input) {
            Swal.fire({
                title: 'pengindeksan!',
                html: 'Pencarian diagnosa yang sesuai',
                showConfirmButton: false,
                showCancelButton: false,
                allowOutsideClick: () => !Swal.isLoading(),
                willOpen: function () {
                    //yang dilakukan saat open
                    Swal.showLoading();
                    if(value >= 70){
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('index.php/getSolusi')?>",
                            dataType: "JSON",
                            data: {id:id_penyakit},
                            success: function (data) {
                                console.log(data);
                                let html = '<div class="row">'+
                                                '<div class="col-lg-12">'+
                                                    '<h4>Diagnosis : '+penyakit[key]['penyakit']+'*</h4>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row diagnosis">'+
                                                '<div class="col-lg-12">'+
                                                '<ol>';
                                for (var solusi of data){
                                    html +=         '<li>'+solusi.pencegahan+'</li>'; //ovject / json
                                }
                                html += '</ol></div><span>* '+value.toFixed(2)+'% berdasarkan index</span></div>'+
                                        '<div class="row">'+
                                            '<div class="col-lg-12 mt-3">'+
                                                '<button id="ulangi" type="button" class="btn btn-primary"><i class="bx bx-refresh"></i> Ulangi</button>'+
                                            '</div>'+
                                        '</div>';
                                
                                $('#hasil_diagnosis').html(html);
                                Swal.close();
                                postRiwayat(id_penyakit, value, name, input);
                            }
                        })
                        .fail(function (jqXHR, ajaxOptions, thrownError) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            });
                        });
                    }
                    else if (value <= 69 && value >= 20) {
                        Swal.close();
                        Swal.fire({
                            icon: 'warning',
                            title: 'Dugaan diagnosa',
                            html: 'Kecocokan gejala tertinggi : <b>'+penyakit[key]['penyakit']+'</b>, dengan presentase kecocokan : <b>'+value.toFixed(2)+'</b>%',
                        });
                    }
                    else {
                        const penyakitArray = penyakit.map(entry => entry.penyakit);
                        const penyakitString = penyakitArray.join(", <br>");
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Diagnosa tidak ditemukan',
                            html: 'Tidak Ada Dugaan di Antara penyakit di bawah ini : <i><br>'+penyakitString+'<br></i>',
                        });
                    }
                },
                willClose: function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Diagnosa ditemukan!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }).then(function (result) {
                if (result.dismiss === Swal.DismissReason.cancel) {

                }
            });
        }

        function postRiwayat(id_penyakit, value, name, gejala_input) {
            gejala_input = '['+gejala_input+']';
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/postRiwayat')?>",
                dataType: "JSON",
                data: {
                    id_penyakit: id_penyakit, nama: name, presentase: value, gejala_input: gejala_input
                },
                success: function (data) {
                    console.log(data);
                }
            });
        }
    });
</script>