    const butDescription = document.getElementById('button-desc');
    const butSpecification = document.getElementById('button-spec');
    const butPayment = document.getElementById('button-payment');
    const textDescription = document.getElementById('text-description');
    const textDefault = document.getElementById('text-standby');
    const orderButtonArea = document.getElementById('order-button-area'); // pastikan ini ada di HTML
    const textDynamic = document.createElement('div'); // untuk isi dinamis
    textDescription.appendChild(textDynamic);

    // fungsi untuk reset state
    function resetTabs() {
        textDynamic.innerHTML = '';
        textDefault.style.display = 'none';

        butDescription.style.borderBottom = 'none';
        butSpecification.style.borderBottom = 'none';
        butPayment.style.borderBottom = 'none';

        if (orderButtonArea) {
            orderButtonArea.classList.add('hidden');
            orderButtonArea.classList.remove('block');
        }
    }

    function buttonDesc() {
        resetTabs();
        textDynamic.innerHTML = `
            Introducing Aerox Water Detector, your simple, quick, and accurate solution for locating ground water sources. Designed for ease of use and dependable performance perfect for homeowners, farmers, and small-scale explorers seeking to find groundwater sources with confidence.
            <div class="leading-loose mt-4">
                <strong>Why choose Aerox Water Detector?</strong><br>
                <i class="fa fa-check mr-2"></i>95% Accurate to find ground water source point<br>
                <i class="fa fa-check mr-2"></i>One button operation to initiate ground water source detection<br>
                <i class="fa fa-check mr-2"></i>Integrated LCD screen showing detected water source depth in meter<br>
                <i class="fa fa-check mr-2"></i>Water quality differentiation<br>
                <i class="fa fa-check mr-2"></i>Durable full metal construction<br>
                <i class="fa fa-check mr-2"></i>Predict aquifer depth and thickness
            </div>
            <div class="mt-4">
                Contact us for ordering: <br><br>
                <a href="https://wa.me/+6285190060033" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-normal rounded-md text-xs px-4 py-2 me-2 mb-2 mt-2">WhatsApp</a>
                <a href="https://www.facebook.com/share/sZC2RhDVAsGyGSAn/?mibextid=kFxxJD" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-normal rounded-md text-xs px-4 py-2 me-2 mb-2">Facebook</a>
            </div>
        `;
        butDescription.style.borderBottom = '1px solid navy';
        if (orderButtonArea) {
            orderButtonArea.classList.remove('hidden');
            orderButtonArea.classList.add('block');
        }
    }

    function buttonSpec() {
        resetTabs();
        textDynamic.innerHTML = `
            <strong>Aerox Water Detector Specification:</strong><br>
            <div class="leading-loose mt-2">
            <i class="fa fa-check mr-2"></i>Horizontal & Vertical detection depth range = 300 meter<br>
            <i class="fa fa-check mr-2"></i>Powered by 9V square battery (battery not included in package)<br>
            <i class="fa fa-check mr-2"></i>2x Extendable antenna<br>
            <i class="fa fa-check mr-2"></i>2x Fixed high frequency antenna<br>
            <i class="fa fa-check mr-2"></i>Idle detecting sound<br>
            <i class="fa fa-check mr-2"></i>Depth counting detecting sound
            </div>
        `;
        butSpecification.style.borderBottom = '1px solid navy';
    }

    function buttonPayment() {
        resetTabs();
        textDynamic.innerHTML = `
            <div class="flex flex-wrap gap-3 mb-4">
                <button type="button" class="bg-white border border-gray-300 rounded-md p-2"><img src="assets/img/logo/logo-paypal.png" class="w-20 h-20 object-contain" alt="PayPal"></button>
                <button type="button" class="bg-white border border-gray-300 rounded-md p-2"><img src="assets/img/logo/logo-western.png" class="w-20 h-20 object-contain" alt="Western Union"></button>
                <button type="button" class="bg-white border border-gray-300 rounded-md p-2"><img src="assets/img/logo/logo-moneygram.png" class="w-20 h-20 object-contain" alt="MoneyGram"></button>
                <button type="button" class="bg-white border border-gray-300 rounded-md p-2"><img src="assets/img/logo/logo-bca.png" class="w-20 h-20 object-contain" alt="BCA"></button>
            </div>
            <div class="mt-3">
                <strong>SHIPPING:</strong><br>
                <button type="button" class="mt-2 bg-white border border-gray-300 rounded-md p-2"><img src="assets/img/logo/logo-dhl.png" class="w-20 h-20 object-contain" alt="DHL"></button>
            </div>
        `;
        butPayment.style.borderBottom = '1px solid navy';
    }

    // Inisialisasi tampilan awal
    buttonDesc();
