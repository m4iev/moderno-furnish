$searchInput = document.getElementById('search-input');

async function handle(e){
    if(e.keyCode === 13){
        e.preventDefault();

        window.location.href = `/products?search="${$searchInput.value}"`;
    }
}