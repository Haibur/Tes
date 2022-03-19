<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            DATA REALISASI SUDAH PEMBAYARAN
        </h2>
    </div>

    <div class="relative w-full ml-4 mb-2 max-w-xl lg:mr-32">
        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
            <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" id="myInput" placeholder="Masukan NIS SISWA" aria-label="Search" />
        </div>
    </div>

    <div class="w-full ml-4 mr-4 overflow-hidden rounded-md shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap text-center" id="example">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">NoBukti</th>
                        <th class="px-4 py-3">Angsuran</th>
                        <th class="px-4 py-3">NIS</th>
                        <th class="px-4 py-3">Nama Siswa</th>
                        <th class="px-4 py-3">Jumlah Angsuran</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    $no = 1;
                    $sum = 0;
                    foreach ($GetLunas as $vcustomer) : ?>
                        <tr class="text-gray-700 dark:text-gray-400 bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <td class="px-4 py-3 text-sm">
                                <?php echo $no++; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->NoBukti; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->JenisPembayaran; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->NIS; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->NamaSiswa; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php
                                echo 'Rp ' .
                                    $vcustomer->JumlahPembayaran; ?>
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
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3">Total </th>
                        <th class="px-4 py-3"><?php echo 'Rp ' . $sum ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            DATA REALISASI BELUM PEMBAYARAN
        </h2>
    </div>

    <div class="relative w-full ml-4 mb-2 max-w-xl lg:mr-32">
        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
            <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" id="myInput2" placeholder="Masukan NIS SISWA" aria-label="Search" />
        </div>
    </div>


    <div class="w-full ml-4 mr-4 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap text-center" id="example2">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">NIS</th>
                        <th class="px-4 py-3">Nama Siswa</th>
                        <th class="px-4 py-3">Angsuran</th>
                        <th class="px-4 py-3">Tanggal Angsuran</th>
                        <th class="px-4 py-3">Jumlah Angsuran</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800" id="myTable">
                    <?php
                    $no = 1;
                    $sum2 = 0;
                    foreach ($GetBelum as $vcustomer) : ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                <?php echo $no++; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->NIS ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->NamaSiswa ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->Angsuran; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo $vcustomer->TanggalTagihan; ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo 'Rp ' .
                                    $vcustomer->JumlahTagihan; ?>
                            </td>
                        </tr>
                    <?php
                        $sum2 += $vcustomer->JumlahTagihan;
                    endforeach; ?>
                </tbody>
                <tfoot>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3">Total </th>
                        <th class="px-4 py-3"><?php echo 'Rp ' . $sum2 ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</main>