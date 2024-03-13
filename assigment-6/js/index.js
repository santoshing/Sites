const Fashion = async () => {
    const response = await fetch('https://openapi.programming-hero.com/api/retro-forum/posts');
    const data = await response.json();
    // console.posts = data.posts;
    // console.log(data.posts);
    const posts = data.posts
    // console.log(posts)
    getPosts(posts)

}
function getPosts(elements) {
    const postContainer = document.getElementById('post-container')
    for (const singlepost of elements) {
        console.log(singlepost)
        const postdiv = document.createElement('div')
        postdiv.innerHTML = `
        <div class="card w-96 bg-base-100 shadow-xl">
    <figure><img src="${singlepost.image}" alt="Shoes" /></figure>
    <div class="card-body">


    <h2 class="card-title">${singlepost.title}</h2>
    <h2> Category : ${singlepost.category}</h2>
    <p>${singlepost.description}</p>
    <p>${singlepost.author.name}</p>

    <code>Comment : ${singlepost.comment_count} | View : ${singlepost.view_count} | Posted Time : ${singlepost.posted_time} </code>
    
    <div class="card-actions justify-end">
      <button class="btn btn-primary">Buy Now</button>
    </div>
    </div>
    </div>
        `

        postContainer.appendChild(postdiv)

    }


}





Fashion();






