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
    laboratorySelect.innerHTML = "";
    if (category)
        laboratories.map(labs => {
            ({lab_name, id} = labs)
            if(id - category == 0){
                laboratorySelect.innerHTML += `
                <option value="${lab_name}">${lab_name}</option>
            `;
            }
        })
};

changeTests(categorySelect.value);

// Wathcing changes
categorySelect.addEventListener("change", ({ target }) =>
    changeTests(target.value)
);
