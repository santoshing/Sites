const FakeUser = async () => {
    const res = await fetch('https://api.namefake.com/');
    const data = await res.json();
    console.log(data);
}

FakeUser();