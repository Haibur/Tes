<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASY-SYAWALIYYAH</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/demo/css/tailwind.output.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="<?= base_url(); ?>assets/demo/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="<?= base_url(); ?>assets/demo/js/charts-lines.js" defer></script>
    <script src="<?= base_url(); ?>assets/demo/js/charts-pie.js" defer></script>
</head>

<body>
    <!-- Main Sidebar  -->
    <?php $this->load->view('Admin/template/sidebar'); ?>
    <!--/. End Main Sidebar  -->

    <!-- Content  -->
    <?php $this->load->view($page); ?>

    <!-- /. End Content  -->

    <!-- Control Sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/js/jquery.dataTables.min.js" defer></script>
    <script src="<?= base_url(); ?>assets/dist/js/dataTables.bootstrap4.min.js" defer></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    [10, 'asc']
                ],
                "autoWidth": true,
                "pageLength": 10,
                "searching": false,
                "ordering": false
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#myInput2").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable2 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#PA").click(function() {
                $("PA1").toggle();
            });
        });
    </script>
</body>

</html>