const loadphone = async (searchText) => {
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
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>`   ;

        phoneContainer.appendChild(phonecard);

    });
}
// handel search//
const handelsearch = () => {
    const searchField = document.getElementById('search-field');
    const searchText = searchField.value;
    console.log(searchText);
    loadphone(searchText);
}


// loadphone();