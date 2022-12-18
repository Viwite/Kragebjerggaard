export default class Produkter {
    constructor() {
        this.data = {
            password: "Krager",
        }

        this.rootElem = document.querySelector('.produkter');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
    }

    async init() {
        this.nameSearch.addEventListener('input', () => {
            if (this.nameSearch.value.length >= 3) {
                this.render();
            }
        });

        await this.render();
    }

    async render() {
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for (const item of data) {
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
                
                    <div class="card border-dark shadow-lg p-3 mb-5 rounded mb-3" style="max-width: 540px; background: #f1f1f1;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="uploads/${item.prodBillede}" class="img-fluid rounded-start" alt="produkt">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">${item.prodNavn}</h5>
                                    <p class="class-text">${item.prodBeskrivelse}</p>
                                    <p class="forfatter">${item.prodSort}</p>
                                    <p class="class-text">${item.prodPris}</p>
                                    <p class="class-text"><small class="text-muted">${item.prodKategori}</small></p>
                                    <a href="product.php?prodId=${item.prodId}" class="btn btn-secondary text-white w-100">Se produkt</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
            `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getData() {
        this.data.nameSearch = this.nameSearch.value;
        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }


}