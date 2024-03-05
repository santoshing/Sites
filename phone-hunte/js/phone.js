const loadphone = async (searchText = '13', isShowAll) => {
    const res = await fetch(`https://openapi.programming-hero.com/api/phones?search=${searchText}`);
    const data = await res.json();
    const phones = data.data;
    // console.log(phones);
    displayphone(phones);
}

const displayphone = phones => {
    // console.log(phones)
    const phoneContainer = document.getElementById('phone-container');
    //clear phone container cards before adding new cards
    phoneContainer.textContent = '';
    console.log(phones.lenght);

    phones.forEach(phone => {
        console.log(phone);
        //1 create a div 
        const phonecard = document.createElement('div');
        phonecard.classList = `card w-96 bg-gray-100 shadow-xl`;
        phonecard.innerHTML = `
                     <figure>
                        <img src="${phone.image}" https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-13-mini.jpg" />
                    </figure>
                    <div class="card-body">
                <h2 class="card-title">${phone.phone_name}</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-center">
                            <button onclick="handleShowDetails('${phone.slug}' );show_details_modal.showModal()" class="btn btn-primary">Show Details</button>
                        </div>
                    </div>`   ;

        phoneContainer.appendChild(phonecard);

    });
    toggleLoadingSpinner(false);
}
const handleShowDetails = async (id) => {
    console.log('clicked show details', id);
    const res = await fetch(`https://openapi.programming-hero.com/api/phone/${id}`);
    const data = await res.json();
    const phone = data.data
    showPhoneDetails(phone)

}
const showPhoneDetails = (phone) => {
    console.log(phone);
    const phoneName = document.getElementById('phone-name');
    phoneName.innerText = phone.name;

    const showDetailContainer = document.getElementById('show_details_container');
    showDetailContainer.innerHTML = `
   <img src="${phone.image}" alt="">
   <p> <span>Storage:</span>  ${phone.mainFeatures?.Storage} </span>  </P>
   `

    show_details_modal.showModal();
}
// handel search//
const handelsearch = () => {
    toggleLoadingSpinner(true);
    const searchField = document.getElementById('search-field');
    const searchText = searchField.value;
    console.log(searchText);
    loadphone(searchText);
}
const toggleLoadingSpinner = (isLoading) => {
    const loadingspiner = document.getElementById('loading-spinner');
    if (isLoading) {
        loadingspiner.classList.remove('hidden');
    }
    else {
        loadingspiner.classList.add('hidden');
    }
}


loadphone();