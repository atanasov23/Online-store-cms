function createCategorie() {
    const form = document.getElementById("addNewCategory");

    if (form) {

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
}

function displayProductsFromCategory() {

    const elements = document.getElementsByClassName('category-link');

    for (let btn of elements) {

        btn.addEventListener('click', function (a) {
            a.preventDefault();
            window.history.pushState('id', 'addId', `?id=${btn.getAttribute('href')[btn.getAttribute('href').length - 1]}`);

            const id = btn.getAttribute('href')[btn.getAttribute('href').length - 1];

            const btnAddNew = document.getElementsByClassName('btn-add-new')[0];

            btnAddNew.setAttribute('href', `/cms/product/details?catId=${id}`);
        });
    }
}

createCategorie();
displayProductsFromCategory();
