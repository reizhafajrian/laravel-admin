class element extends HTMLElement {
    connectedCallback() {
        this.name = this.getAttribute("name") || null
        this.value = this.getAttribute("value") || null
        this.total = this.getAttribute("total") || null
        this.render()

    }
    render() {
        this.innerHTML = `
        <div class="menu-detail">
        <p>${this.name}</p>

            <div class="value">${this.value}</div>

        <p id="total">${this.total}</p>
    </div>`
    }
}
customElements.define("info-menu", element)
export default element