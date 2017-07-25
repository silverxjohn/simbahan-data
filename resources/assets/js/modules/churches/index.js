const app = new Vue({
    el: '#app',
    data: {
        churches: [],
        currentPage: 1,
        limit: 25,
    },
    created() {
        axios.get('churches')
            .then(response => {
                this.churches = response.data;
        });
    },
    computed: {
        itemsCount() {
            return Math.ceil(this.churches.length / this.limit);
        },
        paginatedChurches() {
            var churchList = Object.assign([], this.churches);

            var firstItem = this.churches.length > 0 ? (this.currentPage - 1) * this.limit + 1 : 0;

            return churchList.splice(firstItem - 1, this.limit);
        },
        isFirstPage() {
            return this.currentPage == 1;
        },
        isLastPage() {
            return this.currentPage == this.itemsCount;
        }
    },
    methods: {
        IncrementPage() {
            this.currentPage += 1;
        },
        DecrementPage() {
            this.currentPage -= 1;
        },
        isActivePage(index) {
            return index == this.currentPage;
        },
        OnPaginatorButtonClicked(page) {
            this.currentPage = page;
        },
        OnEditChurchClick(id) {
            window.location.href = 'churches/' + id;
        },
        GetFirstItem() {
            this.churches.length > 0 ? (this.currentPage - 1) * this.limit + 1 : 0;
        }
    }
});