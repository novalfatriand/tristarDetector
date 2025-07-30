const butDescription = document.getElementById('button-desc')
const butSpecification = document.getElementById('button-spec')
const butPayment = document.getElementById('button-payment')
const textDescription = document.getElementById('text-description')
const p = document.createElement('p')
const textDefault = document.getElementById('text-standby')
const orderButtonArea = document.getElementById('order-button-area')

butDescription.style.borderBottom = '1px solid navy'

function buttonDesc() {
    p.innerHTML = 'Introducing Aerox Water Detector, your simple, quick, and accurate solution for locating ground water sources. Designed for ease of use and dependable performance perfect for homeowners, farmers, and small-scale explorers seeking to find groundwater sources with confidence. <br><div class="leading-loose"><br>    Why choose Aerox Water Detector?<br>    <i class="fa fa-check mr-2"></i>95% Accurate to find ground water source point<br>    <i class="fa fa-check mr-2"></i>One button operation to initiate ground water source detection<br>    <i class="fa fa-check mr-2"></i>Integrated LCD screen showing detected water source depth in meter<br>    <i class="fa fa-check mr-2"></i>Water quality differentiation<br>    <i class="fa fa-check mr-2"></i>Durable full metal construction<br>    <i class="fa fa-check mr-2"></i>Predict aquifer depth and thickness <br></div><br>    Contact us for ordering: <br><br><a href="https://wa.me/+6285190060033" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-normal rounded-md text-xs px-4 py-2 me-2 mb-2 mt-4">WhatsApp</a><a href="https://www.facebook.com/share/sZC2RhDVAsGyGSAn/?mibextid=kFxxJD" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-normal rounded-md text-xs px-4 py-2 me-2 mb-2">Facebook</a>'
    textDescription.append(p)
    textDefault.style.display = 'none'
    butDescription.style.borderBottom = '1px solid navy'
    butSpecification.style.borderBottom = 'none'
    butPayment.style.borderBottom = 'none'
    orderButtonArea.style.display = 'block'
}

function buttonSpec() {
    p.innerHTML = "Aerox Water Detector Specification: <br><br> - Horizontal & Vertical detection depth range = 300 meter <br> - Powered by 9V square battery (battery not included in package) <br> - 2x Extendable antenna <br> - 2x Fixed high frequency antenna <br> - Idle detecting sound <br> - Depth counting detecting sound"
    textDescription.append(p)
    textDefault.style.display = 'none'
    butDescription.style.borderBottom = 'none'
    butSpecification.style.borderBottom = '1px solid navy'
    butPayment.style.borderBottom = 'none'
    orderButtonArea.style.display = 'none'
}

function buttonPayment() {
    p.innerHTML = '<button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-md text-sm px-1 me-2 mb-2"><img class="object-contain w-20 h-20 -mt-4 -mb-4" src="assets/img/logo/logo-paypal.png" alt=""></button> <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-md text-sm px-1 me-2 mb-2"><img class="object-contain w-20 h-20 -mt-4 -mb-4" src="assets/img/logo/logo-western.png" alt=""></button><button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-md text-sm px-1 me-2 mb-2"><img class="object-contain w-20 h-20 -mt-4 -mb-4" src="assets/img/logo/logo-moneygram.png" alt=""></button><button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-md text-sm px-1 me-2 mb-2"><img class="object-contain w-20 h-20 -mt-4 -mb-4" src="assets/img/logo/logo-bca.png" alt=""></button><br><br> SHIPPING: <br><button type="button" class="mt-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-md text-sm px-1 me-2 mb-2"><img class="object-contain w-20 h-20 -mt-4 -mb-4" src="assets/img/logo/logo-dhl.png" alt=""></button>'
    textDescription.append(p)
    textDefault.style.display = 'none'
    butDescription.style.borderBottom = 'none'
    butSpecification.style.borderBottom = 'none'    
    butPayment.style.borderBottom = '1px solid navy'   
    orderButtonArea.style.display = 'none'  
}