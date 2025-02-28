const h3 = document.querySelectorAll('.textUnderlined');

h3.forEach((element) => {
    element.addEventListener('mouseover', () => {
        element.style.textDecoration = 'underline';
    });

    element.addEventListener('mouseout', () => {
        element.style.textDecoration = ''; // Supprimer le soulignement lorsque le survol est terminé
    });
});
