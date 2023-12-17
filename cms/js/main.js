function createCategorie() {
    const form = document.getElementById("addNewCategory");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const formData = new FormData(form);

        const inputValue = formData.get("newCategory");

        fetch("/cms/php_querys/create_categorie.php", {
            method: "POST",
            "Content-Type": "aplication/json",
            body: JSON.stringify(inputValue),
        })
            .then((a) => a.text())
            .then((a) => console.log(a));
    });
}

function displayProductsFromCategory() {

    const addBtn = document.getElementsByClassName('category-link')[0];

    addBtn.addEventListener('click', function (a) {
        a.preventDefault();
        window.history.pushState('test', 'add', '?id=2');

        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('id');

        fetch("/cms/catalog/products.php", {
            method: "POST",
            "Content-Type": "aplication/json",
            body: JSON.stringify(id),
        })
            .then((a) => a.text())
            .then((a) => console.log(a));
    });

}

createCategorie();
displayProductsFromCategory();
