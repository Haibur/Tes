<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            REALISASI PEMBAYARAN SISWA
        </h2>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap text-center" id="example">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">NoBukti</th>
                            <th class="px-4 py-3">TanggalBayar</th>
                            <th class="px-4 py-3">JenisPembayaran</th>
                            <th class="px-4 py-3">JumlahPembayaran</th>
                            <th class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800" id="myTable">
                        <?php
                        $no = 1;
                        $sum = 0;
                        foreach ($GetALL as $vcustomer) : ?>
                            <tr class="text-gray-700 dark:text-gray-400 bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $no++; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->NoBukti; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->TanggalBayar; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->JenisPembayaran; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->JumlahPembayaran; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php
                                    $sukses = "Sudah Bayar";
                                    $belumbayar = "Belum Bayar";
                                    if ($vcustomer->status == "200") {
                                        echo "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>$sukses</span>";
                                    } else {
                                        echo "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>$belumbayar</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                            $sum += $vcustomer->JumlahPembayaran;
                        endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Total =</th>
                            <th class="px-4 py-3"><?php echo $sum; ?></th>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

    </div>
</main>