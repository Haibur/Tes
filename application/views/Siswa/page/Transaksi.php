<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            DATA PENDAFTARAN
        </h2>
        <!-- CTA -->
        <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="https://cangkulterus.com">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <span>Star this project on Cangkulterus</span>
            </div>
            <span>View more &RightArrow;</span>
        </a>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap text-center" id="dataTables1">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">order_id</th>
                            <th class="px-4 py-3">Nama Anak</th>
                            <th class="px-4 py-3">Kelas</th>
                            <th class="px-4 py-3">Nama Orang Tua</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Nomer Handphone</th>
                            <th class="px-4 py-3">Jumlah Pembayaran</th>
                            <th class="px-4 py-3">Tipe Pembayaran</th>
                            <th class="px-4 py-3">Status Pembayaran</th>
                            <th class="px-4 py-3">Transaction_Time</th>
                            <th class="px-4 py-3">Status Account</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php
                        $no = 1;
                        foreach ($Transaksi as $vcustomer) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $no++; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php
                                    $orderid = $vcustomer->order_id;
                                    echo $orderid ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php
                                    $NamaAnak = $vcustomer->NamaAnak;
                                    echo $NamaAnak ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->Kelas; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->NamaOrangTua; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php
                                    $Email = $vcustomer->Email;
                                    echo $Email ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->NoPonsel; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    Rp <?php echo $vcustomer->gross_amount; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->payment_type; ?>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <?php
                                    $sukses = "Sukses";
                                    $belumbayar = "Belum Bayar";
                                    if ($vcustomer->status_code == "200") {
                                        echo "<span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>$sukses</span>";
                                    } else {
                                        echo "<span class='px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600'>$belumbayar</span>";
                                    }
                                    ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $vcustomer->transaction_time; ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php
                                    echo $vcustomer->StatusAccount;
                                    $cekstatus = $vcustomer->StatusAccount;
                                    if ($cekstatus = "Account Proses") {
                                        echo "                                
                                            <td class='px-4 py-3 text-sm'>
                                                <div>
                                                    <a href='https://cangkulterus.com/TK/index.php/Transaksi/SendMail/$orderid'
                                                            class='flex items-center justify-center px-2 py-4 mt-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple'
                                                            aria-label='Like' onclick='myFunction()' id='kirim'>
                                                        <svg width='16' height='16' xmlns='http://www.w3.org/2000/svg'>
                                                            <g fill='#2e3436'>
                                                                 <path d='M16 2L0 7l3.5 2.656L14.563 2.97 5.25 10.656l4.281 3.156z'/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 1-5 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                    <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </div>
</main>