const button = document.getElementsByTagName('button')[0];
const inputData = <HTMLInputElement>document.getElementById('storeName');
const message = document.getElementsByClassName('message')[0];

button.addEventListener('click', () => {

    const res: Promise<Response> = fetch('http://localhost:3000/', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ value: inputData.value })
    })

    res.then(res => res.json()).then(res => {

        message.textContent = res.res;

        setTimeout(() => {
            message.textContent = '';
        }, 3000);
    });

});
