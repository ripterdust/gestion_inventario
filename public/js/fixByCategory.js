const laboratorySelect = document.querySelector("#laboratory");
const categorySelect = document.querySelector("#test");

let categories = {};

// Sorting by cat
laboratories.map(({ category, name }) => {
    categories[category] = categories[category]
        ? [...categories[category], name]
        : [name];
});

// Changing the tests
const changeTests = (category) => {
    const cats = categories[category];
    laboratorySelect.innerHTML = "";

    if (cats)
        cats.map((cat) => {
            laboratorySelect.innerHTML += `
                <option value="${cat}">${cat}</option>
            `;
        });
};

changeTests(categorySelect.value);

// Wathcing changes
categorySelect.addEventListener("change", ({ target }) =>
    changeTests(target.value)
);
