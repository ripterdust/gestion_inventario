"use strict";

const nitInput = document.querySelector("#nit");

nitInput.addEventListener("keyup", ({ target }) => {
    const { value } = target;

    if (!validateNit(value)) return;

    // Se hace el fetch para pedir los datos al cliente
});
