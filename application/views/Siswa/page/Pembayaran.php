<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Realisasi Pembayaran Siswa
        </h2>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <!-- Card -->
                <div class="flex w-full justify-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <form method="POST" id="payment-form" action="<?php echo base_url() . $url_post; ?>">
                        <div class="w-full text-sm align-items-center font-medium text-gray-600 dark:text-gray-400">
                            <label class="block py-3 text-sm">
                                <input type="hidden" name="result_type" id="result-type" value="">
                                <input type="hidden" name="result_data" id="result-data" value="">
                                <input type="text" hidden class=" w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="NoTagihan" id="NoTagihan" readonly value="<?php echo $NoTagihan; ?>">
                                <span class="text-gray-700 dark:text-gray-400">Angsuran</span>
                                <input type="text" class=" w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="Angsuran" id="Angsuran" readonly value="<?php echo $Angsuran; ?>">
                            </label>
                            <label class="block py-3 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">NIS</span>
                                <input type="text" class=" w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="NISs" id="NISs" readonly value="<?php echo $NIS; ?>">
                            </label>
                            <input type="text" hidden class=" w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="NamaSiswa" id="NamaSiswa" value="<?php echo $NamaSiswa; ?>">
                            <input type="text" hidden class=" w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="Email" id="Email" value="<?php echo $Email; ?>">
                            <input type="text" hidden class=" w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="NoTelphone" id="NoTelphone" value="<?php echo $NoTelphone; ?>">
                            <input type="text" hidden class=" w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="Alamat" id="Alamat" value="<?php echo $Alamat; ?>">
                            <label class="block py-3 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Tanggal Tagihan</span>
                                <input type="date" class=" w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="TanggalTagihan" id="TanggalTagihan" readonly value="<?php echo $TanggalTagihan; ?>">
                            </label>
                            <label class="block py-3 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Jumlah Tagihan</span>
                                <input type="number" class=" w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="JumlahTagihan" id="JumlahTagihan" readonly value="<?php echo $JumlahTagihan; ?>">
                            </label>
                            <label class="block py-3 text-sm">
                                <button class=" w-full mt-7 p-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray button" id="pay-button">
                                    Bayar
                                </button>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>