<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            RENCANA PEMBAYARAN SISWA
        </h2>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap text-center" id="example">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">NIS</th>
                            <th class="px-4 py-3">Angsuran</th>
                            <th class="px-4 py-3">Tanggal Angsuran</th>
                            <th class="px-4 py-3">Jumlah Angsuran</th>
                            <th class="px-4 py-3">Jumlah Bayar</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800" id="myTable">
                        <?php
                        $no = 1;
                        $sum = 0;
                        $sum2 = 0;
                        foreach ($GetALL as $vcustomer) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $no++; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->NIS ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->Angsuran; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->TanggalTagihan; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->JumlahTagihan; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php if ($vcustomer->status != 0) {
                                        echo $vcustomer->JumlahTagihan;
                                    } ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php if ($vcustomer->status == 0) {
                                        if ($vcustomer->nourut != 1) {
                                            echo "<a hidden style='cursor:no-drop' class='w-full mt-7 p-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray' href='https://cangkulterus.com/TK/SiswaTK/RencanaS/bayar/$vcustomer->NoTagihan'>
                                                Bayar
                                            </a>";
                                        } else {
                                            echo "<a class='w-full mt-7 p-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray' href='https://cangkulterus.com/TK/SiswaTK/RencanaS/bayar/$vcustomer->NoTagihan'>
                                                Bayar
                                            </a>";
                                        }
                                    } elseif (($vcustomer->status == 200)) {
                                        echo "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>Sudah Bayar</span>";
                                    } else {
                                        echo "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>Belum Bayar</span>";
                                    } ?>
                                </td>
                            </tr>
                        <?php
                            $sum += $vcustomer->JumlahTagihan;
                            if ($vcustomer->status != 0) {
                                $sum2 += $vcustomer->JumlahTagihan;
                            }
                        endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Total =</th>
                            <th class="px-4 py-3"><?php echo $sum; ?></th>
                            <th class="px-4 py-3"><?php echo $sum2; ?></th>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

    </div>
</main>