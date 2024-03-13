
window.onscroll = function () {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 10) {
        loadMore();
    }
}


function loadMore() {
    const id = document.getElementById("load-more").getAttribute("data-id");
    fetch(`https://fakerapi.it/api/v1/persons?page=${id}&_quantity=20`)
        .then(res => res.json())
        .then(data => getusers(data.data));


    document.getElementById("load-more").setAttribute("data-id", id + 1);
}
function FakeUser() {
    fetch("https://fakerapi.it/api/v1/persons?page=1&_quantity=20")
        .then(res => res.json())
        .then(data => getusers(data.data));
}
function getusers(elements) {
    const getusers = document.getElementById("users-container");
    for (const users of elements) {
        const div = document.createElement("div");
        div.classList.add("col-md-3");
        div.classList.add("p-2");
        div.innerHTML = `<div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-1 pt-1">
          <img src="https://xsgames.co/randomusers/avatar.php?g=${users.gender}&s=${users.address.buildingNumber}" alt="${users.firstname}" class="card-img-top" />
        </figure>
        <div class="card-body items-center text-center">
          <h4 class="card-title">${users.firstname} ${users.lastname}</h4>

          <p class="card-text">
          Phone : ${users.phone} <br>
          Gender : ${users.gender} <br>
          Email : ${users.email} 
          </p>
      
        </div>
        </div>`;
        getusers.appendChild(div);
    }

}

FakeUser();
