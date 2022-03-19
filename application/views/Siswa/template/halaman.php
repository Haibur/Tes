<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASY-SYAWALIYYAH</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-S0L-1w3YEvX_VaJD"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/demo/css/tailwind.output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
</head>

<body>
    <!-- Main Sidebar  -->
    <?php $this->load->view('Siswa/template/sidebar'); ?>
    <!--/. End Main Sidebar  -->

    <!-- Content  -->
    <?php $this->load->view($page); ?>

    <!-- /. End Content  -->

    <!-- Control Sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="<?= base_url(); ?>assets/demo/js/init-alpine.js"></script>
    <script src="<?= base_url(); ?>assets/demo/js/charts-lines.js" defer></script>
    <script src="<?= base_url(); ?>assets/demo/js/charts-pie.js" defer></script>
    <script src="<?= base_url(); ?>assets/dist/js/jquery.dataTables.min.js" defer></script>
    <script src="<?= base_url(); ?>assets/dist/js/dataTables.bootstrap4.min.js" defer></script>

    <script type="text/javascript">
        $('#pay-button').click(function(event) {
            event.preventDefault();
            $(this).attr("disabled", "disabled");

            var NoTagihan = $("#NoTagihan").val();
            var Angsuran = $("#Angsuran").val();
            var NISs = $("#NISs").val();
            var NamaSiswa = $("#NamaSiswa").val();
            var NoTelphone = $("#NoTelphone").val();
            var Alamat = $("#Alamat").val();
            var Email = $("#Email").val();
            var TanggalTagihan = $("#TanggalTagihan").val();
            var JumlahTagihan = $("#JumlahTagihan").val();

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() . $token; ?>',
                data: {
                    NoTagihan: NoTagihan,
                    Angsuran: Angsuran,
                    NISs: NISs,
                    NamaSiswa: NamaSiswa,
                    NoTelphone: NoTelphone,
                    Alamat: Alamat,
                    Email: Email,
                    TanggalTagihan: TanggalTagihan,
                    JumlahTagihan: JumlahTagihan
                },
                cache: false,

                success: function(data) {
                    //location = data;

                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    function changeResult(type, data) {
                        $("#result-type").val(type);
                        $("#result-data").val(JSON.stringify(data));
                        //resultType.innerHTML = type;
                        //resultData.innerHTML = JSON.stringify(data);
                    }

                    snap.pay(data, {

                        onSuccess: function(result) {
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onPending: function(result) {
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        },
                        onError: function(result) {
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>