<nav>
    <ul class="pagination">
        <li v-if="pagination.current_page > 1">
            <a href="#" @click.prevent="changePage(pagination.current_page - 1)">
                <span>&laquo;</span>
            </a>
        </li>

        <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active':'']">
            <a href="#" @click.prevent="changePage(page)">
                @{{ page }}
            </a>
        </li>

        <li  v-if="pagination.current_page < pagination.last_page">
            <a href="#"  @click.prevent="changePage(pagination.current_page + 1)">
                <span>&raquo;</span>
            </a>
        </li>
    </ul>
</nav>